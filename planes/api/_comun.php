<?php
/*
 * Cobro de los planes con la API de Mercado Pago (Checkout Bricks).
 *
 * Las claves NO van en el repositorio. Se guardan en un archivo fuera de la
 * carpeta publica del hosting, por ejemplo:
 *
 *   /home2/manyobra/manyobra-privado/mercadopago.php
 *
 * con este contenido:
 *
 *   <?php
 *   return [
 *     'access_token'   => 'APP_USR-...',   // o TEST-... para probar
 *     'webhook_secret' => '',              // "Clave secreta" de Webhooks (opcional)
 *     'aviso_email'    => 'contacto@manyobra.cl',
 *   ];
 *
 * En la misma carpeta privada se guardan el registro de pagos (pagos.csv) y
 * los contadores de intentos por IP.
 */

// Los errores de PHP no deben ensuciar las respuestas JSON.
ini_set('display_errors', '0');

// Precios netos de los planes (sistema de 90 dias). El monto a cobrar se
// calcula SIEMPRE aqui, nunca se toma del navegador.
const MO_PLANES = [
    'base'        => ['nombre' => 'Base',          'neto' => 300000],
    'constructor' => ['nombre' => 'Constructor',   'neto' => 480000],
    'llave'       => ['nombre' => 'Llave en Mano', 'neto' => 960000],
];
const MO_IVA = 0.19;
const MO_MAX_CUOTAS = 3;

function mo_total(string $plan): int
{
    return (int) round(MO_PLANES[$plan]['neto'] * (1 + MO_IVA));
}

function mo_dir_privado(): string
{
    $env = getenv('MO_PRIVADO');
    if ($env) return rtrim($env, '/');
    return dirname(rtrim($_SERVER['DOCUMENT_ROOT'] ?? __DIR__, '/')) . '/manyobra-privado';
}

function mo_config(): array
{
    $archivo = mo_dir_privado() . '/mercadopago.php';
    if (!is_file($archivo)) return [];
    $c = include $archivo;
    return is_array($c) ? $c : [];
}

function mo_json(int $codigo, array $datos): void
{
    http_response_code($codigo);
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: no-store');
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);
    exit;
}

function mo_ip(): string
{
    return $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}

// Limite simple de intentos por IP, para frenar a quien pruebe tarjetas robadas.
function mo_limitar(string $clave, int $max, int $segundos): bool
{
    $dir = mo_dir_privado() . '/limites';
    if (!is_dir($dir)) @mkdir($dir, 0700, true);
    $archivo = $dir . '/' . sha1($clave) . '.json';
    $ahora = time();
    $marcas = [];
    if (is_file($archivo)) {
        $marcas = json_decode((string) @file_get_contents($archivo), true) ?: [];
    }
    $marcas = array_values(array_filter($marcas, fn($t) => $t > $ahora - $segundos));
    if (count($marcas) >= $max) return false;
    $marcas[] = $ahora;
    @file_put_contents($archivo, json_encode($marcas), LOCK_EX);
    return true;
}

function mo_registrar(array $fila): void
{
    $dir = mo_dir_privado();
    if (!is_dir($dir)) return;
    $f = @fopen($dir . '/pagos.csv', 'a');
    if (!$f) return;
    fputcsv($f, array_merge([date('c')], $fila), ',', '"', '');
    fclose($f);
}

function mo_mp(string $metodo, string $ruta, string $token, ?array $cuerpo = null, ?string $idempotencia = null): array
{
    $ch = curl_init('https://api.mercadopago.com' . $ruta);
    $cabeceras = ['Authorization: Bearer ' . $token, 'Content-Type: application/json'];
    if ($idempotencia) $cabeceras[] = 'X-Idempotency-Key: ' . $idempotencia;
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST  => $metodo,
        CURLOPT_HTTPHEADER     => $cabeceras,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 40,
    ]);
    if ($cuerpo !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cuerpo));
    $resp = curl_exec($ch);
    $codigo = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    return [$codigo, $resp === false ? null : json_decode($resp, true), $error];
}

<?php
// Recibe el token de tarjeta que genera el formulario de Mercado Pago en el
// checkout y crea el pago con la API. Los datos de la tarjeta nunca llegan aca:
// solo el token de un uso que entrega Mercado Pago.
require __DIR__ . '/_comun.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') mo_json(405, ['error' => 'Método no permitido']);

// Solo se acepta desde el propio sitio.
$origen = parse_url($_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_REFERER'] ?? '', PHP_URL_HOST) ?: '';
$permitidos = ['manyobra.cl', 'www.manyobra.cl', 'localhost', '127.0.0.1'];
if (!in_array($origen, $permitidos, true)) mo_json(403, ['error' => 'Origen no permitido']);

$cfg = mo_config();
$token = $cfg['access_token'] ?? '';
if (!$token) mo_json(503, ['error' => 'El pago con tarjeta aún no está configurado.']);

if (!mo_limitar('pagar|' . mo_ip(), 6, 900)) {
    mo_json(429, ['error' => 'Demasiados intentos. Espera unos minutos o escríbenos por WhatsApp.']);
}

$in = json_decode((string) file_get_contents('php://input'), true);
if (!is_array($in)) mo_json(400, ['error' => 'Solicitud inválida']);

$plan = (string) ($in['plan'] ?? '');
if (!isset(MO_PLANES[$plan])) mo_json(400, ['error' => 'Plan inválido']);

$fd = $in['formData'] ?? [];
$cardToken = (string) ($fd['token'] ?? '');
$metodo = (string) ($fd['payment_method_id'] ?? '');
$cuotas = (int) ($fd['installments'] ?? 1);
$emisor = $fd['issuer_id'] ?? null;
$email = (string) ($fd['payer']['email'] ?? '');
$ident = $fd['payer']['identification'] ?? null;

if (!preg_match('/^[A-Za-z0-9]{10,64}$/', $cardToken)) mo_json(400, ['error' => 'Datos de tarjeta inválidos']);
if (!preg_match('/^[a-z_]{2,30}$/', $metodo)) mo_json(400, ['error' => 'Medio de pago inválido']);
if ($cuotas < 1 || $cuotas > MO_MAX_CUOTAS) mo_json(400, ['error' => 'Cantidad de cuotas inválida']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) mo_json(400, ['error' => 'Correo inválido']);

$cli = $in['cliente'] ?? [];
$limpiar = fn($v, $n = 80) => mb_substr(trim(strip_tags((string) $v)), 0, $n);
$cliente = [
    'nombre'   => $limpiar($cli['nombre'] ?? ''),
    'empresa'  => $limpiar($cli['empresa'] ?? ''),
    'telefono' => $limpiar($cli['telefono'] ?? '', 30),
    'zona'     => $limpiar($cli['zona'] ?? ''),
    'rut'      => $limpiar($cli['rut'] ?? '', 15),
];

$p = MO_PLANES[$plan];
$total = mo_total($plan);
$referencia = 'MO-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
$partes = preg_split('/\s+/', $cliente['nombre'], 2);

$pago = [
    'transaction_amount' => $total,
    'token'              => $cardToken,
    'description'        => 'Manyobra · Plan ' . $p['nombre'] . ' (90 días)',
    'installments'       => $cuotas,
    'payment_method_id'  => $metodo,
    'statement_descriptor' => 'MANYOBRA',
    'external_reference' => $referencia,
    'payer'              => ['email' => $email],
    'metadata'           => ['plan' => $plan] + $cliente,
    'additional_info'    => [
        'items' => [[
            'id' => $plan, 'title' => 'Plan ' . $p['nombre'] . ' · Método Maestro 90 días',
            'category_id' => 'services', 'quantity' => 1, 'unit_price' => $total,
        ]],
        'payer' => ['first_name' => $partes[0] ?? '', 'last_name' => $partes[1] ?? ''],
    ],
];
if ($emisor) $pago['issuer_id'] = (string) $emisor;
if (is_array($ident) && !empty($ident['number'])) {
    $pago['payer']['identification'] = ['type' => (string) ($ident['type'] ?? ''), 'number' => (string) $ident['number']];
}
$host = $_SERVER['HTTP_HOST'] ?? '';
if (strpos($host, 'manyobra.cl') !== false) {
    $pago['notification_url'] = 'https://manyobra.cl/planes/api/webhook.php';
}

[$codigo, $r, $err] = mo_mp('POST', '/v1/payments', $token, $pago, $referencia);

// Mercado Pago responde 201 con el pago creado. Un 4xx trae {message, status: 400}
// (datos invalidos, token vencido, credenciales malas): no es un pago.
$estados = ['approved', 'in_process', 'pending', 'rejected', 'authorized', 'cancelled'];
if (!is_array($r) || $codigo >= 400 || !in_array($r['status'] ?? '', $estados, true)) {
    mo_registrar(['error', $referencia, $plan, $total, $cuotas, $cliente['empresa'], $email, $codigo, $err ?: ($r['message'] ?? '')]);
    if ($codigo >= 400 && $codigo < 500 && $codigo !== 401 && $codigo !== 403) {
        mo_json(400, ['error' => 'Mercado Pago no aceptó los datos de la tarjeta. Revísalos y vuelve a intentar.']);
    }
    mo_json(502, ['error' => 'No pudimos conectar con Mercado Pago. Intenta de nuevo en un momento.']);
}

$estado = (string) $r['status'];
$detalle = (string) ($r['status_detail'] ?? '');
mo_registrar([$estado, $referencia, $plan, $total, $cuotas, $cliente['empresa'], $email, $r['id'] ?? '', $detalle]);

if ($estado === 'approved' && !empty($cfg['aviso_email'])) {
    $txt = "Nuevo pago aprobado en el checkout.\n\n"
        . "Plan: {$p['nombre']}\nTotal: $" . number_format($total, 0, ',', '.') . " ({$cuotas} cuota/s)\n"
        . "Empresa: {$cliente['empresa']}\nNombre: {$cliente['nombre']}\nWhatsApp: {$cliente['telefono']}\n"
        . "Correo: {$email}\nZona: {$cliente['zona']}\nRUT: {$cliente['rut']}\n"
        . "Referencia: {$referencia}\nID Mercado Pago: " . ($r['id'] ?? '') . "\n";
    @mail($cfg['aviso_email'], '=?UTF-8?B?' . base64_encode('Pago aprobado: Plan ' . $p['nombre'] . ' · ' . $cliente['empresa']) . '?=', $txt,
        "Content-Type: text/plain; charset=UTF-8\r\nFrom: Manyobra <no-responder@manyobra.cl>");
}

mo_json(200, [
    'status'        => $estado,
    'status_detail' => $detalle,
    'id'            => $r['id'] ?? null,
    'referencia'    => $referencia,
    'total'         => $total,
]);

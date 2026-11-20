<?php
// Mercado Pago avisa aca cada cambio de un pago (aprobado, rechazado,
// devuelto...). Se consulta el pago en la API para no confiar en el aviso y
// se guarda en pagos.csv. Configurar en Mercado Pago Developers > Webhooks:
// https://manyobra.cl/planes/api/webhook.php con el evento "Pagos".
require __DIR__ . '/_comun.php';

$cfg = mo_config();
$token = $cfg['access_token'] ?? '';
if (!$token) mo_json(200, ['ok' => false]);

$cuerpo = json_decode((string) file_get_contents('php://input'), true) ?: [];
$tipo = $_GET['type'] ?? $_GET['topic'] ?? $cuerpo['type'] ?? '';
$id = $_GET['data_id'] ?? $_GET['id'] ?? ($cuerpo['data']['id'] ?? '');
$id = preg_replace('/[^0-9A-Za-z]/', '', (string) $id);

if ($tipo !== 'payment' || $id === '') mo_json(200, ['ok' => true]);

// Firma del aviso (si se configuro la clave secreta de Webhooks).
$secreto = $cfg['webhook_secret'] ?? '';
if ($secreto) {
    $firma = $_SERVER['HTTP_X_SIGNATURE'] ?? '';
    $reqId = $_SERVER['HTTP_X_REQUEST_ID'] ?? '';
    $ts = $v1 = '';
    foreach (explode(',', $firma) as $parte) {
        [$k, $v] = array_map('trim', explode('=', $parte, 2) + [1 => '']);
        if ($k === 'ts') $ts = $v;
        if ($k === 'v1') $v1 = $v;
    }
    $manifiesto = 'id:' . strtolower($id) . ';request-id:' . $reqId . ';ts:' . $ts . ';';
    if (!$ts || !$v1 || !hash_equals(hash_hmac('sha256', $manifiesto, $secreto), $v1)) {
        mo_json(401, ['ok' => false]);
    }
}

[$codigo, $r] = mo_mp('GET', '/v1/payments/' . $id, $token);
if ($codigo === 200 && is_array($r)) {
    mo_registrar(['aviso:' . ($r['status'] ?? ''), $r['external_reference'] ?? '', $r['metadata']['plan'] ?? '',
        $r['transaction_amount'] ?? '', $r['installments'] ?? '', $r['metadata']['empresa'] ?? '',
        $r['payer']['email'] ?? '', $id, $r['status_detail'] ?? '']);
}
mo_json(200, ['ok' => true]);

<?php
// wilayah.php
//
// Endpoint serbaguna:
//   - ?type=provinces
//   - ?type=regencies&code=PROVINCE_CODE
//   - ?type=districts&code=REGENCY_CODE

header('Content-Type: application/json; charset=utf-8');
// Untuk diakses dari browser (AJAX). Jika mau dibatasi, ganti * dengan origin aplikasi Anda.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, OPTIONS');

// Handle preflight CORS (OPTIONS)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$baseUrl = 'https://wilayah.id/api';

// Ambil parameter
$type = isset($_GET['type']) ? strtolower(trim($_GET['type'])) : 'provinces';
$code = isset($_GET['code']) ? trim($_GET['code']) : '';

// Tentukan URL ke API wilayah.id
switch ($type) {
    case 'provinces':
        $url = $baseUrl . '/provinces.json';
        break;

    case 'regencies':
        if ($code === '') {
            http_response_code(400);
            echo json_encode([
                'message' => 'Parameter code (PROVINCE_CODE) wajib diisi untuk type=regencies. Contoh: ?type=regencies&code=17'
            ]);
            exit;
        }
        $url = $baseUrl . '/regencies/' . rawurlencode($code) . '.json';
        break;

    case 'districts':
        if ($code === '') {
            http_response_code(400);
            echo json_encode([
                'message' => 'Parameter code (REGENCY_CODE) wajib diisi untuk type=districts. Contoh: ?type=districts&code=17.01'
            ]);
            exit;
        }
        $url = $baseUrl . '/districts/' . rawurlencode($code) . '.json';
        break;

    default:
        http_response_code(400);
        echo json_encode([
            'message' => 'Parameter type tidak valid. Gunakan: provinces, regencies, atau districts.'
        ]);
        exit;
}

// Panggil API dengan cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$result   = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($result === false) {
    $error = curl_error($ch);
    curl_close($ch);

    http_response_code(500);
    echo json_encode([
        'message' => 'Gagal mengambil data dari API wilayah.id',
        'error'   => $error,
    ]);
    exit;
}

curl_close($ch);

// Teruskan status code dan isi respons dari wilayah.id
http_response_code($httpCode);
echo $result;
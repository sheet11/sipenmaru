<?php
require_once "../config/koneksi.php";

$sesi = isset($_GET['sesi']) ? mysqli_real_escape_string($kon, $_GET['sesi']) : '';
$filename = 'moodle_import_' . preg_replace('/[^A-Za-z0-9_\-]/', '_', $sesi) . '.csv';

$sql4 = "SELECT username, nama_lengkap, pilihan_prodi, pilihan_prodi2, sesi_ujian FROM tb_formulir4 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC";
$query4 = mysqli_query($kon, $sql4);
if (!$query4) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "SQL error (tb_formulir4): " . mysqli_error($kon);
    exit;
}

$sql5 = "SELECT username, nama_lengkap, pilihan_prodi, sesi_ujian FROM tb_formulir5 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC";
$query5 = mysqli_query($kon, $sql5);
if (!$query5) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "SQL error (tb_formulir5): " . mysqli_error($kon);
    exit;
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$output = fopen('php://output', 'w');
if (!$output) {
    exit;
}

fputcsv($output, ['username', 'firstname', 'lastname', 'email', 'password', 'cohort1']);

while ($row = mysqli_fetch_assoc($query4)) {
    $lastname = trim($row['pilihan_prodi']);
    if (!empty($row['pilihan_prodi2'])) {
        $lastname .= ' & ' . trim($row['pilihan_prodi2']);
    }

    fputcsv($output, [
        $row['username'],
        $row['nama_lengkap'],
        $lastname,
        $row['username'] . '@gmail.com',
        $row['username'] . 'Spmb-bkl',
        $row['sesi_ujian'],
    ]);
}

while ($row = mysqli_fetch_assoc($query5)) {
    $lastname = trim($row['pilihan_prodi']);

    fputcsv($output, [
        $row['username'],
        $row['nama_lengkap'],
        $lastname,
        $row['username'] . '@gmail.com',
        $row['username'] . 'Spmb-bkl',
        $row['sesi_ujian'],
    ]);
}

fclose($output);
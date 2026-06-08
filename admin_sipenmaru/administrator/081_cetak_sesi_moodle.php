<?php
require_once "../config/koneksi.php";

$sesi = isset($_GET['sesi']) ? mysqli_real_escape_string($kon, $_GET['sesi']) : '';
$filename = 'moodle_import_' . preg_replace('/[^A-Za-z0-9_\-]/', '_', $sesi) . '.csv';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$output = fopen('php://output', 'w');
if (!$output) {
    exit;
}

fputcsv($output, ['username', 'firstname', 'lastname', 'email', 'password', 'cohort1']);

$query4 = mysqli_query($kon, "SELECT username, nama_lengkap, pilihan_prodi, pilihan_prodi2, sesi_ujian FROM tb_formulir4 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC");
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

$query5 = mysqli_query($kon, "SELECT username, nama_lengkap, pilihan_prodi, pilihan_prodi2, sesi_ujian FROM tb_formulir5 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC");
while ($row = mysqli_fetch_assoc($query5)) {
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

fclose($output);
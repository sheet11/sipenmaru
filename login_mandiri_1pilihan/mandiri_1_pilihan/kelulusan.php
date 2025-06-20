<?php
session_start();
include "../config/koneksi.php"; // Pastikan koneksi database sudah benar

// Contoh: Ambil status kelulusan dari session atau database
// Misal: $_SESSION['kelulusan'] = 'lulus' atau 'gagal'
// Ambil status kelulusan dari database berdasarkan username yang login
if (isset($_SESSION['username'])) {

    $username = $kon->real_escape_string($_SESSION['username']);
    $sql = "SELECT status_lulus FROM tb_formulir5 WHERE username = '$username' LIMIT 1";
    $result = $kon->query($sql);
    if ($result && $row = $result->fetch_assoc()) {
        $status_kelulusan = $row['status_lulus'];
    }
    $kon->close();
}

// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pengumuman Kelulusan</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 400px; margin: 80px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        .success { color: #2e7d32; font-weight: bold; }
        .failed { color: #c62828; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pengumuman Kelulusan</h2>
        <?php if ($status_kelulusan === 'Lulus'): ?>
            <p class="success">Selamat, Anda dinyatakan <b>LULUS</b> tahap 1</p>
        <?php elseif ($status_kelulusan === 'Tidak Lulus'): ?>
            <p class="failed">Maaf, Anda <b>belum lulus</b>. Silakan coba pada periode selanjutnya.</p>
        <?php else: ?>
            <p>Status kelulusan Anda belum tersedia.</p>
        <?php endif; ?>
    </div>
</body>
</html>
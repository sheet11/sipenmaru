<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "session.php";
include "../config/koneksi.php";

// =============================
// AMBIL DATA WAJIB
// =============================
$user   = $_SESSION['username'];
$jenis  = $_POST['prestasi'];
$tgl    = $_POST['tgl'];

// =============================
// AMANKAN DATA OPTIONAL
// =============================
$nama    = isset($_POST['nama']) && $_POST['nama'] !== '' ? addslashes($_POST['nama']) : null;
$ket     = isset($_POST['ket']) && $_POST['ket'] !== '' ? addslashes($_POST['ket']) : null;
$tingkat = isset($_POST['tingkat']) && $_POST['tingkat'] !== '' ? addslashes($_POST['tingkat']) : null;
$bahasa  = isset($_POST['bahasa']) && $_POST['bahasa'] !== '' ? addslashes($_POST['bahasa']) : null;

// =============================
// INISIALISASI KOLOM JUZ
// =============================
$juz = null;

// =============================
// PENANGANAN KHUSUS PER JENIS PRESTASI
// =============================

// 1. TAHFIZ → MASUK KE KOLOM juz
if ($jenis === "Tahfiz") {
    if (empty($ket)) {
        echo "<script>alert('❌ Juz wajib diisi untuk Tahfiz');window.history.back();</script>";
        exit;
    }
    $juz = $ket;
    $ket = null;
}

// 2. PASKIBRAKA → tidak perlu ket, hanya tingkat
elseif ($jenis === "Paskibraka") {
    if (empty($tingkat)) {
        echo "<script>alert('❌ Tingkat wajib diisi untuk Paskibraka');window.history.back();</script>";
        exit;
    }
    $nama = "Paskibraka";
    $ket = null;
}

// 3. KEMAMPUAN BERBAHASA ASING → butuh bahasa dan ket (level/nilai)
elseif ($jenis === "Kemampuan Berbahasa Asing") {
    // Debug untuk melihat apa yang diterima
    // echo "DEBUG - Bahasa: '$bahasa', Ket: '$ket'<br>";
    // print_r($_POST);
    // exit;
    
    if (empty($bahasa)) {
        echo "<script>alert('❌ Bahasa wajib dipilih');window.history.back();</script>";
        exit;
    }
    
    // CEK ULANG ket dari POST (bukan dari variabel yang sudah diproses)
    if (!isset($_POST['ket']) || $_POST['ket'] === '') {
        echo "<script>alert('❌ Level/Nilai bahasa wajib diisi');window.history.back();</script>";
        exit;
    }
    
    // Pastikan ket terisi dari POST
    $ket = addslashes($_POST['ket']);
    
    $nama = "Kemampuan Berbahasa " . $bahasa;
    $tingkat = null;
}

// 4. PRESTASI AKADEMIK (JUARA KELAS)
elseif ($jenis === "Prestasi Akademik (Juara Kelas)") {
    if (empty($ket)) {
        echo "<script>alert('❌ Keterangan juara wajib diisi');window.history.back();</script>";
        exit;
    }
    $nama = "Juara Kelas";
    $tingkat = 7;
}

// 5. PRESTASI AKADEMIK & NON AKADEMIK
elseif ($jenis === "Prestasi Akademik" || $jenis === "Prestasi Non Akademik") {
    if (empty($nama)) {
        echo "<script>alert('❌ Nama prestasi wajib diisi');window.history.back();</script>";
        exit;
    }
    if (empty($tingkat)) {
        echo "<script>alert('❌ Tingkat prestasi wajib diisi');window.history.back();</script>";
        exit;
    }
    if (empty($ket)) {
        echo "<script>alert('❌ Keterangan juara wajib diisi');window.history.back();</script>";
        exit;
    }
}

// =============================
// UPLOAD FILE
// =============================
$bukti_n = $_FILES['bukti']['name'];
$bukti_t = $_FILES['bukti']['tmp_name'];

if (empty($bukti_n)) {
    echo "<script>alert('❌ Bukti wajib diupload');window.history.back();</script>";
    exit;
}

// Validasi ukuran file (max 500KB = 512000 bytes)
if ($_FILES['bukti']['size'] > 512000) {
    echo "<script>alert('❌ Ukuran file maksimal 500KB');window.history.back();</script>";
    exit;
}

// Validasi ekstensi file
$allowed_ext = ['jpg', 'jpeg', 'png'];
$file_ext = strtolower(pathinfo($bukti_n, PATHINFO_EXTENSION));

if (!in_array($file_ext, $allowed_ext)) {
    echo "<script>alert('❌ Format file harus .jpg, .jpeg, atau .png');window.history.back();</script>";
    exit;
}

$namaFix = $user . "-" . time() . "." . $file_ext;

// =============================
// SIMPAN KE DATABASE
// =============================
$simpan = mysqli_query($kon, "
    INSERT INTO tb_prestasi 
    (username, nama, jenis_prestasi, ket, juz, tingkat, bahasa, bukti_n, tgl)
    VALUES 
    (
        '$user',
        " . ($nama ? "'$nama'" : "NULL") . ",
        '$jenis',
        " . ($ket ? "'$ket'" : "NULL") . ",
        " . ($juz ? "'$juz'" : "NULL") . ",
        " . ($tingkat ? "'$tingkat'" : "NULL") . ",
        " . ($bahasa ? "'$bahasa'" : "NULL") . ",
        '$namaFix',
        '$tgl'
    )
");

// =============================
// CEK ERROR MYSQL
// =============================
if (!$simpan) {
    die("❌ Gagal simpan ke database: " . mysqli_error($kon));
}

// =============================
// PINDAHKAN FILE
// =============================
// Cek/buat folder prestasi jika belum ada
if (!file_exists('prestasi')) {
    mkdir('prestasi', 0777, true);
}

if (!move_uploaded_file($bukti_t, "prestasi/$namaFix")) {
    // Rollback database jika upload gagal
    mysqli_query($kon, "DELETE FROM tb_prestasi WHERE username='$user' AND bukti_n='$namaFix'");
    echo "<script>alert('❌ Gagal mengupload file');window.history.back();</script>";
    exit;
}

echo "<script>
    alert('✅ Prestasi berhasil disimpan');
    window.location='04_upload_prestasi.php';
</script>";
?>
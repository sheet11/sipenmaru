<?php 
include "session.php";
include "../config/koneksi.php";

$user 	= $_SESSION['username'];
$nama 	= addslashes($_POST['nama']);
$ket    = addslashes($_POST['ket']); // keterangan atau juz
$jenis  = $_POST['prestasi'];  // Jenis prestasi (Akademik / Non Akademik / Paskibraka / Tahfiz)
$juz    = ""; // default kosong

// Jika prestasi Tahfiz → ket = jumlah Juz
$juz = ($jenis == "Tahfiz") ? $ket : ""; 

$tingkat= addslashes($_POST['tingkat']);
$bukti_n= $_FILES['bukti']['name'];
$bukti_t= $_FILES['bukti']['tmp_name'];
$tgl 	= addslashes($_POST['tgl']);
$unama  = $_SESSION['username'];


$simpan = mysqli_query($kon,"
    INSERT INTO tb_prestasi 
    (username, nama, jenis_prestasi, ket, juz, tingkat, bukti_n, tgl)
    VALUES 
    ('$user', '$nama', '$jenis', '$ket', '$juz', '$tingkat', '$unama-$bukti_n', '$tgl')
");

if ($jenis == "Tahfiz") {
    $juz = $ket;  // karena input form user memasukkan Juz ke name="ket"
    $ket = "";    // ket tidak perlu disimpan
}


if($simpan)
{
	move_uploaded_file($bukti_t, "prestasi/$unama-$bukti_n");
	echo "<script>alert('Prestasi berhasil disimpan');window.location='04_upload_prestasi.php'</script>";
}
else
{
	echo "<script>alert('Prestasi gagal disimpan');history.back()</script>";
}
?>
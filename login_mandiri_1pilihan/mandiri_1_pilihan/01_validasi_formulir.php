<?php
error_reporting(0);
include "session.php";
?>
<?php
$date = date("Y-m-d");
require_once("../config/koneksi.php");
$nama = $_SESSION['username'];
$id_formulir = $_GET['id_formulir'];

$query1_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query1_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah1 = mysqli_num_rows($query1_4) + mysqli_num_rows($query1_5);

// Sesi 2
$query2_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query2_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah2 = mysqli_num_rows($query2_4) + mysqli_num_rows($query2_5);

// Sesi 3
$query3_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query3_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah3 = mysqli_num_rows($query3_4) + mysqli_num_rows($query3_5);

// Sesi 4
$query4_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query4_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah4 = mysqli_num_rows($query4_4) + mysqli_num_rows($query4_5);

// Sesi 5
$query5_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query5_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah5 = mysqli_num_rows($query5_4) + mysqli_num_rows($query5_5);

// Sesi 6
$query6_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query6_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah6 = mysqli_num_rows($query6_4) + mysqli_num_rows($query6_5);

// Sesi 7
$query7_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query7_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah7 = mysqli_num_rows($query7_4) + mysqli_num_rows($query7_5);

// Sesi 8
$query8_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query8_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah8 = mysqli_num_rows($query8_4) + mysqli_num_rows($query8_5);

// Sesi 9
$query9_4 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$query9_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB' AND tahun_daftar='" . date('Y') . "'");
$jumlah9 = mysqli_num_rows($query9_4) + mysqli_num_rows($query9_5);


if ($jumlah1 < 120) {
	$sesi = 'Sesi 1 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2026-06-09';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah2 < 120) {
	$sesi = 'Sesi 2 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2026-06-09';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah3 < 120) {
	$sesi = 'Sesi 3 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2026-06-09';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah4 < 120) {
	$sesi = 'Sesi 4 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2026-06-10';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah5 < 120) {
	$sesi = 'Sesi 5 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2026-06-10';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah6 < 120) {
	$sesi = 'Sesi 6 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2026-06-10';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah7 < 120) {
	$sesi = 'Sesi 7 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2026-06-11';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah8 < 120) {
	$sesi = 'Sesi 8 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2026-06-11';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah9 < 120) {
	$sesi = 'Sesi 9 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2026-06-11';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} else {
	$sesi = 'Silahkan menghubungi panitia untuk penjadwalan ujian';
	$tgl_ujian = 'Silahkan menghubungi panitia untuk penjadwalan ujian';
	$tempat_ujian = 'Silahkan menghubungi panitia untuk penjadwalan ujian';
	$ruang_ujian = 'Silahkan menghubungi panitia untuk penjadwalan ujian';
}

$data = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE id_formulir='$id_formulir'");
$a = mysqli_fetch_array($data);
if (empty($a['sesi_ujian'])) {
	$sesi_ujian = $sesi;
	$tanggal_ujian = $tgl_ujian;
	$tempat_ujian = $tempat_ujian;
	$ruang_ujian = $ruang_ujian;
} else {
	$sesi_ujian = $a['sesi_ujian'];
	$tanggal_ujian = $a['tanggal_ujian'];
	$tempat_ujian = $a['tempat_ujian'];
	$ruang_ujian = $a['ruang_ujian'];
}

if (empty($nama_file)) {

	$qr = mysqli_query($kon, "update tb_formulir5 set tanggal_ujian = '$tanggal_ujian',
													tanggal_ujian = '$tanggal_ujian',
													sesi_ujian = '$sesi_ujian',
													tempat_ujian = '$tempat_ujian',
													ruang_ujian = '$ruang_ujian'							
												  	where id_formulir= '$id_formulir'");
	if ($qr) {
		echo "<script>alert('Formulir berhasil divalidasi.');window.location='01_formulir.php'</script>";
	} else {
		echo "<script>alert('Mohon maaf, validasi formulir gagal.');window.location='01_formulir.php'</script>";
	}
} else {
				$qr = mysqli_query($kon, "update tb_formulir5 set tanggal_ujian = '$tanggal_ujian',
													sesi_ujian = '$sesi_ujian',
													tempat_ujian = '$tempat_ujian',
													ruang_ujian = '$ruang_ujian',						
												  	where id_formulir= '$id_formulir'");
				if ($qr) {
					echo "<script>alert('Data berhasil diperbarui.');window.location='01_formulir.php'</script>";
				} else {
					echo "<script>alert('Mohon maaf, validasi formulir gagal.');window.location='01_formulir.php'</script>";
				}
}
?>
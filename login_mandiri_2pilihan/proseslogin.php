<?php
// memanggil file koneksi.php
include "config/koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$password = ($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$pengumuman = mysqli_query($kon, "SELECT * FROM periode WHERE nama_periode='Pengumuman Mandiri Tahap 1' AND status_periode='Buka'");
$pengumuman2 = mysqli_query($kon, "SELECT * FROM periode WHERE nama_periode='Pengumuman Mandiri Tahap 2' AND status_periode='Buka'");
$cek_pengumuman = mysqli_num_rows($pengumuman);
$cek_pengumuman2 = mysqli_num_rows($pengumuman2);
$perintah = "select * from tb_formulir4 WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($kon, $perintah);
$row = mysqli_fetch_array($hasil);
if ($row && $row['level'] == "MANDIRI 2 PILIHAN") {
	session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
	$_SESSION['level'] = $row['level'];

	if ($row['status'] == 'Terdaftar') {
		mysqli_query($kon, "update tb_formulir4 set tanggal_login = DATE_ADD(NOW(), INTERVAL 7 HOUR), status = 'Sudah Membayar' where username = '$username'");
	} else {
		mysqli_query($kon, "update tb_formulir4 set tanggal_login = DATE_ADD(NOW(), INTERVAL 7 HOUR) where username = '$username'");
	}
	
		if ($cek_pengumuman > 0) {
		$pengumuman_row = mysqli_fetch_assoc($pengumuman);
		header("location:mandiri_2_pilihan/cetak_pengumuman.php");
	}elseif ($cek_pengumuman2 > 0) {
		$pengumuman_row = mysqli_fetch_assoc($pengumuman2);
		header("location:mandiri_2_pilihan/cetak_pengumuman_tahap2.php");		
	} else {
		header("location:mandiri_2_pilihan/index.php");
	}
} else {
	echo "ID atau Pin salah, coba ulangi lagi...";
}
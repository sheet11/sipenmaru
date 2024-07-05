<?php
// memanggil file koneksi.php
include "config/koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$password = ($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$perintah = "select * from tb_formulir3 WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($kon,$perintah);
$row = mysqli_fetch_array($hasil);
if($row && $row['level'] == "PMDP")
	{
		session_start(); // memulai fungsi session
		$_SESSION['username'] = $username;
		$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
		$_SESSION['level'] = $row['level'];

		if($row['status_pmdp'] == "LULUS"){
			header("location:pmdp/pengumuman.php"); // jika berhasil login, maka masuk ke file home.php
		}elseif($row['status_pmdp'] == "TIDAK LULUS"){
			echo "Mohon maaf anda dinyatakan tidak lulus, silahkan mendaftar pada jalur Sipenmaru Bersama(SIMAMA) pada website <a href='https://simama-poltekkes.kemkes.go.id/'>https://simama-poltekkes.kemkes.go.id</a> sampai tanggal 03 Mei 2024";
		}else{
			header("location:pmdp/index.php");
		}
	}
	
	else
		{
			echo "<meta http-equiv='refresh' content='2;url=index.php' />Username atau password salah coba ulangi lagi";
		}	
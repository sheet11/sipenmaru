<?php
// memanggil file koneksi.php
include "config/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
include("pmdp/fucnt_tgl.php");
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$password = ($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$perintah = "select * from tb_formulir3 WHERE username = '$username' AND password = '$password'";
$date = date('d-m-Y  H:i:s');
$hasil = mysqli_query($kon,$perintah);
$row = mysqli_fetch_array($hasil);
if($row && $row['level'] == "PMDP")
	{
		session_start(); // memulai fungsi session
		$_SESSION['username'] = $username;
		$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['kelulusan'] = 'tahap2';
		if($row['cetak2'] == ""){
		    mysqli_query($kon,"update tb_formulir3 set cetak2='$date' WHERE username = '$username'");
		}else{ }


			header("location:pmdp/index.php");
		
	}
	
	else
		{
			echo "<meta http-equiv='refresh' content='2;url=index.php' />Username atau password salah coba ulangi lagi";
		}	
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
if($row && $row['level'] == "Prestasi")
	{
		session_start(); // memulai fungsi session
		$_SESSION['username'] = $username;
		$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['kelulusan'] = '';
		$_SESSION['prodi'] = $row['pilihan_prodi'];

		if($row['status'] == 'Terdaftar'){
		mysqli_query($kon,"update tb_formulir3 set tanggal_login = now(), status = 'Sudah Membayar' where username = '$username'");
		}else {
		mysqli_query($kon,"update tb_formulir3 set tanggal_login = now() where username = '$username'");
		}

		header("location:pmdp/index.php");
		
	}
	
	else
		{
			echo "<meta http-equiv='refresh' content='2;url=index.php' />Username atau password salah coba ulangi lagi";
		}	
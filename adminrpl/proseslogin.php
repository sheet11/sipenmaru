<?php
// memanggil file koneksi.php
include "config/koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$password = md5($_POST['password']); // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
// md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

// proses untuk login

// menyesuaikan dengan data di database
$perintah = "select * from tb_user WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($kon,$perintah);
$row = mysqli_fetch_array($hasil);
	if($row && $row['level'] == "administrator")
		{
			session_start(); // memulai fungsi session
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
			$_SESSION['level'] = $row['level'];

			header("location:administrator/index.php"); // jika berhasil login, maka masuk ke file index.php
		}
	elseif($row && $row['level'] == "backoffice")
		{
			session_start(); // memulai fungsi session
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
			$_SESSION['level'] = $row['level'];

			header("location:backoffice/index.php"); // jika berhasil login, maka masuk ke file index.php
		}
	elseif($row && $row['level'] == "frontoffice")
		{
			session_start(); // memulai fungsi session
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
			$_SESSION['level'] = $row['level'];

			header("location:frontoffice/index.php"); // jika berhasil login, maka masuk ke file index.php
		}
	elseif($row && $row['level'] == "kepala")
		{
			session_start(); // memulai fungsi session
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
			$_SESSION['level'] = $row['level'];

			header("location:kepala/index.php"); // jika berhasil login, maka masuk ke file index.php
		}
        elseif($row && $row['level'] == "adminrpl")
        {
            session_start(); // memulai fungsi session
            $_SESSION['username'] = $username;
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
            $_SESSION['level'] = $row['level'];

            header("location:adminrpl/index.php"); // jika berhasil login, maka masuk ke file index.php
        }
		
	else
		{
			echo "Gagal Login..Coba ulangi Lagi";
		}	
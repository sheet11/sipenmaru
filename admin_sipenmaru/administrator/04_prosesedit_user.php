<?php 
	error_reporting(0);
	include "session.php"; 
?>
<?php
		require_once("../config/koneksi.php");
		$query=mysqli_query($kon,"update tb_user set username = '$_POST[username]',
												password = '$_POST[password]',
												nama_lengkap = '$_POST[nama_lengkap]'
												where username= '$_POST[username]'");																		
		
		if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='04_daftar_user.php'</script>";
		} else {
			echo "<script>alert('Data Gagal di Update');window.location='04_daftar_user.php'</script>";
		}
?>	

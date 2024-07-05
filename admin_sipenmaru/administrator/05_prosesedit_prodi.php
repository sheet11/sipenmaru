<?php 
	error_reporting(0); 
	include "session.php"; 
?>
<?php
		require_once("../config/koneksi.php");		
		$query=mysqli_query($kon,"update tb_prodi set id_prodi = '$_POST[id_prodi]',
												nama_prodi = '$_POST[nama_prodi]'
												where id_prodi= '$_POST[id_prodi]'");
																													
		if($query) { 
				echo "<script>alert('Data Berhasil di Update');window.location='05_daftar_prodi.php'</script>";
		} else {
				echo "<script>alert('Data Gagal di Update');window.location='05_daftar_prodi.php'</script>";
		}
?>	

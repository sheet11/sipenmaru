<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_agama set id_agama = '$_POST[id_agama]',
														nama_agama = '$_POST[nama_agama]'
												  where id_agama= '$_POST[id_agama]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='03_daftar_agama.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='03_daftar_agama.php'</script>";
	}
?>	

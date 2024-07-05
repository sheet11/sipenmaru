<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_jenis_kelamin set id_jenis_kelamin = '$_POST[id_jenis_kelamin]',
														nama_jenis_kelamin = '$_POST[nama_jenis_kelamin]'
												  where id_jenis_kelamin= '$_POST[id_jenis_kelamin]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='12_daftar_jenis_kelamin.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='12_daftar_jenis_kelamin.php'</script>";
	}
?>	

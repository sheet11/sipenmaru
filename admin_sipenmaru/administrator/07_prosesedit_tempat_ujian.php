<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_tempat_ujian set id_tempat_ujian = '$_POST[id_tempat_ujian]',
														nama_tempat_ujian = '$_POST[nama_tempat_ujian]'
												  where id_tempat_ujian= '$_POST[id_tempat_ujian]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='07_daftar_tempat_ujian.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='07_daftar_tempat_ujian.php'</script>";
	}
?>	

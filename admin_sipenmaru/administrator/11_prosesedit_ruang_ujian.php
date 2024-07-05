<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_ruang_ujian set id_ruang_ujian = '$_POST[id_ruang_ujian]',
														nama_ruang_ujian = '$_POST[nama_ruang_ujian]'
												  where id_ruang_ujian= '$_POST[id_ruang_ujian]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='11_daftar_ruang_ujian.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='11_daftar_ruang_ujian.php'</script>";
	}
?>	

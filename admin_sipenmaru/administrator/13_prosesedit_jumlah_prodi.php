<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_jumlah_prodi set id_jumlah_prodi = '$_POST[id_jumlah_prodi]',
														jumlah_prodi = '$_POST[jumlah_prodi]'
												  where id_jumlah_prodi= '$_POST[id_jumlah_prodi]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='13_daftar_jumlah_prodi.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='13_daftar_jumlah_prodi.php'</script>";
	}
?>	

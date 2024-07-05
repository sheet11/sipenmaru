<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update status set id_status = '$_POST[id_status]',
														nama_status = '$_POST[nama_status]'
												  where id_status= '$_POST[id_status]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='06_daftar_status.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='06_daftar_status.php'</script>";
	}
?>	

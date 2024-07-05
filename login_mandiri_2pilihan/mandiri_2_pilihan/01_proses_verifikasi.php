<?php 
	error_reporting(0); 
    include "session.php"; 
?>

<?php
		require_once("../config/koneksi.php");
		
		$query=mysqli_query($kon,"update tb_formulir3 set status = 'Sudah di Verifikasi' where id_formulir = '$_GET[id_formulir]'");
														
	if($query) 
		{ 
			echo "<script>alert('Data Berhasil di Verifikasi');window.location='01_formulir.php'</script>";
		} 
		
	else 
		{
		echo "<script>alert('Data Gagal di Verifikasi');window.location='01_formulir.php'</script>";
		}
?>
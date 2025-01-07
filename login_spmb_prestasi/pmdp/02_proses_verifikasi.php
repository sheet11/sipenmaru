<?php 
	error_reporting(0); 
    include "session.php"; 
?>

<?php
		require_once("../config/koneksi.php");
		$query=mysqli_query($kon,"update tb_nilai set status = 'Sudah di Verifikasi' where id_nilai = '$_GET[id_nilai]'");											
		if($query) 
			{ 
				echo "<script>alert('Data Berhasil di Verifikasi');window.location='02_lihat_nilai.php'</script>";
			} 
			
		else 
			{
			echo "<script>alert('Data Gagal di Verifikasi');window.location='02_lihat_nilai.php'</script>";
			}
?>
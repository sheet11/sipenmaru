<?php
	include "../config/koneksi.php";	
	mysql_queryi($kon,"delete from tb_nilai where id_nilai ='$_GET[id_nilai]'");
	echo"<script>alert('Data berhasil di hapus');window.location='02_lihat_nilai.php'</script>";
?>

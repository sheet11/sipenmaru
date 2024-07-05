<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_tempat_ujian where id_tempat_ujian ='$_GET[id_tempat_ujian]'");
	echo"<script>alert('Data berhasil di hapus');window.location='07_daftar_tempat_ujian.php'</script>";
?>

<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_ruang_ujian where id_ruang_ujian ='$_GET[id_ruang_ujian]'");
	echo"<script>alert('Data berhasil di hapus');window.location='11_daftar_ruang_ujian.php'</script>";
?>

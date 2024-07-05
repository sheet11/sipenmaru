<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_jenis_kelamin where id_jenis_kelamin ='$_GET[id_jenis_kelamin]'");
	echo"<script>alert('Data berhasil di hapus');window.location='12_daftar_jenis_kelamin.php'</script>";
?>

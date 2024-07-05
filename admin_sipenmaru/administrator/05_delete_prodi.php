<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_prodi where id_prodi ='$_GET[id_prodi]'");
	echo"<script>alert('Data berhasil di hapus');window.location='05_daftar_prodi.php'</script>";
?>

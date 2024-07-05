<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_agama where id_agama ='$_GET[id_agama]'");
	echo"<script>alert('Data berhasil di hapus');window.location='03_daftar_agama.php'</script>";
?>

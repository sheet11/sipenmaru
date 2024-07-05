<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_jumlah_prodi where id_jumlah_prodi ='$_GET[id_jumlah_prodi]'");
	echo"<script>alert('Data berhasil di hapus');window.location='13_daftar_jumlah_prodi.php'</script>";
?>

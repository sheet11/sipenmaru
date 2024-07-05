<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from status where id_status ='$_GET[id_status]'");
	echo"<script>alert('Data berhasil di hapus');window.location='06_daftar_status.php'</script>";
?>

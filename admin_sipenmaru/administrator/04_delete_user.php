<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_user where username ='$_GET[username]'");
	echo"<script>alert('Data berhasil di hapus');window.location='04_daftar_user.php'</script>";
?>

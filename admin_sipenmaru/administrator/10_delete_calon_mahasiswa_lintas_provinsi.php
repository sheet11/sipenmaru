<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_pendaftaran_4 where user_id ='$_GET[user_id]'");
	echo"<script>alert('Data berhasil di hapus');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php'</script>";
?>

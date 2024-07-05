<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_pendaftaran_2 where user_id ='$_GET[user_id]'");
	echo"<script>alert('Data berhasil di hapus');window.location='08_daftar_calon_mahasiswa.php'</script>";
?>

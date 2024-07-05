<?php
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_nilai1 where id_nilai ='$_GET[id_nilai]'");
	echo"<script>alert('Data berhasil di hapus');window.location='02_lihat_nilai.php'</script>";
?>

<?php
if($_GET['halaman'] == 0)
{
	include "../config/koneksi.php";	
	mysqli_query($kon,"update tb_formulir3 set status = 'Belum Lengkap' where username ='$_GET[username]'");
	echo"<script>alert('Data berhasil dikembalikan');window.location='09_daftar_calon_mahasiswa_pmdp.php?username=$_GET[username]'</script>";
}
else
{
	include "../config/koneksi.php";	
	mysqli_query($kon,"update tb_formulir3 set status = 'Belum Lengkap' where username ='$_GET[username]'");
	echo"<script>alert('Data berhasil di kembalikan');window.location='09_daftar_calon_mahasiswa_pmdp.php?halaman=$_GET[halaman]'</script>";
}
?>

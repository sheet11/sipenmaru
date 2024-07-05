<?php
if($_GET['halaman'] == 0)
{
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_formulir3 where username ='$_GET[username]'");
	echo"<script>alert('Data berhasil di hapus');window.location='09_daftar_calon_mahasiswa_pmdp.php?username=$_GET[username]'</script>";
}
else
{
	include "../config/koneksi.php";	
	mysqli_query($kon,"delete from tb_formulir3 where username ='$_GET[username]'");
	echo"<script>alert('Data berhasil di hapus');window.location='09_daftar_calon_mahasiswa_pmdp.php?halaman=$_GET[halaman]'</script>";
}
?>

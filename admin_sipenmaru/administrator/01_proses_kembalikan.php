<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='01_daftar_calon_mahasiswa.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='01_daftar_calon_mahasiswa.php?halaman=$_GET[halaman]'</script>";
		}
?>

<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir5 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='03_daftar_calon_mahasiswa_lintasprovinsi2pilihan.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir5 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='03_daftar_calon_mahasiswa_lintasprovinsi2pilihan.php?halaman=$_GET[halaman]'</script>";
		}
?>

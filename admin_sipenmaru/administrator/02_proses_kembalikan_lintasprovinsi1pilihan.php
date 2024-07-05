<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir4 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='02_daftar_calon_mahasiswa_lintasprovinsi1pilihan.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir4 set status = 'Belum Lengkap' where username ='$_GET[username]'");
			echo"<script>window.location='02_daftar_calon_mahasiswa_lintasprovinsi1pilihan.php?halaman=$_GET[halaman]'</script>";
		}
?>

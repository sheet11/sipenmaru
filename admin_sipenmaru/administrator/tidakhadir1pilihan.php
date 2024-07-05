<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set ikut_tes_tertulis = 'Tidak Hadir' where username ='$_GET[username]'");
			echo"<script>window.location='kehadiran.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set ikut_tes_tertulis = 'Tidak Hadir where username ='$_GET[username]'");
			echo"<script>window.location='kehadiran.php?halaman=$_GET[halaman]'</script>";
		}
?>

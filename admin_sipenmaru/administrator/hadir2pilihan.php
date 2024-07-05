<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir2 set ikut_tes_tertulis = 'Hadir' where username ='$_GET[username]'");
			echo"<script>window.location='kehadiran2pilihan.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir2 set ikut_tes_tertulis = 'Hadir where username ='$_GET[username]'");
			echo"<script>window.location='kehadiran2pilihan.php?halaman=$_GET[halaman]'</script>";
		}
?>

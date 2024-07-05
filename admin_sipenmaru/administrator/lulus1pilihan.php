<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set lulus_tes_tertulis = 'Lulus' where username ='$_GET[username]'");
			echo"<script>window.location='kelulusan.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir1 set lulus_tes_tertulis = 'Lulus' where username ='$_GET[username]'");
			echo"<script>window.location='kelulusan.php?halaman=$_GET[halaman]'</script>";
		}
?>

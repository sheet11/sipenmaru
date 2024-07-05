<?php
	if($_GET['halaman'] == 0)
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir3 set lulus_tes_tertulis = 'Tidak Lulus' where username ='$_GET[username]'");
			echo"<script>window.location='kelulusan_PMDP.php?username=$_GET[username]'</script>";
		}
	else
		{
			include "../config/koneksi.php";	
			mysqli_query($kon,"update tb_formulir3 set lulus_tes_tertulis = 'Tidak Lulus where username ='$_GET[username]'");
			echo"<script>window.location='kelulusan_PMDP.php?halaman=$_GET[halaman]'</script>";
		}
?>

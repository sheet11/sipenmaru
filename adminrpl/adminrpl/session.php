
<?php
	session_start();
	include"../config/koneksi.php";
	include"../config/class_paging.php";
	
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

?>

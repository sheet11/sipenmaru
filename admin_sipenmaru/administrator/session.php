
<?php
	session_start();
	include"../config/koneksi.php";
	include"../config/class_paging.php";
	
	if (!isset($_SESSION['level'])){
		header('location:../index.php');
	}
	elseif ($_SESSION['level'] != "administrator"){
		header('location:../index.php');
	}
?>

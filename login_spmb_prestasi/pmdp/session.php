<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	//redirect ke halaman login
	echo "<script>alert('sesi habis, silahkan login kembali');window.location='../index.php'</script>";
}
?>
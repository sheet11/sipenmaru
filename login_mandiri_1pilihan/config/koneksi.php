<?php
$kon=mysqli_connect("localhost","u128202965_sipenmaru","Bengkulu2024$","u128202965_sipenmaru");
echo mysqli_error($kon);
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>

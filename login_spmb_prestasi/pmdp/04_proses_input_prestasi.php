<?php 
include "session.php";
include"../config/koneksi.php";

$user 	=$_SESSION['username'];
$nama 	=addslashes($_POST['nama']);
$ket 	=addslashes($_POST['ket']);
$tingkat=addslashes($_POST['tingkat']);
$bukti_n=$_FILES['bukti']['name'];
$bukti_t=$_FILES['bukti']['tmp_name'];
$tgl 	=addslashes($_POST['tgl']);
$unama = $_SESSION['username'];

$simpan=mysqli_query($kon,"insert into tb_prestasi (username,nama,ket,tingkat,bukti_n,tgl) values ('$user','$nama','$ket','$tingkat','$unama-$bukti_n','$tgl')");
if($simpan)
{
	move_uploaded_file($bukti_t,"prestasi/$unama-".$bukti_n);
	echo "<script>alert('Prestasi berhasil disimpan');window.location='04_upload_prestasi.php'</script>";
}
else
{
	echo "<script>alert('Prestasi gagal disimpan ');history.back()</script>";	
	
}
?>
<?php 
include "../config/koneksi.php";

$id=$_GET['id'];
mysqli_query($kon,"delete from tb_prestasi where id='$id'");

?>
<script type="text/javascript">
	alert('Data prestasi anda berhasil dihapus');
	window.location='04_upload_prestasi.php';
</script>
<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
  include('bar128.php');

	
	$query=mysqli_query($kon,"select * from tb_pendaftaran_1 where user_id='$_GET[user_id]'");
	$data=mysqli_fetch_array($query);

?>
<html>
<head>

</head>
	<body>

  <table align="center"  border="1" width="80%">
  <tr>
      <td colspan="3" align="center"><b>KARTU UJIAN</b></td>
  <tr>
      <td><b>ID PENDAFTARAN</b></td><td><b>:</b></td><td><b><?php echo "$data[user_id]"; ?></b></td>
  </tr>
  <tr>
      <td><b>NAMA LENGKAP</td><td><b>:</b></td><td style='text-transform:uppercase;'><b><?php echo "$data[namalengkap]"; ?></b></td>
  </tr>

</body>
</html>

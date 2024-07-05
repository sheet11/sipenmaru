<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
  include('bar128.php');

	
	$query=mysqli_query($kon,"select * from tb_pendaftaran_3 where user_id='$_GET[user_id]'");
	$data=mysqli_fetch_array($query);

?>
<html>
<head>
    <script src="js/jquery-1.11.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
	<body>

  <table class="table table-bordered">
  <tr>
      <td colspan="3" align="center"><b><h3>KARTU UJIAN</h3></b></td>
  <tr>
      <td width="40%" align="top"><b><h3> ID PENDAFTARAN</h3></b></td><td><b>:</b></td><td align="top"><b><h3><?php echo "$data[user_id]"; ?></h3></b></td>
  </tr>
  <tr>
      <td><b><h3>NAMA LENGKAP</h3></td><td><b>:</b></td><td style='text-transform:uppercase;'><b><h3><?php echo "$data[namalengkap]"; ?></h3></b></td>
  </tr>

</body>
</html>
<script>
  window.print();
  </script>
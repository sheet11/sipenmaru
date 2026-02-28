<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/stylelogin.css">
  <script src="js/prefixfree.min.js"></script>

</head>

<body><!--/  Form Login -->
  <?php
  error_reporting(0);
  include "config/koneksi.php";
  $sql = mysqli_query($kon, "select * from periode where nama_periode='Login Prestasi' and status='Buka'");
  $a = mysqli_fetch_array($sql);
  if ($a['status'] == "Buka") { ?>
    <div class="login">
      <h1>SPMB Online </h1>
      <form class="form" action="proseslogin.php" method="post" enctype="multipart/form-data">
        <p class="field">
          <input type="text" name="username" placeholder="ID " required />
          <i class="fa fa-user"></i>
        </p>

        <p class="field">
          <input type="password" name="password" placeholder="Password / Pin" required />
          <i class="fa fa-lock"></i>
        </p>
        <p class="submit"><input type="submit" name="sent" value="Login"></p>
      </form>
    </div> <!--/ Login-->

    <div class="copyright">
      <p>Seleksi Pendaftaran Mahasiswa Baru Jalur Prestasi </a></p>
      <p>Copyright &copy; Poltekkes Kemenkes Bengkulu </a></p>
    </div>
  <?php } else {
    echo "<script>alert('Maaf, Login Jalur Prestasi Sedang Ditutup');window.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
  }
  ?>


</body>

</html>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <script src="js/prefixfree.min.js"></script>
  </head>
<?php
$date = date("Y-m-d"); 
$date=date('Y-m-d', strtotime($date));
//echo $paymentDate; // echos today! 
$tanggalbuka = date('Y-m-d', strtotime("2024-05-31"));
$tanggaltutup = date('Y-m-d', strtotime("2024-07-23"));
if(($date >= $tanggalbuka) && ($date <= $tanggaltutup)) { ?>
  <body><!--/  Form Login -->
        <div class="login">
          <h1>Sipenmaru Online </h1>
              <form class="form" action="proseslogin(1).php" method="post" enctype="multipart/form-data">
                  <p class="field">
                    <input type="text" name="username" placeholder="ID " required/>
                    <i class="fa fa-user"></i>
                  </p>

                  <p class="field">
                    <input type="password" name="password" placeholder="Password / Pin" required/>
                    <i class="fa fa-lock"></i>
                  </p>
                <p class="submit"><input type="submit" name="sent" value="Login"></p>
              </form>
        </div> <!--/ Login-->
<div class="copyright">
    <p>Sistem Informasi Pendaftaran Mahasiswa Baru Jalur Mandiri Alih Jenjang dan Profesi </a></p>
    <p>Copyright &copy; 2024.Poltekkes Kemenkes Bengkulu </a></p>
</div>
      
  </body>
<?php }else{ ?>
    <h1>Maaf pendaftaran sudah di tutup, silahkan mendaftar di periode selanjutnya</h1>
<?php } ?>
</html>

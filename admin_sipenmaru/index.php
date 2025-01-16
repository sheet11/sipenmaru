<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Poltekkes Kemenkes Bengkulu</title>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <script src="js/prefixfree.min.js"></script>
  </head>

  <body><!--/  Form Login -->
        <div class="login">
          <h1>SPMB Online </h1>
              <form class="form" action="proseslogin.php" method="post" enctype="multipart/form-data">
                  <p class="field">
                    <input type="text" name="username" placeholder="Username" required/>
                    <i class="fa fa-user"></i>
                  </p>

                  <p class="field">
                    <input type="password" name="password" placeholder="Password" required/>
                    <i class="fa fa-lock"></i>
                  </p>
                <p class="submit"><input type="submit" name="sent" value="Login"></p>
              </form>
        </div> <!--/ Login-->

<div class="copyright">
    <p>Halaman Administrator </a></p>
    <p>Copyright &copy;.Poltekkes Kemenkes Bengkulu </a></p>
</div>
      
  </body>
</html>

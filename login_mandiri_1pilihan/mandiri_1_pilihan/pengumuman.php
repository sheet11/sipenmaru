<?php
	include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <script src="../assets/js/jquery-1.11.0.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sipenmaru</a> 
            </div>

            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Poltekkes Kemenkes Bengkulu <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li class="text-center">
                                <img src="../assets/img_kop/logo.png" class="user-image img-responsive"/>
                            </li>              
                            
                            <li>
                                <a class="active-menu"  href="#"><i class="fa fa-dashboard fa-2x"></i> Beranda</a>
                            </li>                        
                            
                            <li>
                                <a  href="#"><i class="fa fa-desktop fa-2x"></i> Formulir </a>
                            </li>
                            <li>
                                <a  href="#"><i class="fa fa-desktop fa-2x"></i> Upload Berkas </a>
                            </li>
                            <li>
                                <a  href="#"><i class="fa fa-desktop fa-2x"></i> Surat Pernyataan </a>
                            </li>
                           <?php
                            include "../config/koneksi.php";
                            $query = mysqli_query($kon,"Select 'username' from tb_rpl where username='$_SESSION[username]'");
                            $cek= mysqli_fetch_array($query);
                            if($cek){ ?>
                                <li>
                                    <a  href="#"><i class="fa fa-desktop fa-2x"></i> Form Asesmen </a>
                                </li>   
                                <?php }else{ ?>
                                <?php 
                                if($_SESSION['prodi'] == "Sarjana Terapan Kebidanan Alih Jenjang"){ ?>
                                <li>
                                    <a  href="#"><i class="fa fa-desktop fa-2x"></i> From Asesmen </a>
                                </li>
                              <?php }elseif($_SESSION['prodi'] == "Sarjana Terapan Keperawatan Alih Jenjang") { ?>  
                                <li>
                                    <a  href="#"><i class="fa fa-desktop fa-2x"></i> From Asesmen </a>
                                </li>
                                    <?php } ?>
                            <?php }?>

                           
                        </ul>                          
                    </div>
        </nav>  
  
           
        <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
</body>
</head></html>

<body>
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Poltekkes Kemenkes Bengkulu</h2>   
                        <h5>Selamat Datang <b><?php echo $_SESSION['nama_lengkap'];?> </b> Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online Jalur <b><?php echo $_SESSION['level'];?></b></h5>
                        <br>
                        <h3>Selamat Kepada <b><?php echo $_SESSION['nama_lengkap'];?> </b> telah <b>LULUS<b> </h3><br>
                        <h5>Silahkan Mencetak Bukti kelulusan -> <a href="cetak_pengumuman.php">disini</a></h3>
                        <h5>dan Mengunduh Syarat selanjutnya -> <a href="../berkas/pengumuman.pdf">disini</a> </h5>
                       <!--   <?php
                            include "../config/koneksi.php";
                                $query = mysqli_query($kon,"Select * from tb_rpl");
                                $cek= mysqli_fetch_array($query);
                                if($cek['username'] == $_SESSION['username']){
                            ?>
                                <h3>sudah mengisi tabel asesmen</h3>
                            <?php }else{ ?>
                                <h3 class="text-danger">*<?php echo $_SESSION['nama_lengkap']?> belum mengisi form asesmen, dimohon untuk mengisi form asesmen </h3>
                            <?php }?> -->
                    </div>
                </div> 
                             
        
             </div>
             </div>
            </div>   
           </body>
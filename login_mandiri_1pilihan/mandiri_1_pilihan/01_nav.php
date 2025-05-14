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
                <a class="navbar-brand" href="index.html">SPMB</a> 
            </div>

            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Poltekkes Kemenkes Bengkulu <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li class="text-center">
                                <img src="../assets/img_kop/ptk-bkl.png" class="user-image img-responsive"/>
                            </li>              
                            
                            <li>
                                <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Beranda</a>
                            </li>                        
                            
                            <li>
                                <a  href="01_formulir.php"><i class="fa fa-desktop fa-2x"></i> Formulir </a>
                            </li>

                            <li>
                                <a href="03_upload_berkas.php"><i class="fa fa-upload fa-2x"></i> Upload Berkas </a>
                            </li>
                            <li>
                                <a  href="05_download.php"><i class="fa fa-file-text fa-2x"></i> Pernyataan </a>
                            </li>
                           <?php
                            include "../config/koneksi.php";
                            $query = mysqli_query($kon,"Select 'username' from tb_rpl where username='$_SESSION[username]'");
                            $cek= mysqli_fetch_array($query);
                            if($cek){ ?>
                                <li>
                                    <a  href="02_lihat_nilai.php"><i class="fa fa-desktop fa-2x"></i> Form Asesmen </a>
                                </li>   
                                <?php }else{ ?>
                                <?php 
                                if($_SESSION['prodi'] == "a"){ ?>
                                <li>
                                    <a  href="02_lihat_nilai.php"><i class="fa fa-desktop fa-2x"></i> From Asesmen </a>
                                </li>
                              <?php }elseif($_SESSION['prodi'] == "RPL Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Bengkulu)") { ?>  
                                <li>
                                    <a  href="02_lihat_nilai2.php"><i class="fa fa-desktop fa-2x"></i> From Asesmen </a>
                                </li>
                                    <?php } ?>
                            <?php }?>

                            <!-- form asesmen dan evaluasi -->
                                <?php 
                                if ($_SESSION['prodi'] == "RPL profesi bidan (khusus TPMB)" || $_SESSION['prodi'] == "RPL Sarjana Terapan Kebidanan (Khusus TPMB)" || $_SESSION['prodi'] == "RPL Sarjana Terapan Kebidanan (kelas bengkulu)") { ?>
                                    <li>
                                        <a href="07_asesmen.php"><i class="fa fa-check-square fa-2x"></i> Asesmen</a>
                                    </li>
                                    <li>
                                        <a href="08_pendaftaran.php"><i class="fa fa-edit fa-2x"></i> Form Evaluasi</a>
                                    </li>
                                <?php } ?>
                                
                                <?php 
                                if ($_SESSION['prodi'] == "RPL Gizi dan Dietetik Sarjana Terapan") { ?>
                                    <li>
                                        <a href="07_asesmen.php"><i class="fa fa-check-square fa-2x"></i> Asesmen</a>
                                    </li>
                                    <li>
                                        <a href="11_pendaftaran_gizi.php"><i class="fa fa-edit fa-2x"></i> Form pendaftaran</a>
                                    </li>
                                <?php } ?>
                                
                            <!-- form rekomendasi -->
                                <?php if ($_SESSION['prodi'] == "RPL Sarjana Terapan Kebidanan (Khusus TPMB)" || $_SESSION['prodi'] == "RPL profesi bidan (khusus TPMB)") { ?>
                                    <li>
                                        <a href="09_rekomendasi.php"><i class="fa fa-thumbs-up fa-2x"></i> Rekomendasi</a>
                                    </li>
                                <?php } ?>

                            <!-- upload rekap -->
                             <?php if ( $_SESSION['prodi'] == "RPL profesi bidan (khusus TPMB)") { ?>
                             <li>
                                <a  href="10_rekap_pelayanan.php"><i class="fa fa-table fa-2x"></i> Rekap Pelayanan</a>
                            </li>
                            <?php } ?>
                                <!-- cetak kartu -->
                            <?php if ($_SESSION['prodi'] == "RPL Sarjana Terapan Kebidanan (Khusus TPMB)") { ?>
                            <li>
                                <a  href="06_status.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php }elseif($_SESSION['prodi'] == "RPL Sarjana Terapan Kebidanan (kelas bengkulu)"){ ?>                      

                            <li>
                                <a  href="06_status_rpl.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php }elseif($_SESSION['prodi'] == "RPL sarjana terapan keperawatan dan Pendidikan profesi ners (kelas Bengkulu)"){ ?>
                            <li>
                                <a  href="06_status_reguler.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php }elseif($_SESSION['prodi'] == "RPL profesi bidan (khusus TPMB)"){ ?>
                            <li>
                                <a  href="06_status_bidan.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php }elseif($_SESSION['prodi'] == "RPL Gizi dan Dietetik Sarjana Terapan"){ ?>
                            <li>
                                <a  href="06_status_gizi.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php }else{?>
                            <li>
                                <a  href="06_status_profesi.php"><i class="fa fa-qrcode fa-2x"></i> Cetak Kartu</a>
                            </li>
                            <?php } ?>

                            
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
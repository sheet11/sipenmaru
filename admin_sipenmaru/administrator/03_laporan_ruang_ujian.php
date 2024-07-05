<?php
include"01_nav.php";

?>

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">



                    <h1>
                         <small>Auditorium</small>
                    </h1>
                    <div class="row">


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 1 D4 Kebidanan Alih Jenjang Curup</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10016_auditorium_blok1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10016_auditorium_blok1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 2 D4 Kebidanan Alih Jenjang Curup</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10017_auditorium_blok1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10017_auditorium_blok1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->







                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 1</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="100.auditorium_blok1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="100.auditorium_blok1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="102.auditorium_blok2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="102.auditorium_blok2_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="103.auditorium_blok3_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="103.auditorium_blok3_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="104.auditorium_blok4_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="104.auditorium_blok4_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 5' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 5</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="105.auditorium_blok5_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="105.auditorium_blok5_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 6' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 6</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="106.auditorium_blok6_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="106.auditorium_blok6_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 7' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 7</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="107.auditorium_blok7_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="107.auditorium_blok7_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="108.auditorium_blok8_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="108.auditorium_blok8_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 9' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 9</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="109.auditorium_blok9_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="109.auditorium_blok9_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Auditorium Blok 10' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 10</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="110.auditorium_blok10_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="110.auditorium_blok10_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

            

                        <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where ruang_ujian='Laboratorium Multimedia' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Lintas Provinsi 1 Pilihan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="114.multimedia_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="114.multimedia_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where ruang_ujian='Laboratorium Multimedia' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Lintas Provinsi 2 Pilihan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="115.multimedia_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="115.multimedia_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    </div>

                      <hr>
                    <section class="content">
                        <h1>
                         <small>Gedung Bersama </small>
                    </h1>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 1</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="201.gb1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="201.gb1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="202.gb2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="202.gb2_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="203.gb3_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="203.gb3_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="204.gb4_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="204.gb4_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 5' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 5</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="205.gb5_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="205.gb5_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 6' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 6</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="206.gb6_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="206.gb6_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 7' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 7</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="207.gb7_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="207.gb7_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="208.gb8_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="208.gb8_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Gedung Bersama 9' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 9</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="209.gb9_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="209.gb9_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Gedung Bersama 10' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 10</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="210.gb10_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="210.gb10_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Gedung Bersama 11' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 11</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="211.gb11_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="211.gb11_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Gedung Bersama 12' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 12</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="212.gb12_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="212.gb12_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Gedung Bersama 13' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 13</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="213.gb13_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="213.gb13_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div>

                    <hr></hr>
                        <h1>
                            <small>Perawat </small>
                        </h1>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                           <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Perawat 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Perawat 1</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                 <a href="113.perawat1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="113.perawat1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                           <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Perawat 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Perawat 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="113.perawat2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="113.perawat2_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                           <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Perawat 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Perawat 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="113.perawat3_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="113.perawat3_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                           <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Perawat 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Perawat 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="113.perawat4_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="113.perawat4_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        
                    </div>

                    <hr>

                        <h1>
                         <small>Curup </small>
                    </h1>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 1</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                 <a href="301.curup1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="301.curup1_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="302.curup2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="302.curup2_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="303.curup3_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="303.curup3_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="304.curup4_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="304.curup4_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->


                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 5' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 5</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="305.curup5_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="305.curup5_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Curup 6' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup  6</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="306.curup6_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="306.curup6_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Curup 7' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 7</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="307.curup7_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="307.curup7_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where ruang_ujian='Curup 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                               <a href="308.curup8_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="308.curup8_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 9' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 9</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where ruang_ujian='Curup 10' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Curup 10</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>




                        


                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
           
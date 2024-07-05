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
                         <small>Gelombang 2 Auditorium </small>
                    </h1>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 1</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10001.auditorium_blok1_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10001.auditorium_blok1_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10002.auditorium_blok2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10002.auditorium_blok2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10003.auditorium_blok3_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10003.auditorium_blok3_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10004.auditorium_blok4_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10004.auditorium_blok4_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 5' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 5</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10005.auditorium_blok5_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10005.auditorium_blok5_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 6' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 6</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10006.auditorium_blok6_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10006.auditorium_blok6_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Auditorium Blok 7' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 7</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10007.auditorium_blok7_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10007.auditorium_blok7_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Auditorium Blok 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="10008.auditorium_blok8_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10008.auditorium_blok8_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Auditorium Blok 9' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 9</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="10009.auditorium_blok9_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10009.auditorium_blok9_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Auditorium Blok 10' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Auditorium Blok 10</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                 <a href="10010.auditorium_blok10_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="10010.auditorium_blok10_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div>
                </section>
                        
                    
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 1' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 1 </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="201.gb1_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="201.gb1_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 2' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 2</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="202.gb2_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="202.gb2_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Gedung Bersama 3' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 3</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="203.gb3_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="203.gb3_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 4' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 4</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="204.gb4_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="204.gb4_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Gedung Bersama 5' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 5</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="205.gb5_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="205.gb5_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 6' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 6</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="206.gb6_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="206.gb6_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 7' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 7</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="207.gb7_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="207.gb7_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Gedung Bersama 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="208.gb8_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="208.gb8_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir7 where ruang_ujian='Gedung Bersama 8' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 8</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="208.gb81_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="208.gb81_gel2_absen.php" class="small-box-footer">
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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir6 where ruang_ujian='Gedung Bersama 9' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>Gedung Bersama 9</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="209.gb9_gel2_nomor.php" class="small-box-footer">
                                    Cetak Nomor <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="209.gb9_gel2_absen.php" class="small-box-footer">
                                    Cetak Absen <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->



                    </div>
                </section>
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
           
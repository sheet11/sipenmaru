<?php
	$page = "Home";
?>
<?php
include "01_nav.php";
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
                    
                    <?php
                    require_once("../config/koneksi.php");

                    // SPMB Prestasi
                    $pmdp_total = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir3 WHERE status='Terdaftar' or status='Sudah Membayar'"));
                    $pmdp_bayar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir3 WHERE status='Sudah Membayar'"));
                    $pmdp_daftar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir3 WHERE status='Terdaftar'"));
                    $uang_pmdp = $pmdp_bayar * 50000;

                    // SIMAMI 1 Pilihan
                    $simami1_total = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir5 WHERE (status='Terdaftar' or status='Sudah Membayar') AND tahun_pendaftaran='2026'"));
                    $simami1_bayar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir5 WHERE status='Sudah Membayar' AND tahun_pendaftaran='2026'"));
                    $simami1_daftar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir5 WHERE status='Terdaftar' AND tahun_pendaftaran='2026'"));
                    $uang_simami1 = $simami1_bayar * 500000;

                    // SIMAMI 2 Pilihan
                    $simami2_all_total = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir4 WHERE (status='Terdaftar' or status='Sudah Membayar') AND tahun_pendaftaran='2026'"));
                    $simami2_all_bayar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir4 WHERE status='Sudah Membayar' AND tahun_pendaftaran='2026'"));
                    $simami2_bayar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir4 WHERE level='MANDIRI 2 PILIHAN' AND status='Sudah Membayar' AND tahun_pendaftaran='2026'"));
                    $simami2_daftar = mysqli_num_rows(mysqli_query($kon, "SELECT id_formulir FROM tb_formulir4 WHERE level='MANDIRI 2 PILIHAN' AND status='Terdaftar' AND tahun_pendaftaran='2026'"));
                    $uang_simami2 = $simami2_all_bayar * 300000;
                    
                    ?>

                    <!-- ROW 1: SPMB Prestasi -->
                    <h4 class="page-header" style="margin-top: 0;">Jalur SPMB Prestasi</h4>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $pmdp_total; ?></h3>
                                    <p>Total</p>
                                </div>
                                <div class="icon"><i class="fa fa-trophy"></i></div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $pmdp_daftar; ?></h3>
                                    <p>Terdaftar (Belum Bayar)</p>
                                </div>
                                <div class="icon"><i class="fa fa-trophy"></i></div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php echo $pmdp_bayar; ?></h3>
                                    <p>Sudah Membayar</p>
                                </div>
                                <div class="icon"><i class="fa fa-trophy"></i></div>
                                <a href="09_daftar_calon_mahasiswa_pmdp.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12">
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px">Rp</sup> <?php echo number_format($uang_pmdp, 0, ',', '.'); ?></h3>
                                    <p>Total Pendapatan (<?php echo $pmdp_bayar; ?> x 50.000)</p>
                                </div>
                                <div class="icon"><i class="fa fa-money"></i></div>
                                <a href="09_daftar_calon_mahasiswa_pmdp.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 2: SIMAMI 1 Pilihan -->
                    <h4 class="page-header">Jalur Mandiri 1 Pilihan</h4>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $simami1_total; ?></h3>
                                    <p>Total</p>
                                </div>
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <a href="082_daftar_calon_mahasiswa_ambil_id.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $simami1_daftar; ?></h3>
                                    <p>Terdaftar (Belum Bayar)</p>
                                </div>
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <a href="082_daftar_calon_mahasiswa_ambil_id.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php echo $simami1_bayar; ?></h3>
                                    <p>Sudah Membayar</p>
                                </div>
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12">
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px">Rp</sup> <?php echo number_format($uang_simami1, 0, ',', '.'); ?></h3>
                                    <p>Total Pendapatan (<?php echo $simami1_bayar; ?> x 500.000)</p>
                                </div>
                                <div class="icon"><i class="fa fa-money"></i></div>
                                <a href="09_daftar_calon_mahasiswa_pmdp.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 3: SIMAMI 2 Pilihan -->
                    <h4 class="page-header">Jalur Mandiri 2 Pilihan</h4>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $simami2_all_total; ?></h3>
                                    <p>Total</p>
                                </div>
                                <div class="icon"><i class="fa fa-users"></i></div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?php echo $simami2_daftar; ?></h3>
                                    <p>Terdaftar (Belum Bayar)</p>
                                </div>
                                <div class="icon"><i class="fa fa-users"></i></div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3><?php echo $simami2_all_bayar; ?></h3>
                                    <p>Sudah Membayar</p>
                                </div>
                                <div class="icon"><i class="fa fa-users"></i></div>
                                <a href="081_daftar_calon_mahasiswa_ambil_id.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12">
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px">Rp</sup> <?php echo number_format($uang_simami2, 0, ',', '.'); ?></h3>
                                    <p>Total Pendapatan (<?php echo $simami2_all_bayar; ?> x 300.000)</p>
                                </div>
                                <div class="icon"><i class="fa fa-money"></i></div>
                                <a href="081_daftar_calon_mahasiswa.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 4: SIMAMA -->
                    <h4 class="page-header">Jalur SIMAMA</h4>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Terdaftar (Belum Bayar)</p>
                                </div>
                                <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                <a href="1_gelombang3_terdaftar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Sudah Membayar</p>
                                </div>
                                <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                <a href="1_gelombang3_sudahbayar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
           

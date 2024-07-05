<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
                <div class="row">
                    <div class="col-md-12">
                    <h2> Halaman Laporan Sipenmaru 2 Pilihan </h2>   
                        <h5>Selamat Datang <?php echo $_SESSION['nama_lengkap'];?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <table class="table table-bordered">
                        <tr>
                            <td> Jumlah Pendaftar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b> Pilihan 1</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kebidanan Bengkulu' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kebidanan Curup' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Analis Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Analis Kesehatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kesehatan Lingkungan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kesehatan Lingkungan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Bengkulu' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Curup' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Farmasi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Farmasi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Keperawatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Kebidanan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Promosi Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Promosi Kesehatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan Alih Jenjang</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Kebidanan Alih Jenjang' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
									


                        <tr>
                            <td colspan="3"><b> Pilihan 2</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Kebidanan Bengkulu' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Kebidanan Curup' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Analis Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Analis Kesehatan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kesehatan Lingkungan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Kesehatan Lingkungan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Keperawatan Bengkulu' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Keperawatan Curup' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Farmasi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D3 Farmasi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D4 Keperawatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D4 Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D4 Kebidanan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Promosi Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D4 Promosi Kesehatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan Alih Jenjang</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi2='D4 Kebidanan Alih Jenjang' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        

                        <tr>
                            <td><b>Jenis Kelamin</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Analis Kesehatan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kesehatan Lingkungan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Bengkulu' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Curup' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Farmasi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Farmasi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Keperawatan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Promosi Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>Perempuan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Analis Kesehatan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kesehatan Lingkungan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Bengkulu' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Keperawatan Curup' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Farmasi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Farmasi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Keperawatan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D3 Kebidanan Curup' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Kebidanan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Promosi Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Promosi Kesehatan' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan Alih Jenjang </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where pilihan_prodi1='D4 Kebidanan Alih Jenjang' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Lokasi Ujian</b></td> <td> </td> <td></td>
                        </tr>

                        <tr>
                            <td> Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where tempat_ujian='Bengkulu' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where tempat_ujian='Curup' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Keterangan Sekolah</b></td> <td> </td> <td></td>
                        </tr>

                        <tr>
                            <td>Dalam Kota Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where keterangan_sekolah='Dalam Kota Bengkulu' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>Luar Kota Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where keterangan_sekolah='Luar Kota Bengkulu' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Asal Sekolah</b></td> <td> </td> <td></td>
                        </tr>

                        <tr>
                            <td>SMA/MA</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where asal_sekolah='SMA/MA' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>SMK/MAK</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where asal_sekolah='SMK/MAK' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>D3</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir2 where asal_sekolah='D3' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td colspan="3"><b>Ruang Ujian</b></td>
                        </tr>
                        <tr>
                            <td>Auditorium Blok 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 6</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 6' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 7</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 7' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 8</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 8' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 9</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 9' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 10</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Blok 10' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Perawat Ruang 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Perawat Ruang 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Perawat Ruang 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Perawat Ruang 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Perawat Ruang 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        
                        <tr>
                            <td>Gedung Bersama 10</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Gedung Bersama 10' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 11</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Gedung Bersama 11' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 12</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Gedung Bersama 12' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 13</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Gedung Bersama 13' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>rektorat Lantai 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Rektorat Lantai 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Lantai 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where ruang_ujian='Auditorium Lantai 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>


                  </table>
           
			</div>   

           
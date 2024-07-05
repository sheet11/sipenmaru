<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                        <h3>Sarjana Terapan Kebidanan Alih Jenjang</h3>
                </div>
            </div>              
                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th><th>Jumlah</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>



                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Kebidanan Bengkulu' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>
                    </table>

                    <div class="col-md-12">  
                            <h3>Pendidikan Profesi Bidan</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan'  and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan'  and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Bidan'  and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>
                    </table>
                    
                    <div class="col-md-12">  
                            <h3>Pendidikan Profesi Ners</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                           <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                           <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>

                    <div class="col-md-12">  
                            <h3>Sarjana Terapan Keperawatan Alih Jenjang</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang'  and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang'  and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                           <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>

                    <div class="col-md-12">  
                            <h3>D3 Teknologi Laboratorium Medis</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>

                   <div class="col-md-12">  
                            <h3>D3 Farmasi</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Farmasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>


                    <div class="col-md-12">  
                            <h3>D3 Sanitasi</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Sanitasi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>


                    <div class="col-md-12">  
                            <h3>D3 Gizi</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='D3 Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>

                    <div class="col-md-12">  
                            <h3>Sarjana Terapan Gizi</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Gizi' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>


                    <div class="col-md-12">  
                            <h3>Sarjana Terapan Promosi Kesehatan</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>

                    <div class="col-md-12">  
                            <h3>Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>


                   <div class="col-md-12">  
                            <h3>Sarjana Terapan Keperawatan dan Ners</h3>
                    </div>

                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Uraian</th><th colspan="3">Peserta TA 2023/2024</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>
                        <tr>
                            <td>1 </td><td>Pendaftar</td>
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td><td>Peserta Lulus Seleksi Administrasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>3 </td><td>Peserta Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>4 </td><td>Peserta yang Lulus Uji Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp_2='LULUS TAHAP 2'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5 </td><td>Peserta yang Mendaftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>6 </td><td>Peserta yang Tidak Daftar Ulang</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>7 </td><td>Peserta yang Mengundurkan Diri</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>8 </td><td>Peserta yang diterima</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status_pmdp='LULUS TAHAP 1'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>
                    </table>





                </div>
            </section>
        </div>   


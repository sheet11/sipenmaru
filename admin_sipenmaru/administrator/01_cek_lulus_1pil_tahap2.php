<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">
                    <h2> Laporan 1 Pilihan Jalur Mandiri</h2>   
                        <h5>Welcome <?php echo $_SESSION['nama_lengkap'];?></h5>
                </div>
            </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <table class="table table-bordered">
                        <tr>
                            <td><b>Jumlah Pendaftar</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status_kelulusan_simami_tahap2='LULUS' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b> Pilihan Prodi</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Prodi Pendidikan Profesi Bidan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Pendidikan Profesi Bidan (PBM dimulai SMT Genap-Januari 2025)' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Pendidikan Profesi Ners</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners (PBM dimulai SMT Ganjil-Juli 2024)' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Keperawatan Alih Jenjang</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Sarjana Terapan Keperawatan Alih Jenjang (PBM dimulai SMT Genap-Januari 2025)' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        
                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu (PBM dimulai SMT Ganjil-Juli 2024)' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup (PBM dimulai SMT Ganjil-Juli 2024)' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        

                        <tr>
                            <td><b>Jenis Kelamin</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where jenis_kelamin='Laki-Laki' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Pendidikan Profesi Bidan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Pendidikan Profesi Bidan (PBM dimulai SMT Genap-Januari 2025)' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Pendidikan Profesi Ners</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Laki-Laki' and status_kelulusan_simami_tahap2='LULUS' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Keperawatan Alih Jenjang Kelas Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Sarjana Terapan Keperawatan Alih Jenjang (PBM dimulai SMT Genap-Januari 2025)' and jenis_kelamin='Laki-Laki' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        
                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Laki-Laki' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Laki-Laki' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        

                        <tr>
                            <td>Perempuan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Pendidikan Profesi Bidan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Pendidikan Profesi Bidan (PBM dimulai SMT Genap-Januari 2025)' and jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Pendidikan Profesi Ners</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Pendidikan Profesi Ners (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Keperawatan Alih Jenjang</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='*Sarjana Terapan Keperawatan Alih Jenjang (PBM dimulai SMT Genap-Januari 2025)' and jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        
                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Bengkulu (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang Kelas Curup (PBM dimulai SMT Ganjil-Juli 2024)' and jenis_kelamin='Perempuan' and status_kelulusan_simami_tahap2='LULUS'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        

                        
                  </table>
            </div>   

           

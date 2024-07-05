<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                        <h2>Jenis Kelamin</h2>
                </div>
            </div>              
                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Program Studi</th><th colspan="2">Asal Sekolah</th>
                        </tr>

                        <tr>
                            <th>Laki-Laki</th><th>Perempuan</th>
                        </tr>

                         <tr>
                            <td>1 </td><td>Pendaftar</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where  status='Sudah Membayar' and jenis_kelamin='Laki-Laki'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar'  and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                      
                        </tr>

                        <tr>
                            <td>1 </td><td>D3 Kebidanan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where  pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>2</td><td>D3 Kebidanan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>3</td><td>D3 Keperawatan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                       
                        </tr>

                        <tr>
                            <td>4</td><td>D3 Keperawatan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>5</td><td>D3 Teknologi Laboratorium Medis</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>6</td><td>D3 Sanitasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>7</td><td>D3 Gizi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                       
                        </tr>

                        <tr>
                            <td>8</td><td>D3 Farmasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>9</td><td>Sarjana Terapan Gizi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                        <tr>
                            <td>10</td><td>Sarjana Terapan Promosi Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         
                        </tr>

                        <tr>
                            <td>10</td><td>Sarjana Terapan Keperawatan dan Ners</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>

                         <tr>
                            <td>10</td><td>Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        
                        </tr>


                       
                    </table>
        </div>   

           
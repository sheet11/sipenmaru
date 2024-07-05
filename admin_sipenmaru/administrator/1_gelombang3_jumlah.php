<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
                <div class="row">
                    <div class="col-md-12">
                    <h2> Laporan 2 Pilihan Gelombang 2</h2> 
                        <h5>Welcome <?php echo $_SESSION['nama_lengkap'];?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <table class="table table-bordered">
                        <tr>
                            <td colspan="3"><b>Jumlah Pendaftar</b></td>
                            
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b>Jumlah Pendaftar Sebagai pilihan Prodi 1</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Kebidanan Curup' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Sanitasi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Sanitasi' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Gizi' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Keperawatan Curup' and status='Sudah Membayar' ");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        <tr>
                            <td colspan="3"><b>Jumlah Pendaftar Sebagai pilihan Prodi 2</b></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi2='D3 Kebidanan Curup' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Sanitasi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi2='D3 Sanitasi' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi2='D3 Gizi' and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi2='D3 Keperawatan Curup' and status='Sudah Membayar' ");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                    
                        <tr>
                            <td colspan="3"><b>Jumlah Pendaftar yang memilih prodi sama</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and (pilihan_prodi='D3 Kebidanan Bengkulu' and pilihan_prodi2='D3 Kebidanan Bengkulu') and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Sanitasi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and (pilihan_prodi='D3 Sanitasi' and pilihan_prodi2='D3 Sanitasi') and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and (pilihan_prodi='D3 Gizi' and pilihan_prodi2='D3 Gizi') and status='Sudah Membayar'");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and (pilihan_prodi='D3 Keperawatan Curup' and pilihan_prodi2='D3 Keperawatan Curup') and status='Sudah Membayar' ");
                                                         $jumlah = mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <br>
                        
                        <tr>
                            <td colspan="3"><strong>Jenis Kelamin</strong></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Sanitasi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        <tr>
                            <td>Perempuan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Kebidanan Curup' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Sanitasi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Keperawatan Bengkulu' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where level='MANDIRI 2 PILIHAN GEL III' and pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                  </table>
           
			</div>   

           

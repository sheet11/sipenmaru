<?php
include"01_nav.php";

?>
<?php error_reporting(0); ?>

<body>
   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2> Halaman Admin</h2>   
                        <h5>Welcome <?php echo $_SESSION['nama_lengkap'];?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <table class="table table-bordered">
                        <tr>
                            <td> Jumlah Pendaftar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_4 ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang telah Membayar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_4  where status_pembayaran='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang belum Membayar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_4 where status_pembayaran='Belum Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                  </table>
			</div>   

           
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
                            <td colspan="3"><b>Ruang Ujian Curup</b></td>
                        </tr>
                        <tr>
                            <td>Ruang 1 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Curup Ruang Ujian 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 2 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Curup Ruang Ujian 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 3 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Curup Ruang Ujian 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 4 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Curup Ruang Ujian 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 5 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Curup Ruang Ujian 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 6 1 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Curup Ruang Ujian 6' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 7 1 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Curup Ruang Ujian 7' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 8 1 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Curup Ruang Ujian 8' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 9 2 Pilihan</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2  where ruang_ujian='Curup Ruang Ujian 9' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 10 Alih Jenjang</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Curup Ruang Ujian 10' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Ruang 11</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Curup Ruang Ujian 11' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>


                  </table>
			</div>   

           
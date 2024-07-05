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
                            <td><b>Jumlah Pendaftar</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang telah Membayar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1  where status_pembayaran='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang telah Mengisi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1  where status_aktif='Sudah Mengisi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang belum Mengisi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where status_pembayaran='Sudah Membayar' and status_aktif='Belum Mengisi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b> Pilihan Prodi</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kebidanan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kebidanan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Prodi D3 Analis Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Analis Kesehatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kesehatan Lingkungan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kesehatan Lingkungan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Keperawatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Kebidanan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan Alih Jenjang</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D-IV Kebidanan Alih Jenjang'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Jenis Kelamin</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Analis Kesehatan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kesehatan Lingkungan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Gizi' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Bengkulu' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Curup' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Gizi' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Keperawatan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>Perempuan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Analis Kesehatan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kesehatan Lingkungan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Gizi' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Bengkulu' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Keperawatan Curup' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Gizi' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Keperawatan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kebidanan Bengkulu' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D3 Kebidanan Curup' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D4 Kebidanan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan Alih Jenjang </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where pilihanjurusan='D-IV Kebidanan Alih Jenjang' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Lokasi Ujian</b></td> <td> </td> <td></td>
                        </tr>

                        <tr>
                            <td> Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where tempatujian='Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_1 where tempatujian='Curup' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td colspan="3"><b>Ruang Ujian</b></td>
                        </tr>
                        <tr>
                            <td>Gedung Bersama 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 6</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 6' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 7</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 7' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 8</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 8' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 9</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gedung Bersama 9' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Gizi 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gizi 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Gizi 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gizi 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Gizi 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gizi 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Gizi 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gizi 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Gizi 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Gizi 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Laboratorium Multimedia</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_1 where ruang_ujian='Laboratorium Multimedia' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                  </table>
			</div>   

           
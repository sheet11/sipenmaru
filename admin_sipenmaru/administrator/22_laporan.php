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
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang telah Membayar</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2  where status_pembayaran='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        
                        <tr>
                            <td> Jumlah Pendaftar yang telah Mengisi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2  where status_aktif='Sudah Mengisi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar yang belum Mengisi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where status_pembayaran='Sudah Membayar' and status_aktif='Belum Mengisi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b> Pilihan 1</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kebidanan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kebidanan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Analis Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Analis Kesehatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kesehatan Lingkungan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kesehatan Lingkungan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Keperawatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Kebidanan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>									


                        <tr>
                            <td colspan="3"><b> Pilihan 2</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Kebidanan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kebidanan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Kebidanan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Analis Kesehatan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Analis Kesehatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Kesehatan Lingkungan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Kesehatan Lingkungan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Bengkulu</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Keperawatan Bengkulu'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D3 Keperawatan Curup</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D3 Keperawatan Curup'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D4 Keperawatan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Jurusan D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D4 Gizi'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D4 Kebidanan</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihan_jurusan_2='D4 Kebidanan'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        

                        <tr>
                            <td><b>Jenis Kelamin</b></td> <td> :</td> <td></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Analis Kesehatan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kesehatan Lingkungan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Gizi' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Bengkulu' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Curup' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Gizi' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Keperawatan' and jeniskelamin='Laki-Laki' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>Perempuan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Analis Kesehatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Analis Kesehatan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kesehatan Lingkungan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kesehatan Lingkungan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Gizi </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Gizi' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Bengkulu' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Keperawatan Curup' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Gizi</td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Gizi' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Keperawatan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Keperawatan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kebidanan Bengkulu' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D3 Kebidanan Curup' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Kebidanan' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D4 Kebidanan Alih Jenjang </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where pilihanjurusan='D4 Kebidanan Alih Jenjang' and jeniskelamin='Perempuan' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td><b>Lokasi Ujian</b></td> <td> </td> <td></td>
                        </tr>

                        <tr>
                            <td> Bengkulu </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where tempatujian='Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Curup </td> <td> :</td> <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_pendaftaran_2 where tempatujian='Curup' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td colspan="3"><b>Ruang Ujian</b></td>
                        </tr>
                        <tr>
                            <td>Auditorium Blok 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 6</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 6' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 7</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 7' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                         <tr>
                            <td>Auditorium Blok 8</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 8' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 9</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 9' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Blok 10</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Blok 10' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 1</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Perawat Ruang 1' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Perawat Ruang 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Perawat Ruang 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 4</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Perawat Ruang 4' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Perawat Ruang 5</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Perawat Ruang 5' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        
                        <tr>
                            <td>Gedung Bersama 10</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 10' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 11</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 11' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 12</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 12' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Gedung Bersama 13</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 13' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>rektorat Lantai 3</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Rektorat Lantai 3' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>

                        <tr>
                            <td>Auditorium Lantai 2</td><td>:</td><td><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Auditorium Lantai 2' ");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr>


                  </table>
           
			</div>   

           
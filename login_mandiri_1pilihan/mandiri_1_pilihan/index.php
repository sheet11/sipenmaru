<?php
$page = "Home";
include "01_nav.php";
error_reporting(0);
include "../config/koneksi.php"; 
?>

<body>
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Poltekkes Kemenkes Bengkulu</h2>   
                        <h5>Selamat Datang <b><?php echo $_SESSION['nama_lengkap'];?> </b> Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online Jalur <b><?php echo $_SESSION['level'];?></b></h5>
                        <br>
                        <div style="margin-top: 20px; padding: 15px; border: 1px solid #ccc; background-color: #f9f9f9; border-radius: 5px;">
                        <strong>📢 Pengumuman:</strong>
                            <p>Tanggal Ujian Sudah Dekat, Dimohon untuk peserta segera mencetak Kartu Ujian sebagai persyaratan ujian nanti.</p>
                        </div>
                        <!-- <h5>*Untuk Program Alih Jenjang/RPL wajib Mengisi Form asesmen alih jenjang/Rekognisi Pembelajaran Lampau, daftar riwayat hidup dan surat pernyataan pada website</h3> -->
                        <!-- <h5>*untuk Program Profesi Wajib mengupload akreditasi prodi, transkrip nilai, dan ijazah</h3> -->
                         <!-- <?php
                            include "../config/koneksi.php";
                                $query = mysqli_query($kon,"Select * from tb_rpl");
                                $cek= mysqli_fetch_array($query);
                                if($cek['username'] == $_SESSION['username']){
                            ?>
                                <h3>sudah mengisi tabel asesmen</h3>
                            <?php }else{ ?>
                                <h3 class="text-danger">*<?php echo $_SESSION['nama_lengkap']?> belum mengisi form asesmen, dimohon untuk mengisi form asesmen </h3>
                            <?php }?> -->
                            <br>
                            <!-- <h1><a href="cetak_pengumuman.php">Lihat Kelulusan</a></h1> -->
                            <!-- <h2>Pengumuman Hasil Tes Kesehatan dan Wawancara</h2>
                            <h3>Klik Untuk melihat kelulusan > <a href="cetak_pengumuman_tahap2.php">Lihat Kelulusan</a> <</h3> -->
                        <!--<h2>Pengumuman Ujian</h2>-->
                        <!--<h4>- Jadwal Ujian Tertulis akan dilaksanakan pada tanggal 10 Desember 2024<br><br>- Jadwal Uji Kesehatan Tanggal 11 Desember 2024</h4>-->
                        <!--<br>-->
                        <!--<h2>Briefing Ujian SIMAMI</h2>-->
                        <!--<h4>Briefing untuk ujian akan di lanksanakan daring melalui zoom pada tanggal 9 Desember, senin jam 14.00 wib<br>silahkan bergabung di link berikut ini  <a href="https://us06web.zoom.us/j/88482562886?pwd=tlctQwgIB2H2qjRmXnHntLimQbBgTW.1">> Link <</a></h4>-->
                        <!--<h4></h4>-->
                    </div>
                </div> 
                             
        
             </div>
             </div>
            </div>   
           </body>
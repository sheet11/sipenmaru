<?php
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
                        <h5>*Untuk Program Alih Jenjang/RPL wajib Mengisi Form asesmen alih jenjang/Rekognisi Pembelajaran Lampau, daftar riwayat hidup dan surat pernyataan pada website</h3>
                        <h5>*untuk Program Profesi Wajib mengupload akreditasi prodi, transkrip nilai, dan ijazah</h3>
                       <!--   <?php
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
                        <h2>Pengumuman Ujian</h2>
                        <h4>- Jadwal Ujian Tertulis akan dilaksanakan pada tanggal 10 Desember 2024<br><br>- Jadwal Uji Kesehatan Tanggal 11 Desember 2024</h4>
                    </div>
                </div> 
                             
        
             </div>
             </div>
            </div>   
           </body>
<?php
include"01_nav.php";
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
                        <?php 
                        $data = mysqli_query($kon,"SELECT * FROM tb_formulir4 WHERE username='$_SESSION[username]'");
                        $a = mysqli_fetch_array($data);
                        
                        if($a['status_kelulusan_2'] == 'Lulus' || $a['status_kelulusan_2'] == 'Tidak Lulus'){ ?>
                        <h1><a href="cetak_pengumuman_tahap2.php">Lihat Kelulusan</a></h1>
                        <?php }elseif($a['status_lulus'] == 'Lulus' || $a['status_lulus'] == 'Tidak Lulus'){ ?> 
                        <h1><a href="cetak_pengumuman.php">Lihat Kelulusan</a></h1>
                        <?php }else{} ?>
                    </div>
                </div> 
                             
        
             </div>
             <div>
                 <!--<a href="cetak_pengumuman.php">Lihat Kelulusan</a>-->
             </div>
             </div>
            </div>   
           </body>
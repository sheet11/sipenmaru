<?php
include"01_nav.php";
error_reporting(0);
include "../config/koneksi.php"; 
include("fucnt_tgl.php");
?>

<body>
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Poltekkes Kemenkes Bengkulu</h2>   
                        <h5>Selamat Datang <b><?php echo $_SESSION['nama_lengkap'];?> </b> Di Halaman Seleksi Pendaftaran Mahasiswa Baru Online Jalur <b>Prestasi</b></h5>
                    </div>
                </div> 
                             
        <div>
            <table class="table table-bordered table-striped">
                <thead>         
                    <tr class="info">
                        <th width="5%">No.</th>
                        <th>ID </th>
                        <th>Nama Lengkap </th>
                         <th>Prodi</th>
                         <th>Status</th>
                         <!--
                        <th width="25%">Aksi</th>
                    -->
                    </tr>
                </thead>
            <?php 
                    $query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
                
                    $i =  +1;       
                while($a=mysqli_fetch_array($query)){
                echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$a[status]</td>";

                    
                    if($a['status_pmdp_2']=='LULUS TAHAP 2')
                    {
                        echo "
                        <td>
                        <a href='01_cetak_kelulusan_2.php' class='btn btn-success'><b>Cetak Kelulusan</b></a>
                        <a href='file/ukt1.pdf' class='btn btn-primary'><b>Uang Kuliah Tunggal</b></a> 
                        <a href='file/seragam.pdf' class='btn btn-warning'><b>Seragam</b></a> 
                        <a href='file/surat_pernyataan.doc' class='btn btn-primary'><b>Surat Pernyataan</b></a> 
                        </td>
                         ";
                     }
    

            
                echo"
                    </tr>
                    </table>";


                $i++;
            }
            ?>
           
            </table>
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $d = tgl_indo(date('l, d-m-Y  H:i:s'));
            $q = mysqli_query($kon,"select * from tb_formulir3 WHERE username=$_SESSION[username]");
            $row = mysqli_fetch_array($q);
            if ($_SESSION['kelulusan'] === 'tahap1' and $row['status_pmdp'] != ""){ ?>
            <h2>Klik untuk melihat -> <a href="cetak_pengumuman1.php" class='btn btn-success'>Kelulusan Tahap 1 </a></h2>
            <?php }elseif ($_SESSION['kelulusan'] === 'tahap2' and $row['status_pmdp_2'] != "") {?>
            <h1><h1>Klik untuk melihat -> <a href="cetak_pengumuman2.php" class='btn btn-success'>Kelulusan Tahap 2 </a></h1></h1>
            <?php }else{} 
             ?>
    </div>
             </div>
             </div>
            </div>   
           </body>

<?php 
    include"01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru Jalur PMDP</b></h4></td>   
    
        </tr>
            <tr>
                <td width="20%"><label>Pencarian Berdasarkan</label></td>               
                    <form method="post" action="" enctype="multipart/form-data">                    
                        <td width="25%">
                            <select name="cariid" class="form-control">
                                <option value="username">ID </option>
                                <option value="nama_lengkap">Nama Lengkap</option>
                                <option value="status">Status</option>
                                <option value="pilihan_prodi">Prodi</option>
                                <option value="no_hp">No HP</option>
                            </select>
                        </td>
                        <td width="15%"></td>
                        <td>
                            <div class="form-group input-group" style="margin-top:15px;">
                            <span class="input-group-btn">
                                <input type="text" name="cari" placeholder="Input ID/Scanner Barcode" class="form-control">
                                <button class="btn btn-default" type="submit" name="submit"><i class="fa fa-search"></i></button>
                            </span>
                            </div>  
                        </td>
                        <td width="5%">
                        </td>   
                    </form>
                
                    <td>
                        <a href="09_daftar_calon_mahasiswa_pmdp.php" class="btn btn-primary">ALL</a>
                    </td>                   
            </tr>
            <tr>
                <td><a class="btn btn-info" > Jumlah PMDP: <?php
                                                                    require_once("../config/koneksi.php");
                                                                    $query = mysqli_query ($kon,"SELECT * from tb_prestasi' ");
                                                                    $jumlah = mysqli_num_rows ($query); ?>
                                                                    <?php echo $jumlah; ?> </a></td>

                <td> 
                        <a class="btn btn-success" href="09_cetak_excel.php">Cetak Excel</a>
                </td>

                
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            
        </table>

        <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th>No.</th>
                <th>ID </th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Tingkat</th>
                <th>bukti gambar</th>
                <th>Tanggal prestasi</th>
                <th>Tanggal entri</th>
                <th width="150">Aksi</th>
            </tr>
            <?php 
           
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_prestasi' and  $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama]</td>
                    <td>$a[ket]</td>
                    <td>$a[tingkat]</td>
                    <td>$a[bukti_n]</td>
                    <td>$a[tgl]</td>
                    <td>$a[entri]</td>
                    <td>
                        <a href='09_cetak_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-success btn-xs' >
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>

                        <a href='09_cetak_raport_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-warning btn-xs' >
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_lihat_nilai_input.php.php?username=$a[username]' class='btn btn-warning btn-xs' >
                        <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_edit_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 
                        <a href='09_delete_calon_mahasiswa_pmdp.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>";
                $i++;
            }
                }
                elseif(!empty($_GET['username'])){
                    $query=mysqli_query($kon,"select * from tb_formulir3  where status='Sudah Membayar' and  username='$_GET[username]'"); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>    
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama]</td>
                    <td>$a[ket]</td>
                    <td>$a[tingkat]</td>
                    <td>$a[bukti_n]</td>
                    <td>$a[tgl]</td>
                    <td>$a[entri]</td>               
                    <td>
                        <a href='09_cetak_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>

                        <a href='09_cetak_raport_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-warning btn-xs' >
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_lihat_nilai_input.php?username=$a[username]' class='btn btn-warning btn-xs' >
                        <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_edit_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>

                        <a href='09_delete_calon_mahasiswa_pmdp.php?username=$a[username]&halaman=0' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>

                    </td>
                </tr>";
                $i++;
                }
                }

                else{
                    $p      = new Paging;
                    $batas  = 10;
                    $posisi = $p->cariPosisi($batas);               
                    $query=mysqli_query($kon,"select * from tb_prestasi' order by username asc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){

                echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama]</td>
                    <td>$a[ket]</td>
                    <td>$a[tingkat]</td>
                    <td>$a[bukti_n]</td>
                    <td>$a[tgl]</td>
                    <td>$a[entri]</td>        
                    <td>
                        <a href='09_cetak_calon_mahasiswa_pmdp.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>

                        <a href='09_cetak_raport_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-warning btn-xs' >
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_lihat_nilai_input.php?username=$a[username]' class='btn btn-warning btn-xs' >
                        <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='09_edit_calon_mahasiswa_pmdp.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>

                        <a href='09_delete_calon_mahasiswa_pmdp.php?username=$a[username]&halaman=$_GET[halaman]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>";
                $i++;
            }
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_prestasi " ));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
        
     
    </div>
</div>          













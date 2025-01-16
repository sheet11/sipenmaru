
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
                                                                    $query = mysqli_query ($kon,"SELECT * from tb_formulir3 where status='Sudah Membayar' ");
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
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>No HP</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Login</th>
                <th>Nama Sekolah</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th width="150">Aksi</th>
            </tr>
            <?php 
           
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_formulir3 where status='Sudah Membayar' and  $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$a[no_hp]</td>
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[nama_sekolah]</td>
                    <td>$a[status]</td>   
                    <td>$a[pekerjaan_orang_tua]</td>    
                    <td>$a[penghasilan_orang_tua]</td>   
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
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$a[no_hp]</td>
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[nama_sekolah]</td>  
                    <td>$a[status]</td>   
                    <td>$a[pekerjaan_orang_tua]</td>    
                    <td>$a[penghasilan_orang_tua]</td>                  
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
                    $query=mysqli_query($kon,"select * from tb_formulir3 where status='Sudah Membayar' order by username asc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){

                echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td> 
                    <td>$a[no_hp]</td>
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[nama_sekolah]</td> 
                    <td>$a[status]</td>
                    <td>$a[pekerjaan_orang_tua]</td>    
                    <td>$a[penghasilan_orang_tua]</td>         
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
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_formulir3  where status='Sudah Membayar' " ));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
        
     
    </div>
</div>          













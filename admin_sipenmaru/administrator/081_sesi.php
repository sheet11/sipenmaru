<?php 
    include"01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru 2 Pilihan Mandiri</b></h4></td>   
    
        </tr>
            <tr>
                <td width="20%"><label>Pencarian Berdasarkan</label></td>               
                    <form method="post" action="" enctype="multipart/form-data">                    
                        <td width="25%">
                            <select name="cariid" class="form-control">
                                <option value="username">ID </option>
                                <option value="nama_lengkap">Nama Lengkap</option>
                                <option value="no_hp">No HP</option>
                                <option value="status">Status</option>
                                <option value="ruang">ruang</option>
                                <option value="ruang_ujian">Ruang Ujian</option>
                                <option value="asal_sekolah">Ruang Ujian</option>
                                <option value="pilihan_prodi">Prodi</option>
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
	                    <a href="081_sesi.php" class="btn btn-primary">ALL</a>
	                </td>                   
            </tr>
            <tr>
                
                <td>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $cariid = $_POST['cariid'];
                        $cari = $_POST['cari'];
                    ?>
                        <a class="btn btn-success" href="081_cetak_excel_calon_mahasiswa.php?cariid=<?php echo $cariid; ?>&cari=<?php echo $cari; ?>">Cetak Excel</a>
                    <?php
                    }
                    elseif(!empty($_GET['username']))
                    {
                    ?>
                        <a class="btn btn-success" href="081_cetak_excel_calon_mahasiswa.php?username=<?php echo $_GET['username']; ?>">Cetak Excel</a>
                    <?php
                    }
                    else
                    {
                    ?>
                        <a class="btn btn-success" href="081_cetak_excel_calon_mahasiswa.php">Cetak Excel</a>
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>

        <a href="081_cetak_sesi.php?sesi=Sesi 1 Pukul 08.00 - 09.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 1: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query); ?>
                    <?php echo $jumlah; ?> 
        </a>
                    
        <a href="081_cetak_sesi.php?sesi=Sesi 2 Pukul 10.00 - 11.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 2: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query); ?>
                    <?php echo $jumlah; ?> 
        </a>
                                                                    
        <a href="081_cetak_sesi.php?sesi=Sesi 3 Pukul 13.00 - 14.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 3: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query); ?>
                    <?php echo $jumlah; ?> 
        </a>
        
        <a href="081_cetak_sesi.php?sesi=Sesi 4 Pukul 08.00 - 09.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 4: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query); ?>
                    <?php echo $jumlah; ?> 
        </a>
        
        <a href="081_cetak_sesi.php?sesi=Sesi 5 Pukul 10.00 - 11.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 5: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query); ?>
                    <?php echo $jumlah; ?> 
        </a>
        
        <a href="081_cetak_sesi.php?sesi=Sesi 6 Pukul 13.00 - 14.30 WIB&tab=tb_formulir5" class="btn btn-info" > Sesi 6: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' ");
                    $query2 = mysqli_query ($kon,"SELECT * from tb_formulir5 where sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query);
                    $jumlah2 = mysqli_num_rows ($query2);
                    $jumtot = $jumlah + $jumlah2; ?>
                    <?php echo $jumtot; ?> 
        </a>
        <a href="081_cetak_sesi.php?sesi=Sesi 7 Pukul 08.00 - 09.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 7: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB' ");
                    $query2 = mysqli_query ($kon,"SELECT * from tb_formulir5 where sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query);
                    $jumlah2 = mysqli_num_rows ($query2);
                    $jumtot = $jumlah + $jumlah2; ?>
                    <?php echo $jumtot; ?> 
        </a>
        <a href="081_cetak_sesi.php?sesi=Sesi 8 Pukul 10.00 - 11.30 WIB&tab=tb_formulir4" class="btn btn-info" > Sesi 8: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB' ");
                    $query2 = mysqli_query ($kon,"SELECT * from tb_formulir5 where sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query);
                    $jumlah2 = mysqli_num_rows ($query2);
                    $jumtot = $jumlah + $jumlah2; ?>
                    <?php echo $jumtot; ?> 
        </a>
        <a href="081_cetak_sesi.php?sesi=Sesi 9 Pukul 13.00 - 14.30 WIB&tab=tb_formulir5" class="btn btn-info" > Sesi 9: <?php
                    require_once("../config/koneksi.php");
                    error_reporting(E_ALL);
                    ini_set('display_errors', 0);
                    $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB' ");
                    $query2 = mysqli_query ($kon,"SELECT * from tb_formulir5 where sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB' ");
                    $jumlah = mysqli_num_rows ($query);
                    $jumlah2 = mysqli_num_rows ($query2);
                    $jumtot = $jumlah + $jumlah2; ?>
                    <?php echo $jumtot; ?> 
        </a>
        
        <br>
        <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th>No.</th>
                <th>ID </th>
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi 1</th>
                <th>Prodi 2</th>
                <th>No HP</th>
                <th>Tgl Daftar</th>
                <th>Tgl Login</th>
                <th>Tgl Ujian</th>
                <th>Tempat Ujian</th>
                <th>Ruang Ujian</th>
                <th>Sesi Ujian</th>
                <th>Status</th>
                <th width="150">Aksi</th>
            </tr>
            <?php 
            include "../config/koneksi.php";
            error_reporting(E_ALL);
ini_set('display_errors', 0);
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' and $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td> 
                    <td>$a[pilihan_prodi2]</td> 
                    <td>$a[no_hp]</td> 
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[tanggal_ujian]</td>
                    <td>$a[tempat_ujian]</td>
                    <td>$a[ruang_ujian]</td>
                    <td>$a[sesi_ujian]</td>
                    <td>$a[status]</td>         
                    <td>
                        <a href='081_cetak_kartu_ujian.php?username=$a[username]' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='081_cetak_calon_mahasiswa.php?username=$a[username]' class='btn btn-success btn-xs' >
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 

                        <a href='081_cetak_portopolio.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 

                        <a href='081_edit_calon_mahasiswa.php?username=$a[username]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 

                        <a href='081_delete_calon_mahasiswa.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>

                        <a href='081_proses_kembalikan.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan mengembalikan data $a[nama_lengkap] ?\")' class='btn btn-danger btn-xs'>
                            <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
                        </a>

                    </td>
                </tr>";
                $i++;
            }
                }
                elseif(!empty($_GET['username'])){
                    $query=mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' and username='$_GET[username]'"); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>    
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$a[pilihan_prodi2]</td> 
                    <td>$a[no_hp]</td>
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[tanggal_ujian]</td>
                    <td>$a[tempat_ujian]</td>
                    <td>$a[ruang_ujian]</td>  
                    <td>$a[sesi_ujian]</td> 
                    <td>$a[status]</td>                   
                    <td>
                        <a href='081_cetak_kartu_ujian.php?username=$a[username]' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>

                        <a href='081_cetak_calon_mahasiswa.php?username=$a[username]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 

                        <a href='081_cetak_portopolio.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 

                        <a href='081_edit_calon_mahasiswa.php?username=$a[username]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 

                        <a href='081_delete_calon_mahasiswa.php?username=$a[username]&halaman=0' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>

                        <a href='081_proses_kembalikan.php?username=$a[username]&halaman=0' onclick='return confirm(\"Anda yakin akan mengembalikan data $a[nama_lengkap] ?\")' class='btn btn-danger btn-xs'>
                            <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
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
                    $query=mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' order by username asc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){

                echo"
                <tr>
                    <td>$i</td>
                   	<td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$a[pilihan_prodi2]</td> 
                    <td>$a[no_hp]</td>
                    <td>$a[tanggal_daftar]</td>
                    <td>$a[tanggal_login]</td>
                    <td>$a[tanggal_ujian]</td>
                    <td>$a[tempat_ujian]</td>
                    <td>$a[ruang_ujian]</td>
                    <td>$a[sesi_ujian]</td>
                    <td>$a[status]</td>       
                    <td>
                        <a href='081_cetak_kartu_ujian.php?username=$a[username]' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print'  aria-hidden='true'></span>
                        </a>
                        <a href='081_cetak_calon_mahasiswa.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 
                        <a href='081_cetak_portopolio.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 
                        <a href='081_edit_calon_mahasiswa.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 
                        <a href='081_delete_calon_mahasiswa.php?username=$a[username]&halaman=$_GET[halaman]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                        <a href='081_proses_kembalikan.php?username=$a[username]&halaman=$_GET[halaman]' onclick='return confirm(\"Anda yakin akan mengembalikan data $a[nama_lengkap] ?\")' class='btn btn-danger btn-xs'>
                            <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>";
                $i++;
            }
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar'"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "</table><div class=\"paginationw\">$linkHalaman</div>";
    }
            ?>
        
     
    </div>
</div>          





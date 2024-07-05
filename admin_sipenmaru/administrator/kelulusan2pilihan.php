<?php 
	include"01_nav.php";
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru Jalur Umum 2 Pilihan</b></h4></td>   
    
        </tr>
            <tr>
                <td width="20%"><label>Pencarian Berdasarkan</label></td>               
                    <form method="post" action="" enctype="multipart/form-data">                    
                        <td width="25%">
                            <select name="cariid" class="form-control">
                                <option value="username">ID </option>
                                <option value="nama_lengkap">Nama Lengkap</option>
                                <option value="status">Status</option>
                                <option value="tempat_ujian">Tempat Ujian</option>
                                <option value="pilihan_prodi1">Prodi 1</option>
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
	                    <a href="08_daftar_calon_mahasiswa.php" class="btn btn-primary">ALL</a>
	                </td>                   
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <td><a class="btn btn-info" > Jumlah Jalur Umum 2 Pilihan : <?php
                                                                    require_once("../config/koneksi.php");
                                                                    $query = mysqli_query ($kon,"SELECT * from tb_formulir2 where status='Sudah Membayar' ");
                                                                    $jumlah = mysqli_num_rows ($query); ?>
                                                                    <?php echo $jumlah; ?> </a></td>

                <td>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $cariid = $_POST['cariid'];
                        $cari = $_POST['cari'];
                    ?>
                        <a class="btn btn-success" href="08_cetak_excel_calon_mahasiswa.php?cariid=<?php echo $cariid; ?>&cari=<?php echo $cari; ?>">Cetak Excel</a>
                    <?php
                    }
                    elseif(!empty($_GET['username']))
                    {
                    ?>
                        <a class="btn btn-success" href="08_cetak_excel_calon_mahasiswa.php?username=<?php echo $_GET['username']; ?>">Cetak Excel</a>
                    <?php
                    }
                    else
                    {
                    ?>
                        <a class="btn btn-success" href="08_cetak_excel_calon_mahasiswa.php">Cetak Excel</a>
                    <?php
                    }
                    ?>
                </td>

                
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

        </table>

        <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th>No.</th><th>ID </th><th>Password</th><th>Nama</th><th>Prodi 1</th><th>Prodi 2</th><th>No HP</th><th>Tempat Ujian</th><th>Ruang Ujian</th><th>Asal Sekolah</th><th>Status</th><th>Status Kehadiran</th><th>Status Kelulusan</th><th width="150">Aksi</th>
            </tr>
            <?php 
            include "../config/koneksi.php";
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_formulir2 where status='Sudah Membayar' and $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi1]</td> 
                    <td>$a[pilihan_prodi2]</td>
                    <td>$a[no_hp]</td> 
                    <td>$a[tempat_ujian]</td> 
                    <td>$a[ruang_ujian]</td> 
                    <td>$a[asal_sekolah]</td>
                    <td>$a[status]</td> 
                    <td>$a[ikut_tes_tertulis]</td>
                    <td>$a[lulus_tes_tertulis]</td>         
                    <td>
                        <a href='lulus2pilihan.php?username=$a[username]' class='btn btn-success btn-xs' >
                            Lulus
                        </a> 
                        <a href='tidaklulus2pilihan.php?username=$a[username]' class='btn btn-info btn-xs'>
                            Tidak Lulus
                        </a>
                    </td>
                </tr>";
                $i++;
            }
                }
                elseif(!empty($_GET['username'])){
                    $query=mysqli_query($kon,"select * from tb_formulir2 where status='Sudah Membayar' and username='$_GET[username]'"); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>    
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi1]</td>
                    <td>$a[pilihan_prodi2]</td>
                    <td>$a[no_hp]</td>
                    <td>$a[tempat_ujian]</td>
                    <td>$a[ruang_ujian]</td>
                    <td>$a[asal_sekolah]</td>   
                    <td>$a[status]</td>
                    <td>$a[ikut_tes_tertulis]</td>
                    <td>$a[lulus_tes_tertulis]</td>                    
                    <td>
                        <a href='lulus2pilihan.php?username=$a[username]' class='btn btn-success btn-xs' >
                            Lulus
                        </a> 
                        <a href='tidaklulus2pilihan.php?username=$a[username]' class='btn btn-info btn-xs'>
                            Tidak Lulus
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
                    $query=mysqli_query($kon,"select * from tb_formulir2 where status='Sudah Membayar' order by username asc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){

                echo"
                <tr>
                    <td>$i</td>
                   	<td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi1]</td>
                    <td>$a[pilihan_prodi2]</td>
                    <td>$a[no_hp]</td>
                    <td>$a[tempat_ujian]</td>
                    <td>$a[ruang_ujian]</td>
                    <td>$a[asal_sekolah]</td>   
                    <td>$a[status]</td>
                    <td>$a[ikut_tes_tertulis]</td>
                    <td>$a[lulus_tes_tertulis]</td>        
                    <td>
                        <a href='lulus2pilihan.php?username=$a[username]' class='btn btn-success btn-xs' >
                            Lulus
                        </a> 
                        <a href='tidaklulus2pilihan.php?username=$a[username]' class='btn btn-info btn-xs'>
                            Tidak Lulus
                        </a>
                    </td>
                </tr>";
                $i++;
            }
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_formulir2 where status='Sudah Membayar' "));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
        
     
    </div>
</div>          






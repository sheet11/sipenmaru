<?php 
	include"01_nav.php";
?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru</b></h4></td>   
    
        </tr>
            <tr>
                <td width="20%"><label>Pencarian Berdasarkan</label></td>               
                    <form method="post" action="" enctype="multipart/form-data">                    
                        <td width="25%">
                            <select name="cariid" class="form-control">
                                <option value="username">ID </option>
                                <option value="nama_lengkap">Nama Lengkap</option>
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
                <td>&nbsp;</td>
            </tr>
        </table>

        <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th>No.</th><th>ID </th><th>Password</th><th>Nama</th><th>Prodi</th><th>Status</th><th width="150">Aksi</th>
            </tr>
            <?php 
            include "../config/koneksi.php";
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_formulir3 where $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>  
                    <td>$a[status]</td> 
                                      
                    <td>
                        <a href='09_proses_kembalikan_id_pmdp.php?username=$a[username]'class='btn btn-danger'>
                            Kembalikan
                        </a> 
                    </td>
                </tr>";
                $i++;
            }
                }else{
                    $p      = new Paging;
                    $batas  = 10;
                    $posisi = $p->cariPosisi($batas);               
                    $query=mysqli_query($kon,"select * from tb_formulir3 order by nama_lengkap desc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){

                echo"
                <tr>
                    <td>$i</td>
                   	<td>$a[username]</td>
                    <td>$a[password]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>  
                    <td>$a[status]</td>       
                    <td>
                        <a href='09_proses_kembalikan_id_pmdp.php?username=$a[username]' class='btn btn-danger'>
                            Kembalikan
                        </a> 
                    </td>
                </tr>";
                $i++;
            }
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_formulir3 where status='Sudah di Verifikasi'"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
        
     
    </div>
</div>          






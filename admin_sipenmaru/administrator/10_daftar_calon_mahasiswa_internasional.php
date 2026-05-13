<?php 
    $page = "calon internasional";
    include "01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru Jalur Internasional</b></h4></td>   
        </tr>
            <tr>
                <td width="20%"><label>Pencarian Berdasarkan</label></td>               
                    <form method="post" action="" enctype="multipart/form-data">                    
                        <td width="25%">
                            <select name="cariid" class="form-control">
                                <option value="username">ID </option>
                                <option value="first_name">Nama Depan</option>
                                <option value="last_name">Nama Belakang</option>
                                <option value="nationality">Negara Asal</option>
                                <option value="program1">Program 1</option>
                            </select>
                        </td>
                        <td width="15%"></td>
                        <td>
                            <div class="form-group input-group" style="margin-top:15px;">
                            <span class="input-group-btn">
                                <input type="text" name="cari" placeholder="Input ID/Nama/Negara/Program" class="form-control">
                                <button class="btn btn-default" type="submit" name="submit"><i class="fa fa-search"></i></button>
                            </span>
                            </div>  
                        </td>
                        <td width="5%">
                        </td>   
                    </form>
                
                    <td>
                        <a href="10_daftar_calon_mahasiswa_internasional.php" class="btn btn-primary">ALL</a>
                    </td>                   
            </tr>
            <tr>
                <td><a class="btn btn-info" > Jumlah Pendaftar: <?php
                                                                    require_once("../config/koneksi.php");
                                                                    $query = mysqli_query($kon,"SELECT * from tb_interstudent");
                                                                    $jumlah = mysqli_num_rows($query); ?>
                                                                    <?php echo $jumlah; ?> </a></td>
                <td> 
                        <a class="btn btn-success" href="10_cetak_excel_calon_mahasiswa_internasional.php">Cetak Excel</a>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            
        </table>

        <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th>No.</th>
                <th>ID (Username)</th>
                <th>Nama Lengkap</th>
                <th>Negara Asal</th>
                <th>Passport</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Program 1</th>
                <th>Program 2</th>
                <th width="120">Aksi</th>
            </tr>
            <?php 
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_interstudent where $cariid LIKE '%$cari%'"); 
                    $i = 1;      
                    while($a=mysqli_fetch_array($query)){
                        $nama_lengkap = $a['first_name'] . ' ' . $a['last_name'];
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$nama_lengkap</td>
                    <td>$a[nationality]</td>
                    <td>$a[passport]</td>
                    <td>$a[email]</td>
                    <td>$a[phone]</td>
                    <td>$a[program1]</td>
                    <td>$a[program2]</td>
                    <td>
                        <a href='10_edit_calon_mahasiswa_internasional.php?username=$a[username]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 
                        <a href='10_delete_calon_mahasiswa_internasional.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus pendaftar $nama_lengkap ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>";
                $i++;
            }
                }
                elseif(!empty($_GET['username'])){
                    $query=mysqli_query($kon,"select * from tb_interstudent where username='$_GET[username]'"); 
                    $i = 1;      
                    while($a=mysqli_fetch_array($query)){
                        $nama_lengkap = $a['first_name'] . ' ' . $a['last_name'];
            echo"
                <tr>    
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$nama_lengkap</td>
                    <td>$a[nationality]</td>
                    <td>$a[passport]</td>
                    <td>$a[email]</td>
                    <td>$a[phone]</td>
                    <td>$a[program1]</td>
                    <td>$a[program2]</td>
                    <td>
                        <a href='10_edit_calon_mahasiswa_internasional.php?username=$a[username]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>
                        <a href='10_delete_calon_mahasiswa_internasional.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus pendaftar $nama_lengkap ?\")' class='btn btn-warning btn-xs'>
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
                    $query=mysqli_query($kon,"select * from tb_interstudent order by id desc LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                    while($a=mysqli_fetch_array($query)){
                        $nama_lengkap = $a['first_name'] . ' ' . $a['last_name'];
                echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$nama_lengkap</td>
                    <td>$a[nationality]</td>
                    <td>$a[passport]</td>
                    <td>$a[email]</td>
                    <td>$a[phone]</td>
                    <td>$a[program1]</td>
                    <td>$a[program2]</td>
                    <td>
                        <a href='10_edit_calon_mahasiswa_internasional.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>
                        <a href='10_delete_calon_mahasiswa_internasional.php?username=$a[username]&halaman=$_GET[halaman]' onclick='return confirm(\"Anda yakin akan menghapus pendaftar $nama_lengkap ?\")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>";
                $i++;
            }
            
    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_interstudent" ));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
    </div>
</section>
</aside>

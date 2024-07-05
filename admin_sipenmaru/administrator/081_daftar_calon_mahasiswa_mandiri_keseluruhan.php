           
<?php 
    include"01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru Jalur Mandiri 2 PIlihan </b></h4></td>   
    
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
                        <a href="082_daftar_calon_mahasiswa_mandiri_keseluruhan.php" class="btn btn-primary">ALL</a>
                    </td>                   
            </tr>
            <tr>
                <td><a class="btn btn-info" > Jumlah Mandiri 1 Pilihan: <?php
                                                                    require_once("../config/koneksi.php");
                                                                    $query = mysqli_query ($kon,"SELECT * from tb_formulir6 where status='Sudah Membayar' ");
                                                                    $jumlah = mysqli_num_rows ($query); ?>
                                                                    <?php echo $jumlah; ?> </a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $cariid = $_POST['cariid'];
                        $cari = $_POST['cari'];
                    ?>
                        <a class="btn btn-info" href="081_cetak_excel_calon_mahasiswa_mandiri.php?cariid=<?php echo $cariid; ?>&cari=<?php echo $cari; ?>">Cetak Excel</a>
                    <?php
                    }
                    elseif(!empty($_GET['username']))
                    {
                    ?>
                        <a class="btn btn-info" href="081_cetak_excel_calon_mahasiswa_mandiri.php?username=<?php echo $_GET['username']; ?>">Cetak Excel</a>
                    <?php
                    }
                    else
                    {
                    ?>
                        <a class="btn btn-info" href="081_cetak_excel_calon_mahasiswa_mandiri.php">Cetak Excel</a>
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
                <th>No.</th>
                <th>ID </th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>B.Indonesia</th>
                <th>B.Inggris</th>
                <th>Matematika</th>
                <th>Rata-Rata</th>
        </tr>
            <?php 
           
                if(isset($_POST['submit'])){
                    $cariid = $_POST['cariid'];
                    $cari = $_POST['cari'];
                    $query=mysqli_query($kon,"select * from tb_formulir6 where status='Sudah Membayar' and $cariid = '$cari' or $cariid = '0' "); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
                    $satu   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
                    $dua    = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
                    $tiga   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
                    $empat  = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
                    $lima   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
                    $enam   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
                    
                                        // Semester 1
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		    // Semester 2
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

		// Semester 3
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		// Rata Rata
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$rerata</td>
                    <td>$rerata2</td>
                    <td>$rerata3</td>
                    <td>$rerata4</td>
                </tr>";
                $i++;
            }
                }
                elseif(!empty($_GET['username'])){
                    $query=mysqli_query($kon,"select * from tb_formulir6  where status='Sudah Membayar' and username='$_GET[username]'"); 
                    $i = $posisi+1;      
                while($a=mysqli_fetch_array($query)){
                    $satu   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
                    $dua    = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
                    $tiga   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
                    $empat  = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
                    $lima   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
                    $enam   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
                    
                                        // Semester 1
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		    // Semester 2
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

		// Semester 3
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		// Rata Rata
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;
            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$rerata</td>
                    <td>$rerata2</td>
                    <td>$rerata3</td>
                    <td>$rerata4</td>
                </tr>";
                $i++;
                }
                }

                else{
                    $p      = new Paging;
                    $batas  = 10;
                    $posisi = $p->cariPosisi($batas);               
                    $query=mysqli_query($kon,"select * from tb_formulir6 where status='Sudah Membayar' order by username asc  LIMIT $posisi,$batas");
                
                    $i = $posisi+1;     
                while($a=mysqli_fetch_array($query)){
                    $satu   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
                    $dua    = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
                    $tiga   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
                    $empat  = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
                    $lima   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
                    $enam   = mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
                    
                    // Semester 1
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		    // Semester 2
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

		// Semester 3
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		// Rata Rata
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;


            echo"
                <tr>
                    <td>$i</td>
                    <td>$a[username]</td>
                    <td>$a[nama_lengkap]</td>
                    <td>$a[pilihan_prodi]</td>
                    <td>$rerata</td>
                    <td>$rerata2</td>
                    <td>$rerata3</td>
                    <td>$rerata4</td>
                </tr>";
                $i++;
            }
            

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_formulir6 where status='Sudah Membayar' "));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
            ?>
        
     
    </div>
</div>          













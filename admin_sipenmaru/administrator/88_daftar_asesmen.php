<?php 
    include "01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div>
            <a href="88_import.php" class="btn btn-md btn-primary"><i class="fa fa-upload"></i> Import Tabel</a>
            <button class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Data</button>
            <br>
            </div>
            <br>

            <table style="width:100%;" class="table table-bordered">    
            <tr class="info">
                <th width="5">No.</th>
                <th>Username </th>
                <th>Nama Lengkap</th>
                <th>Nama Jurusan</th>
                <th width="150">Aksi</th>
            </tr>      
                <?php
                $i=1;
                include "../config/koneksi.php";
                $query = mysqli_query($kon," SELECT * FROM tb_formulir5 WHERE status= 'Sudah Membayar' AND (pilihan_prodi='Sarjana Terapan Kebidanan Alih Jenjang' OR pilihan_prodi='Sarjana Terapan Keperawatan Alih Jenjang')");
                while($a = mysqli_fetch_array($query))
                {
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$a['username']?></td>
                    <td><?=$a['nama_lengkap']?></td>
                    <td><?=$a['pilihan_prodi']?></td>      
                    <td>
                        <a href='88_edit_asesmen.php?username=<?=$a[username]?>' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr> 
                <?php
                }
                ?>
            </table>   
        </div>
    </section>
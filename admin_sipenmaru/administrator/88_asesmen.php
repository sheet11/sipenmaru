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
                <th>Kode </th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nama Jurusan</th>
                <th width="150">Aksi</th>
            </tr>      
                <?php
                $i=1;
                include "../config/koneksi.php";

                $query = mysqli_query($kon,"select * from tb_asesmen");
                while($a = mysqli_fetch_array($query))
                {
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$a['kode_polkes']?></td>
                    <td><?=$a['matkul_polkes']?></td>
                    <td><?=$a['sks_polkes']?></td>
                    <td><?=$a['nama_jurusan']?></td>       
                    <td>
                        <a href='082_cetak_kartu_ujian.php?username=$a[username]' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='082_cetak_calon_mahasiswa.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 

			            <a href='082_cetak_portopolio.php?username=$a[username]&halaman=$_GET[halaman]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr> 
                <?php
                }
                ?>
            </table>   
        </div>
    </section>
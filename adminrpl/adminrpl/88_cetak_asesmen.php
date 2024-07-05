<?php   
    include "../config/koneksi.php";
    error_reporting(0); 
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename= $_GET[username].xls");
?>

<table width="100%" class="table table-bordered">
                <tr align="left">
                    <th>Kode</th>   
                    <th>Matakuliah</th> 
                    <th>SKS</th>    
                    <th>Nilai</th>  
                </tr>

                <?php $query=mysqli_query($kon,"select tb_rpl.sks_asal, tb_rpl.nilai_asal, tb_rpl.idasesmen, tb_rpl.kode_asal, tb_rpl.matkul_asal, tb_rpl.status_sks, tb_rpl.status_rpl, tb_asesmen.idasesmen, tb_asesmen.kode_polkes, tb_asesmen.sks_polkes, tb_asesmen.matkul_polkes from tb_asesmen join tb_rpl on tb_asesmen.idasesmen=tb_rpl.idasesmen where tb_asesmen.nama_jurusan='kebidanan' and tb_rpl.username='$_GET[username]'"); 
                while($a=mysqli_fetch_array($query))
                { ?>
                <tr>

                    <td><?=$a['kode_asal'];?></td>
                    <td><?=$a['matkul_asal'];?></td>
                    <td><?=$a['sks_asal'];?></td>
                    <td><?=$a['nilai_asal'];?></td>
                </tr>

                <?php 
                }
                ?>
                <tr>
        </table>      
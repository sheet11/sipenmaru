<?php 
    include "01_nav.php";
    error_reporting(0);
    include "../config/koneksi.php";
    // Ambil pilihan prodi unik
    $prodi_query = mysqli_query($kon, "SELECT DISTINCT pilihan_prodi FROM tb_formulir5 WHERE status='Sudah Membayar'");
    $selected_prodi = isset($_GET['prodi']) ? $_GET['prodi'] : '';
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
            <!-- Filter Prodi -->
            <form method="get" style="margin-bottom:10px;">
                <label for="prodi">Filter Prodi:</label>
                <select name="prodi" id="prodi" onchange="this.form.submit()">
                    <option value="">-- Semua Prodi --</option>
                    <?php while($p = mysqli_fetch_array($prodi_query)): ?>
                        <option value="<?=htmlspecialchars($p['pilihan_prodi'])?>" <?=($selected_prodi==$p['pilihan_prodi'])?'selected':''?>>
                            <?=htmlspecialchars($p['pilihan_prodi'])?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </form>
            <table style="width:100%;" class="display table table-bordered" id="daftar">    
            <thead>
            <tr class="info">
                <th width="5">No.</th>
                <th>Username </th>
                <th>Nama Lengkap</th>
                <th>Nama Jurusan</th>
                <th>Jumlah SKS</th>
                <th width="150">Aksi</th>
            </tr>   
            </thead>
            <tbody>   
                <?php
                $i=1;
                // Query dengan filter prodi
                $where = "status='Sudah Membayar'";
                if($selected_prodi != '') {
                    $prodi_safe = mysqli_real_escape_string($kon, $selected_prodi);
                    $where .= " AND pilihan_prodi='$prodi_safe'";
                }
                $query = mysqli_query($kon,"SELECT * FROM tb_formulir5 WHERE $where");
                while($a = mysqli_fetch_array($query))
                {
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$a['username']?></td>
                    <td><?=$a['nama_lengkap']?></td>
                    <td><?=$a['pilihan_prodi']?></td> 
                    <?php 
                    $uname = mysqli_real_escape_string($kon, $a['username']);
                    $total=mysqli_query($kon,"SELECT SUM(sks_asal) AS total_sks FROM tb_rpl WHERE username='$uname'");
                    $t = mysqli_fetch_array($total); ?>
                    <td><?=$t['total_sks']?></td>     
                    <td>
                        <a title="edit data" href='88_edit_asesmen.php?username=<?=$a["username"]?>' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>
                        <a title="cetak excel" href='88_cetak_asesmen.php?username=<?=$a["username"]?>' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a title="print biodata" href='88_cetak_kartu_ujian.php?username=<?=$a["username"]?>' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                        <a href='88_cetak_excel.php?username=<?=$a["username"]?>' class='btn btn-primary btn-xs' target='_blank'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr> 
                <?php
                }
                ?>
                </tbody>
                <script type="text/javascript">
                    $(document).ready( function () {
                    $('#daftar').DataTable();
                        } );
                </script>
            </table>   
        </div>
    </section>

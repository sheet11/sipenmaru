<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data prestasi.xls");
	?>
<?php
$i = 1;
include "09_daftar_prestasi.php";
foreach ($data as $username => $prestasi_list) {
    echo "<h3>Username: $username</h3>";
    echo "<ul>";
    foreach ($prestasi_list as $prestasi) {

?>
    <table>
        <tr>
            <th>Nama Prestasi</th>
            <th>keterangan juara</th>
            <th>Tingkat Kerjuaraan</th>
            <th>Tanggal Prestasi</th>
            <th>Tanggal Entri</th>
            <th>Bukti</th>
        </tr>
        <tr>
            <td><?= "{$prestasi['nama_prestasi']}" ?></td>
            <td><?= "{$prestasi['keterangan_juara']}" ?></td>
            <td><?= "{$prestasi['tingkat_kejuaraan']}" ?></td>
            <td><?= "{$prestasi['tanggal_prestasi']}" ?></td>
            <td><?= "{$prestasi['tanggal_entri_prestasi']}" ?></td>
            <td><?= "{$prestasi['bukti']}" ?></td>
            
        </tr>
    </table>
<?php     
        
    }
    echo "</ul>";
} ?>
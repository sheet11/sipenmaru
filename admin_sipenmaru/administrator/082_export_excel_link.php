<?php
// filepath: c:\xampp\htdocs\sipenmaru\admin_sipenmaru\administrator\082_export_excel_link.php
include "../config/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=daftar_link_calon_mahasiswa.xls");
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Link</th>
    </tr>
    <?php
    $query = mysqli_query($kon, "SELECT username, nama_lengkap, pilihan_prodi, link FROM tb_formulir5 WHERE status='Sudah Membayar' ORDER BY username ASC");
    while ($a = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$a['username']."</td>";
        echo "<td>".$a['nama_lengkap']."</td>";
        echo "<td>".$a['pilihan_prodi']."</td>";
        // Kolom link
        if (!empty($a['link'])) {
            echo "<td><a href='".$a['link']."'>".$a['link']."</a></td>";
        } else {
            echo "<td>-</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
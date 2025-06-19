<?php
// filepath: c:\xampp\htdocs\sipenmaru\admin_sipenmaru\administrator\081_export_excel_data.php
include "../config/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=daftar_calon_mahasiswa_perprodi.xls");

$where = "WHERE status='Sudah Membayar'";
if (!empty($_GET['filter_prodi'])) {
    $filter = mysqli_real_escape_string($kon, $_GET['filter_prodi']);
    $where .= " AND pilihan_prodi='$filter'";
}
if (!empty($_GET['filter_prodi2'])) {
    $filter2 = mysqli_real_escape_string($kon, $_GET['filter_prodi2']);
    $where .= " AND pilihan_prodi2='$filter2'";
}
$query = mysqli_query($kon, "SELECT * FROM tb_formulir4 $where ORDER BY username ASC");
?>
<table border="1">
    <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Prodi 1</th>
        <th>Prodi 2</th>
        <th>No HP</th>
        <th>Tgl Daftar</th>
        <th>Tgl Login</th>
        <th>Tgl Ujian</th>
        <th>Tempat Ujian</th>
        <th>Ruang Ujian</th>
        <th>Sesi Ujian</th>
        <th>Status</th>
    </tr>
    <?php
    $i = 1;
    while($a = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $a['username']; ?></td>
        <td><?php echo $a['password']; ?></td>
        <td><?php echo $a['nama_lengkap']; ?></td>
        <td><?php echo $a['pilihan_prodi']; ?></td>
        <td><?php echo $a['pilihan_prodi2']; ?></td>
        <td><?php echo $a['no_hp']; ?></td>
        <td><?php echo $a['tanggal_daftar']; ?></td>
        <td><?php echo $a['tanggal_login']; ?></td>
        <td><?php echo $a['tanggal_ujian']; ?></td>
        <td><?php echo $a['tempat_ujian']; ?></td>
        <td><?php echo $a['ruang_ujian']; ?></td>
        <td><?php echo $a['sesi_ujian']; ?></td>
        <td><?php echo $a['status']; ?></td>
    </tr>
    <?php $i++; } ?>
</table>
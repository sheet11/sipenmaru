<?php
include "01_nav.php";
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<aside class="right-side">
<div class="container-fluid" style="margin:10px;">

<!-- Filter Prodi 1 -->
<form method="get" action="">
    <div class="form-group" style="max-width:300px; display:inline-block; margin-right:10px;">
        <label for="filter_prodi">Filter Prodi 1:</label>
        <select name="filter_prodi" id="filter_prodi" class="form-control" onchange="this.form.submit()">
            <option value="">-- Semua Prodi --</option>
            <?php
            $prodi_q = mysqli_query($kon, "SELECT DISTINCT pilihan_prodi FROM tb_formulir5 WHERE status='Sudah Membayar' ORDER BY pilihan_prodi ASC");
            while($p = mysqli_fetch_assoc($prodi_q)) {
                $selected = (isset($_GET['filter_prodi']) && $_GET['filter_prodi'] == $p['pilihan_prodi']) ? 'selected' : '';
                echo "<option value=\"{$p['pilihan_prodi']}\" $selected>{$p['pilihan_prodi']}</option>";
            }
            ?>
        </select>
    </div>
    <a class="btn btn-success" 
   href="081_export_excel_data.php?filter_prodi=<?php echo isset($_GET['filter_prodi']) ? urlencode($_GET['filter_prodi']) : ''; ?>" 
   target="_blank">
   Export Excel
</a>
</form>

    <table id="datatable" class="display table table-bordered" style="width:100%">
        <thead>
            <tr class="info">
                <th>No.</th>
                <th>ID</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi 1</th>
                <th>No HP</th>
                <th>Tgl Daftar</th>
                <th>Tgl Login</th>
                <th>Tgl Ujian</th>
                <th>Tempat Ujian</th>
                <th>Ruang Ujian</th>
                <th>Sesi Ujian</th>
                <th>Status</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $where = "WHERE status='Sudah Membayar'";
        if (!empty($_GET['filter_prodi'])) {
            $filter = mysqli_real_escape_string($kon, $_GET['filter_prodi']);
            $where .= " AND pilihan_prodi='$filter'";
        }
        $query = mysqli_query($kon, "SELECT * FROM tb_formulir4 $where ORDER BY username ASC");
        $i = 1;
        while($a = mysqli_fetch_array($query)) {
        ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $a['username']; ?></td>
    <td><?php echo $a['password']; ?></td>
    <td><?php echo $a['nama_lengkap']; ?></td>
    <td><?php echo $a['pilihan_prodi']; ?></td>
    <td><?php echo $a['no_hp']; ?></td>
    <td><?php echo $a['tanggal_daftar']; ?></td>
    <td><?php echo $a['tanggal_login']; ?></td>
    <td><?php echo $a['tanggal_ujian']; ?></td>
    <td><?php echo $a['tempat_ujian']; ?></td>
    <td><?php echo $a['ruang_ujian']; ?></td>
    <td><?php echo $a['sesi_ujian']; ?></td>
    <td><?php echo $a['status']; ?></td>
    <td>
        <a href='081_cetak_kartu_ujian.php?username=<?php echo $a['username']; ?>' class='btn btn-primary btn-xs' target='_blank'>
            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
        </a>
        <a href='081_cetak_calon_mahasiswa.php?username=<?php echo $a['username']; ?>&halaman=<?php echo $_GET['halaman']; ?>' class='btn btn-success btn-xs'>
            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
        </a>
        <a href='081_cetak_portopolio.php?username=<?php echo $a['username']; ?>&halaman=<?php echo $_GET['halaman']; ?>' class='btn btn-info btn-xs'>
            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
        </a>
        <a href='081_edit_calon_mahasiswa.php?username=<?php echo $a['username']; ?>&halaman=<?php echo $_GET['halaman']; ?>' class='btn btn-success btn-xs'>
            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
        </a>
        <a href='081_delete_calon_mahasiswa.php?username=<?php echo $a['username']; ?>&halaman=<?php echo $_GET['halaman']; ?>' onclick="return confirm('Anda yakin akan menghapus <?php echo $a['nama_lengkap']; ?> ?')" class='btn btn-warning btn-xs'>
            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
        </a>
        <a href='081_proses_kembalikan.php?username=<?php echo $a['username']; ?>&halaman=<?php echo $_GET['halaman']; ?>' onclick="return confirm('Anda yakin akan mengembalikan data <?php echo $a['nama_lengkap']; ?> ?')" class='btn btn-danger btn-xs'>
            <span class='glyphicon glyphicon-off' aria-hidden='true'></span>
        </a>
    </td>
    </tr>
<?php
$i++;
}
?>
        </tbody>
    </table>
</div>
</aside>
<script>
$(document).ready(function() {
    $('#datatable').DataTable({
        "pageLength": 25,
        "lengthMenu": [10, 25, 50, 100, 200],
        "order": [[ 1, "asc" ]]
    });
});
</script>

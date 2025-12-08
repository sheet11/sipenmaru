<?php
include "01_nav.php";
error_reporting(0);
include "../config/koneksi.php";
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Selamat Datang</h2>
		<h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<div>
			<hr>
				<a class="btn btn-success btn-sm" href="04_input_prestasi.php"><i class="fa fa-plus"></i> Tambah Prestasi</a>
				<hr>
			<?php
$qt = mysqli_query($kon, "
    SELECT * FROM tb_prestasi 
    WHERE username='$_SESSION[username]' 
    AND (jenis_prestasi='Akademik' OR jenis_prestasi='Non Akademik')
    ORDER BY tingkat ASC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center; color:black;">Prestasi Akademik dan Non Akademik</h2>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <th>No.</th>
        <th>Nama Prestasi</th>
        <th>Tingkat</th>
        <th>Bukti</th>
        <th>Tanggal Sertifikat</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </thead>
    <?php
    $no = 1;
    while ($q = mysqli_fetch_array($qt)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $q['nama']; ?></td>
        <td>
            <?php
            $tingkatText = [
                1 => "Internasional",
                2 => "Nasional",
                3 => "Regional",
                4 => "Provinsi",
                5 => "Kabupaten/Kota",
                6 => "Sekolah"
            ];
            echo $tingkatText[$q['tingkat']];
            ?>
        </td>
        <td><a href="prestasi/<?= $q['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $q['bukti_n']; ?>" width="200"></a></td>
        <td><?= $q['tgl']; ?></td>
        <td><?= $q['ket']; ?></td>
        <td>
            <a href="04_delete_prestasi.php?id=<?= $q['id']; ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>

				<?php
$qt = mysqli_query($kon, "
    SELECT * FROM tb_prestasi 
    WHERE username='$_SESSION[username]' 
    AND jenis_prestasi='Tahfiz'
    AND juz IS NOT NULL AND juz <> ''
    ORDER BY tingkat ASC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center; color:black;">Prestasi Tahfiz</h2>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <th>No.</th>
        <th>Tingkat</th>
        <th>Bukti</th>
        <th>Tanggal Sertifikat</th>
        <th>Juz</th>
        <th>Aksi</th>
    </thead>

    <?php
    $no = 1;
    while ($q = mysqli_fetch_array($qt)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $tingkatText[$q['tingkat']]; ?></td>
        <td><a href="prestasi/<?= $q['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $q['bukti_n']; ?>" width="200"></a></td>
        <td><?= $q['tgl']; ?></td>
        <td><?= $q['juz']; ?></td>
        <td>
            <a href="04_delete_prestasi.php?id=<?= $q['id']; ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>

				<?php
$qt = mysqli_query($kon, "
    SELECT * FROM tb_prestasi 
    WHERE username='$_SESSION[username]' 
    AND jenis_prestasi='Paskibraka'
    ORDER BY tingkat ASC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center; color:black;">Paskibraka</h2>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <th>No.</th>
        <th>Tingkat</th>
        <th>Bukti</th>
        <th>Tanggal Sertifikat</th>
        <th>Aksi</th>
    </thead>

    <?php
    $no = 1;
    while ($q = mysqli_fetch_array($qt)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $tingkatText[$q['tingkat']]; ?></td>
        <td><a href="prestasi/<?= $q['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $q['bukti_n']; ?>" width="200"></a></td>
        <td><?= $q['tgl']; ?></td>
        <td>
            <a href="04_delete_prestasi.php?id=<?= $q['id']; ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php
include "01_nav.php";
error_reporting(0);
include "../config/koneksi.php";

$tingkatText = [
    1 => "Internasional",
    2 => "Nasional",
    3 => "Regional",
    4 => "Provinsi",
    5 => "Kabupaten/Kota",
    6 => "Kecamatan",
    7 => "Sekolah"
];
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
  WHERE username = '$_SESSION[username]'
  AND (
        jenis_prestasi = 'Prestasi Akademik'
        OR jenis_prestasi = 'Prestasi Non Akademik'
      )
  ORDER BY tgl DESC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center;">Prestasi Akademik & Non Akademik</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tingkat</th>
      <th>Tanggal</th>
      <th>Bukti</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= htmlspecialchars($r['nama']); ?></td>
    <td><?= $tingkatText[$r['tingkat']] ?? '-'; ?></td>
    <td><?= $r['tgl']; ?></td>
    <td><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
    <td><?= htmlspecialchars($r['ket']); ?></td>
    <td>
      <a href="04_delete_prestasi.php?id=<?= $r['id']; ?>" 
         class="btn btn-danger btn-sm"
         onclick="return confirm('Apa Anda Yakin?')">Hapus</a>
    </td>
  </tr>
  <?php } ?>
</table>
<?php } ?>

<?php
$qt = mysqli_query($kon, "
  SELECT * FROM tb_prestasi 
  WHERE username='$_SESSION[username]' 
  AND jenis_prestasi = 'Prestasi Akademik (Juara Kelas)'
  ORDER BY tgl DESC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center;">Prestasi Juara Kelas</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tingkat</th>
      <th>Tanggal</th>
      <th>Bukti</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= htmlspecialchars($r['nama'] ?? 'Juara Kelas / Sekolah'); ?></td>
    <td><?= $tingkatText[$r['tingkat']] ?? 'Sekolah'; ?></td>
    <td><?= $r['tgl']; ?></td>
    <td><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
    <td><?= htmlspecialchars($r['ket']); ?></td>
    <td>
      <a href="04_delete_prestasi.php?id=<?= $r['id']; ?>" 
         class="btn btn-danger btn-sm"
         onclick="return confirm('Apa Anda Yakin?')">Hapus</a>
    </td>
  </tr>
  <?php } ?>

</table>
<?php } ?>

<?php
// Tahfiz
$qt = mysqli_query($kon, "
  SELECT * FROM tb_prestasi
  WHERE username='$_SESSION[username]' AND jenis_prestasi='Tahfiz' AND juz IS NOT NULL AND juz<>'' ORDER BY tgl DESC
");
if (mysqli_num_rows($qt)>0) {
?>
<h2 style="text-align:center;">Prestasi Tahfiz</h2>
<table class="table table-bordered">
  <thead>
  <tr>
    <th>No</th>
    <th>Tingkat</th>
    <th>Tanggal</th>
    <th>Bukti</th>
    <th>Juz</th>
    <th>Aksi</th>
  </tr>
</thead>
<?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $tingkatText[$r['tingkat']] ?? '-'; ?></td>
  <td><?= $r['tgl']; ?></td>
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td><?= htmlspecialchars($r['juz']); ?></td>
  <td><a href="04_delete_prestasi.php?id=<?= $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apa Anda Yakin?')">Hapus</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>

<?php
// Paskibraka
$qt = mysqli_query($kon, "SELECT * FROM tb_prestasi WHERE username='$_SESSION[username]' AND jenis_prestasi='Paskibraka' ORDER BY tgl DESC");
if (mysqli_num_rows($qt)>0) {
?>
<h2 style="text-align:center;">Paskibraka</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Tingkat</th>
      <th>Tanggal</th>
      <th>Bukti</th>
      <th>Aksi</th>
    </tr>
  </thead>
<?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $tingkatText[$r['tingkat']] ?? '-'; ?></td>
  <td><?= $r['tgl']; ?></td>
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td><a href="04_delete_prestasi.php?id=<?= $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apa Anda Yakin?')">Hapus</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>

<?php
// Kemampuan Berbahasa Asing
$qt = mysqli_query($kon, "SELECT * FROM tb_prestasi WHERE username='$_SESSION[username]' AND jenis_prestasi='Kemampuan Berbahasa Asing' ORDER BY tgl DESC");
if (mysqli_num_rows($qt)>0) {
?>
<h2 style="text-align:center;">Kemampuan Bahasa Asing</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Bahasa</th>
      <th>Level/Nilai</th>
      <th>Tanggal</th>
      <th>Bukti</th>
      <th>Aksi</th>
    </tr>
  </thead>
<?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= htmlspecialchars($r['bahasa']); ?></td>
  <td><?= htmlspecialchars($r['ket']); ?></td>
  <td><?= $r['tgl']; ?></td>
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td><a href="04_delete_prestasi.php?id=<?= $r['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apa Anda Yakin?')">Hapus</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>

    </div>
  </div>
</div>



<div id="page-wrapper">
  <div id="page-inner">
    <h2>Selamat Datang</h2>   
      <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
    <div>
      <hr>
      <div class="table-responsive">

<?php
  include "session.php";
?>

<?php
  include"../config/koneksi.php";
  include("bar128.php");
  include("library.php");
  include("fucnt_tgl.php");
  
    

?>
        
        <?php
$qt = mysqli_query($kon, "
  SELECT * FROM tb_prestasi
  WHERE username = '$_GET[username]'
  AND (
        jenis_prestasi = 'Prestasi Akademik'
        OR jenis_prestasi = 'Prestasi Non Akademik'
      )
  ORDER BY tgl DESC
");

if (mysqli_num_rows($qt) > 0) {
?>
<h2 style="text-align:center; color:black;">Prestasi Akademik & Non Akademik</h2>
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
    <td><img src="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
    <td><?= htmlspecialchars($r['ket']); ?></td>
    <td>
      <button onclick="konfirmasiHapus(<?= $r['id']; ?>, '<?= htmlspecialchars($r['nama'], ENT_QUOTES); ?>')" 
              class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i> Hapus
      </button>
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
<h2 style="text-align:center; color:black;">Prestasi Juara Kelas</h2>

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
    <td><img src="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
    <td><?= htmlspecialchars($r['ket']); ?></td>
    <td>
      <button onclick="konfirmasiHapus(<?= $r['id']; ?>, 'Juara Kelas')" 
              class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i> Hapus
      </button>
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
<h2 style="text-align:center; color:black;">Prestasi Tahfiz</h2>
<table class="table table-bordered">
  <thead>
  <tr>
    <th>No</th>
    <!-- <th>Tingkat</th> -->
    <th>Tanggal</th>
    <th>Bukti</th>
    <th>Juz</th>
    <th>Aksi</th>
  </tr>
</thead>
<?php $no=1; while($r=mysqli_fetch_assoc($qt)){ ?>
<tr>
  <td><?= $no++; ?></td>
  <!-- <td><?= $tingkatText[$r['tingkat']] ?? '-'; ?></td> -->
  <td><?= $r['tgl']; ?></td>
  <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td><?= htmlspecialchars($r['juz']); ?></td>
  <td>
    <button onclick="konfirmasiHapus(<?= $r['id']; ?>, 'Tahfiz <?= htmlspecialchars($r['juz']); ?>')" 
            class="btn btn-danger btn-sm">
      <i class="fa fa-trash"></i> Hapus
    </button>
  </td>
</tr>
<?php } ?>
</table>
<?php } ?>

<?php
// Paskibraka
$qt = mysqli_query($kon, "SELECT * FROM tb_prestasi WHERE username='$_SESSION[username]' AND jenis_prestasi='Paskibraka' ORDER BY tgl DESC");
if (mysqli_num_rows($qt)>0) {
?>
<h2 style="text-align:center; color:black;">Paskibraka</h2>
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
  <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td>
    <button onclick="konfirmasiHapus(<?= $r['id']; ?>, 'Paskibraka')" 
            class="btn btn-danger btn-sm">
      <i class="fa fa-trash"></i> Hapus
    </button>
  </td>
</tr>
<?php } ?>
</table>
<?php } ?>

<?php
// Kemampuan Berbahasa Asing
$qt = mysqli_query($kon, "SELECT * FROM tb_prestasi WHERE username='$_SESSION[username]' AND jenis_prestasi='Kemampuan Berbahasa Asing' ORDER BY tgl DESC");
if (mysqli_num_rows($qt)>0) {
?>
<h2 style="text-align:center; color:black;">Kemampuan Bahasa Asing</h2>
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
  <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
  <td>
    <button onclick="konfirmasiHapus(<?= $r['id']; ?>, 'Bahasa <?= htmlspecialchars($r['bahasa']); ?>')" 
            class="btn btn-danger btn-sm">
      <i class="fa fa-trash"></i> Hapus
    </button>
  </td>
</tr>
<?php } ?>
</table>
<?php } ?>

      </div>
    </div>
  </div>
</div>
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

<!-- TAMBAHKAN SWEETALERT2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- NOTIFIKASI SETELAH HAPUS -->
<?php if (isset($_GET['status'])): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    <?php if ($_GET['status'] == 'success'): ?>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Dihapus!',
            text: 'Data prestasi berhasil dihapus dari sistem',
            confirmButtonColor: '#28a745',
            confirmButtonText: '<i class="fa fa-check"></i> OK',
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                confirmButton: 'btn btn-success'
            },
            buttonsStyling: false
        }).then(() => {
            // Hapus parameter status dari URL
            window.history.replaceState({}, document.title, '04_upload_prestasi.php');
        });
    <?php elseif ($_GET['status'] == 'error'): ?>
        Swal.fire({
            icon: 'error',
            title: 'Gagal Menghapus!',
            text: 'Data prestasi gagal dihapus. Silakan coba lagi.',
            confirmButtonColor: '#d33',
            confirmButtonText: '<i class="fa fa-times"></i> OK',
            customClass: {
                confirmButton: 'btn btn-danger'
            },
            buttonsStyling: false
        }).then(() => {
            // Hapus parameter status dari URL
            window.history.replaceState({}, document.title, '04_upload_prestasi.php');
        });
    <?php endif; ?>
});
</script>
<?php endif; ?>

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
    <td><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
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
    <td><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></td>
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
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
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
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
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
  <td><a href="prestasi/<?= $r['bukti_n']; ?>" target="_blank"><img src="prestasi/<?= $r['bukti_n']; ?>" width="130"></a></td>
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

<!-- SCRIPT SWEETALERT2 UNTUK KONFIRMASI HAPUS -->
<script>
function konfirmasiHapus(id, nama) {
    Swal.fire({
        title: 'Hapus Data Prestasi?',
        html: `Apakah Anda yakin ingin menghapus:<br><strong>${nama}</strong>`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: '<i class="fa fa-trash"></i> Ya, Hapus!',
        cancelButtonText: '<i class="fa fa-times"></i> Batal',
        reverseButtons: true,
        focusCancel: true,
        customClass: {
            confirmButton: 'btn btn-danger btn-lg',
            cancelButton: 'btn btn-secondary btn-lg'
        },
        buttonsStyling: false,
        allowOutsideClick: false,
        allowEscapeKey: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Tampilkan loading saat proses hapus
            Swal.fire({
                title: 'Menghapus...',
                html: 'Mohon tunggu sebentar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            
            // Redirect ke halaman delete
            window.location.href = '04_delete_prestasi.php?id=' + id;
        }
    });
}
</script>

<style>
/* Styling untuk SweetAlert2 agar lebih menarik */
.swal2-popup {
    font-family: 'Arial', sans-serif;
    border-radius: 15px !important;
}

.swal2-title {
    font-size: 24px !important;
    font-weight: bold !important;
    color: #333 !important;
}

.swal2-html-container {
    font-size: 16px !important;
    color: #666 !important;
}

.swal2-icon.swal2-warning {
    border-color: #f39c12 !important;
    color: #f39c12 !important;
}

.btn-danger, .btn-secondary {
    padding: 10px 20px !important;
    margin: 5px !important;
    border-radius: 5px !important;
    font-size: 14px !important;
}
</style>

</body>
</html>
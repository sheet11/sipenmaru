<?php 
include "session.php";
include "../config/koneksi.php";

$id = $_GET['id'];

// Ambil nama file bukti sebelum dihapus (opsional: untuk hapus file fisik)
$query_get = mysqli_query($kon, "SELECT bukti_n FROM tb_prestasi WHERE id='$id' AND username='$_SESSION[username]'");
$data = mysqli_fetch_assoc($query_get);

// Proses hapus data dari database
$query_delete = mysqli_query($kon, "DELETE FROM tb_prestasi WHERE id='$id' AND username='$_SESSION[username]'");

if ($query_delete && mysqli_affected_rows($kon) > 0) {
    // OPSIONAL: Hapus file fisik dari folder prestasi
    if ($data && file_exists("prestasi/" . $data['bukti_n'])) {
        unlink("prestasi/" . $data['bukti_n']);
    }
    
    // Redirect dengan status sukses
    header("Location: 04_upload_prestasi.php?status=success");
    exit;
} else {
    // Redirect dengan status gagal
    header("Location: 04_upload_prestasi.php?status=error");
    exit;
}
?>
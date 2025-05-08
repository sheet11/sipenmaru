<?php
include "../config/koneksi.php";

if (isset($_GET['id_tanggal_ujian'])) {
    $id_tanggal_ujian = intval($_GET['id_tanggal_ujian']);

    // Check if the record exists
    $query = mysqli_query($kon, "SELECT * FROM tb_tanggal_ujian WHERE id_tanggal_ujian = $id_tanggal_ujian");
    if (mysqli_num_rows($query) > 0) {
        // Delete the record
        $delete = mysqli_query($kon, "DELETE FROM tb_tanggal_ujian WHERE id_tanggal_ujian = $id_tanggal_ujian");
        if ($delete) {
            echo "<script>alert('Data berhasil dihapus!'); window.location='tanggal_ujian.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data!'); window.location='tanggal_ujian.php';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location='tanggal_ujian.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location='tanggal_ujian.php';</script>";
}
?>
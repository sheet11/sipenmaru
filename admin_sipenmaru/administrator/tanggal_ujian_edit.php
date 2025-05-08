<?php
include "01_nav.php";
include "../config/koneksi.php";

if (isset($_GET['id_tanggal_ujian'])) {
    $id_tanggal_ujian = intval($_GET['id_tanggal_ujian']);
    $query = mysqli_query($kon, "SELECT * FROM tb_tanggal_ujian WHERE id_tanggal_ujian = $id_tanggal_ujian");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location='tanggal_ujian.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location='tanggal_ujian.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal_ujian = mysqli_real_escape_string($kon, $_POST['tanggal_ujian']);

    $update = mysqli_query($kon, "UPDATE tb_tanggal_ujian SET tanggal_ujian = '$tanggal_ujian' WHERE id_tanggal_ujian = $id_tanggal_ujian");

    if ($update) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='tanggal_ujian.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>

<div class="container">
    <h2>Edit Tanggal Ujian</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="tanggal_ujian">Tanggal Ujian</label>
            <input type="date" class="form-control" id="tanggal_ujian" name="tanggal_ujian" value="<?php echo htmlspecialchars($data['tanggal_ujian']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="tanggal_ujian.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
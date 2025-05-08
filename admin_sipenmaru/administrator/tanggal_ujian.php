<?php 
include "01_nav.php";
include "../config/koneksi.php";

if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTanggalUjianModal">
                Tambah Tanggal Ujian
            </button>
        </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tanggal_ujian'])) {
        $tanggal_ujian = mysqli_real_escape_string($kon, $_POST['tanggal_ujian']);
        
        $query = "INSERT INTO tb_tanggal_ujian (tanggal_ujian) VALUES ('$tanggal_ujian')";
        if (mysqli_query($kon, $query)) {
            echo "<div class='alert alert-success'>Tanggal ujian berhasil disimpan.</div>";
        } else {
            echo "<div class='alert alert-danger'>Terjadi kesalahan: " . mysqli_error($kon) . "</div>";
        }
    }
    ?>
    <div class="modal fade" id="addTanggalUjianModal" tabindex="-1" role="dialog" aria-labelledby="addTanggalUjianModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTanggalUjianModalLabel">Tambah Tanggal Ujian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tanggalUjian">Tanggal Ujian</label>
                            <input type="date" class="form-control" id="tanggalUjian" name="tanggal_ujian" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<table style="width:100%;" class="table table-bordered">	
    <tr class="info">
        <th width="10">No.</th>
        <th>Tanggal Ujian</th>
        <th width="150">Aksi</th>
    </tr>
    <?php
    $query = mysqli_query($kon, "SELECT * FROM tb_tanggal_ujian ORDER BY id_tanggal_ujian ASC");
    if (mysqli_num_rows($query) == 0) {
        echo "<tr><td colspan='3'>Data tidak ditemukan</td></tr>";
    } else {
        $i = 1;
        while ($a = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo htmlspecialchars($a['tanggal_ujian']); ?></td>
                <td>
                    <a href="tanggal_ujian_edit.php?id_tanggal_ujian=<?php echo $a['id_tanggal_ujian']; ?>">
                        <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                    </a>
                    <a href="tanggal_ujian_delete.php?id_tanggal_ujian=<?php echo $a['id_tanggal_ujian']; ?>" onclick="return confirm('Anda yakin akan menghapus <?php echo htmlspecialchars($a['tanggal_ujian']); ?> ?')">
                        <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                    </a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>

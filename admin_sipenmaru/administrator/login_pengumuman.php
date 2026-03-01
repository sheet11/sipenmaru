<?php
// Include database connection
include_once '../config/koneksi.php';
include_once '01_nav.php'; // Include navigation or header file

// Fetch data from the 'periode' table
$query = "SELECT * FROM periode where status = 'Pengumuman' ORDER BY id_periode DESC";
$result = mysqli_query($kon, $query);
?>
<aside class="right-side">
    <section class="content-header">
        <h1>Data Periode</h1> <br>
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPeriodeModal">
            Tambah Data
        </button>
        <span> | </span>
        <a href="../../login_spmb_prestasi/alter_login.php" type="button" class="btn btn-primary">
            Login Pengumuman (Link uji coba)
        </a>
        <br>
        <br>
        <!-- Modal for adding data -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['form_type'])) {
                if ($_POST['form_type'] == 'add_periode') {
                    // Handle adding new periode
                    $nama_periode = mysqli_real_escape_string($kon, $_POST['nama_periode']);

                    $query = "INSERT INTO periode (nama_periode, status) VALUES ('$nama_periode', 'Pengumuman')";
                    if (mysqli_query($kon, $query)) {
                        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='login_pengumuman.php';</script>";
                    } else {
                        echo "<script>alert('Gagal menambahkan data!'); window.location.href='login_pengumuman.php';</script>";
                    }
                } elseif ($_POST['form_type'] == 'edit_periode') {
                    // Handle editing periode
                    $id_periode = mysqli_real_escape_string($kon, $_POST['id']);
                    $nama_periode = mysqli_real_escape_string($kon, $_POST['nama_periode']);

                    $query = "UPDATE periode SET nama_periode = '$nama_periode' WHERE id_periode = '$id_periode'";
                    if (mysqli_query($kon, $query)) {
                        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='login_pengumuman.php';</script>";
                    } else {
                        echo "<script>alert('Gagal memperbarui data!'); window.location.href='login_pengumuman.php';</script>";
                    }
                }
            }
        }
        ?>
        <div class="modal fade" id="addPeriodeModal" tabindex="-1" role="dialog" aria-labelledby="addPeriodeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="POST">
                        <input type="hidden" name="form_type" value="add_periode">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPeriodeModalLabel">Tambah Data Jalur Kelulusan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_periode">Nama Jalur</label>
                                <input type="text" class="form-control" id="nama_periode" name="nama_periode" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_buka">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggal_buka" name="tanggal_buka" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_tutup">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggal_tutup" name="tanggal_tutup" required>
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
        <table cellspacing="0" style="width:100%;" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Periode</th>
                    <th>Status Periode</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?php echo $row['nama_periode']; ?></td>
                            <td><?php echo $row['status_periode']; ?></td>
                            <td>

                                <!-- Modal for editing status periode -->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editStatusModal<?php echo $row['id_periode']; ?>">Edit Status</button>

                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['status_periode'])) {
                                    $id_periode = mysqli_real_escape_string($kon, $_POST['id_periode']);
                                    $status_periode = mysqli_real_escape_string($kon, $_POST['status_periode']);

                                    // Update the status in the 'periode' table
                                    $query = "UPDATE periode SET status_periode = '$status_periode' WHERE id_periode = '$id_periode'";
                                    if (mysqli_query($kon, $query)) {
                                        echo "<script>alert('Status berhasil diperbarui!'); window.location.href='login_pengumuman.php';</script>";
                                    } else {
                                        echo "<script>alert('Gagal memperbarui status!'); window.location.href='login_pengumuman.php';</script>";
                                    }
                                }
                                ?>
                                <div class="modal fade" id="editStatusModal<?php echo $row['id_periode']; ?>" tabindex="-1" role="dialog" aria-labelledby="editStatusModalLabel<?php echo $row['id_periode']; ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="" method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editStatusModalLabel<?php echo $row['id_periode']; ?>">Edit Status Periode</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_periode" value="<?php echo $row['id_periode']; ?>">
                                                    <div class="form-group">
                                                        <label for="status_periode<?php echo $row['id_periode']; ?>">Status Periode</label>
                                                        <select class="form-control" id="status_periode<?php echo $row['id_periode']; ?>" name="status_periode" required>
                                                            <option value="Buka" <?php echo ($row['status_periode'] == 'Buka') ? 'selected' : ''; ?>>Buka</option>
                                                            <option value="Tutup" <?php echo ($row['status_periode'] == 'Tutup') ? 'selected' : ''; ?>>Tutup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm"><a href="login_pengumuman_delete.php?id_periode=<?php echo $row['id_periode']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a></button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Tidak ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
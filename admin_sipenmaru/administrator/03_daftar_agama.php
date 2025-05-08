<?php
include "01_nav.php";
error_reporting(0);
?>

<aside class="right-side">
	<section class="content-header">
		<div class="container-fluid" style="margin:10px;">
			<h4><b>DAFTAR AGAMA</b></h4>
			<button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Data +</button>
			<br><br>

			<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<th width="10">No.</th>
						<th>Nama Agama</th>
						<th width="150">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = mysqli_query($kon, "SELECT * FROM tb_agama ORDER BY id_agama ASC");
					$i = 1;
					while ($row = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $row['nama_agama']; ?></td>
							<td>
								<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?php echo $row['id_agama']; ?>">Edit</button>
								<a href="03_delete_agama.php?id_agama=<?php echo $row['id_agama']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus <?php echo $row['nama_agama']; ?> ?')">Hapus</a>
							</td>
						</tr>

						<!-- Edit Modal -->
						<div class="modal fade" id="editModal<?php echo $row['id_agama']; ?>" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Edit Agama</h5>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<form method="post" action="">
										<div class="modal-body">
											<input type="hidden" name="id_agama" value="<?php echo $row['id_agama']; ?>">
											<div class="form-group">
												<label>Nama Agama</label>
												<input type="text" name="nama_agama" class="form-control" value="<?php echo $row['nama_agama']; ?>" required>
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" name="update<?php echo $row['id_agama']; ?>" class="btn btn-primary">Simpan</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<?php
						if (isset($_POST['update' . $row['id_agama']])) {
							$id_agama = $_POST['id_agama'];
							$nama_agama = mysqli_real_escape_string($kon, $_POST['nama_agama']);
							$query = "UPDATE tb_agama SET nama_agama='$nama_agama' WHERE id_agama='$id_agama'";
							if (mysqli_query($kon, $query)) {
								echo "<script>alert('Data berhasil diperbarui!'); window.location.href='03_daftar_agama.php';</script>";
							} else {
								echo "<script>alert('Data gagal diperbarui!');</script>";
							}
						}
						?>
					<?php
						$i++;
					}
					?>
				</tbody>
			</table>
		</div>
	</section>
</aside>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Agama</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form method="post" action="">
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Agama</label>
						<input type="text" name="nama_agama" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
if (isset($_POST['submit'])) {
	$nama_agama = mysqli_real_escape_string($kon, $_POST['nama_agama']);
	$query = "INSERT INTO tb_agama (nama_agama) VALUES ('$nama_agama')";
	if (mysqli_query($kon, $query)) {
		echo "<script>alert('Data berhasil disimpan!'); window.location.href='03_daftar_agama.php';</script>";
	} else {
		echo "<script>alert('Data gagal disimpan!');</script>";
	}
}
?>

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
			<form method="post" enctype="multipart/form-data" action="04_proses_input_prestasi.php">
				<div class="row">
					<div class="form-group col-md-6">
						<label>Nama Prestasi</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Kategori</label>

						<!-- 1 elemen form-control yang akan berubah -->
						<div id="containerInput" class="form-group col-md-6">
							<select class="form-control" id="inputKategori" onchange="cekLainnya()">
								<option value="">-- Pilih --</option>
								<option value="Buah">Buah</option>
								<option value="Sayur">Sayur</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
					</div>

					<script>
						function cekLainnya() {
							let elemen = document.getElementById("inputKategori");

							if (elemen.value === "Lainnya") {
								// Ganti select menjadi input text
								document.getElementById("containerInput").innerHTML =
									'<input type="text" class="form-control" id="inputKategori" placeholder="Tulis kategori bebas...">';
							}
						}
					</script>
				</div>
				<div class="form-group col-md-6">
					<label>Keterangan</label>
					<select class="form-control" name="ket" required>
						<option value="">Pilih Juara</option>
						<option value="Juara 1">Juara 1</option>
						<option value="Juara 2">Juara 2</option>
						<option value="Juara 3">Juara 3</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Tingkat Prestasi</label>
					<select class="form-control" name="tingkat" required>
						<option value="">Tingkat Prestasi</option>
						<option value="1">Internasional</option>
						<option value="2">Nasional</option>
						<option value="3">Regional</option>
						<option value="4">Provinsi</option>
						<option value="5">Kabupaten</option>
						<option value="6">Kecamatan</option>
						<option value="4">Sekolah</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Bukti Prestasi</label>
					<input type="file" name="bukti" class="form-control" accept="image/*" required>
					<small class="text-danger">Ukuran Gambar tidak boleh melebihi 500kb dan Format gambar ( .jpg /
						.png / .jpeg)</small>
				</div>
				<div class="form-group col-md-6">
					<label>Tanggal Sertifikat</label>
					<input type="date" name="tgl" class="form-control" required>
				</div>
				<div class="form-group col-md-6">
					<button class="btn btn-lg btn-success" name="simpan"><i class="fa fa-save"></i> Simpan</button>
				</div>
		</div>
		</form>
	</div>
</div>
</div>
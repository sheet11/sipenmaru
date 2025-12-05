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
				<div class="form-group col-md-6">
					<label>Nama Prestasi</label>

					<div id="containerPrestasi">
						<select class="form-control" id="prestasi" name="prestasi" onchange="ubahForm()">
							<option value="">-- Pilih --</option>
							<option value="Paskibraka">Paskibraka</option>
							<option value="Tahfiz">Tahfiz</option>
							<option value="Lainnya">Lainnya:</label>
						</select>
					</div>
				</div>

				<div class="form-group col-md-6" id="containerKeterangan">
					<label>Keterangan</label>
					<select class="form-control" name="ket" id="ketSelect">
						<option value="">Pilih Juara</option>
						<option value="Juara 1">Juara 1</option>
						<option value="Juara 2">Juara 2</option>
						<option value="Juara 3">Juara 3</option>
					</select>
				</div>

				<script>
					// Simpan HTML asli untuk bisa dikembalikan kapan saja
					const originalPrestasi = `
		<select class="form-control" id="prestasi" name="prestasi" onchange="ubahForm()">
			<option value="">-- Pilih --</option>
			<option value="Paskibraka">Paskibraka</option>
			<option value="Tahfiz">Tahfiz</option>
			<option value="Lainnya">Lainnya:</option>
		</select>
	`;

					const originalKet = `
		<label>Keterangan</label>
		<select class="form-control" name="ket" id="ketSelect">
			<option value="">Pilih Juara</option>
			<option value="Juara 1">Juara 1</option>
			<option value="Juara 2">Juara 2</option>
			<option value="Juara 3">Juara 3</option>
		</select>
	`;

					function ubahForm() {
						let prestasi = document.getElementById("prestasi").value;

						// 1️⃣ Kembalikan komponen ke kondisi awal setiap kali memilih
						document.getElementById("containerPrestasi").innerHTML = originalPrestasi;
						document.getElementById("containerKeterangan").innerHTML = originalKet;

						// Ambil ulang nilai prestasi karena select direfresh
						document.getElementById("prestasi").value = prestasi;
						document.getElementById("prestasi").onchange = ubahForm;

						// 2️⃣ Jika pilih Paskibraka → sembunyikan container keterangan
						if (prestasi === "Paskibraka") {
							document.getElementById("containerKeterangan").style.display = "none";
						} else {
							document.getElementById("containerKeterangan").style.display = "block";
						}

						// 3️⃣ Jika pilih Tahfiz → keterangan jadi input "Juz"
						if (prestasi === "Tahfiz") {
							document.getElementById("containerKeterangan").innerHTML = `
				<label>Juz</label>
				<input type="text" class="form-control" name="ket" placeholder="Masukkan jumlah Juz...">
				<small class="text-danger">Contoh: 1 Juz, 30 Juz</small>
			`;
						}

						// 4️⃣ Jika pilih Lainnya → select jadi textbox & keterangan bebas
						if (prestasi === "Lainnya") {
							document.getElementById("containerPrestasi").innerHTML = `
				<input type="text" class="form-control" name="prestasi" 
				placeholder="Tulis nama prestasi..." >
			`;

							document.getElementById("containerKeterangan").innerHTML = `
		<label>Keterangan</label>
		<select class="form-control" name="ket" id="ketSelect">
			<option value="">Pilih Juara</option>
			<option value="Juara 1">Juara 1</option>
			<option value="Juara 2">Juara 2</option>
			<option value="Juara 3">Juara 3</option>
		</select>
			`;
						}
					}

					function kembaliSelect() {
						document.getElementById("containerPrestasi").innerHTML = originalPrestasi;
					}
				</script>

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
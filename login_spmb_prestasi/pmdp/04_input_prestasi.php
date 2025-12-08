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
					<label>Jenis Prestasi</label>
					<div id="containerPrestasi">
						<select class="form-control" id="prestasi" name="prestasi" onchange="ubahForm()">
							<option value="">-- Pilih --</option>
							<option value="Non Akademik">Non Akademik</option>
							<option value="Akademik">Akademik</option>
							<option value="Paskibraka">Paskibraka</option>
							<option value="Tahfiz">Tahfiz</option>
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
				<!-- Nama Prestasi, default disembunyikan -->
				<div class="form-group col-md-6" id="namaPrestasiContainer" style="display:none;">
    				<label>Nama Prestasi</label>
   					<input type="text" class="form-control" name="nama" placeholder="Contoh: Lomba Matematika">
				</div>

				<script>
					// Simpan HTML asli untuk bisa dikembalikan kapan saja
					const originalPrestasi = `
		<select class="form-control" id="prestasi" name="prestasi" onchange="ubahForm()">
			<option value="">-- Pilih --</option>
			<option value="Akademik">Akademik</option>				
			<option value="Non Akademik">Non Akademik</option>
			<option value="Paskibraka">Paskibraka</option>
			<option value="Tahfiz">Tahfiz</option>
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

    				// Reset container
   					 document.getElementById("containerPrestasi").innerHTML = originalPrestasi;
   					 document.getElementById("containerKeterangan").innerHTML = originalKet;
    				 document.getElementById("prestasi").value = prestasi;
    				 document.getElementById("prestasi").onchange = ubahForm;

                    // Keterangan
   					if (prestasi === "Paskibraka") {
        				document.getElementById("containerKeterangan").style.display = "none";
    					}
					else {
        					document.getElementById("containerKeterangan").style.display = "block";
    				}

    				// Tahfiz → ubah keterangan jadi input Juz
    				if (prestasi === "Tahfiz") {
       					document.getElementById("containerKeterangan").innerHTML = `
            				<label>Juz</label>
           					<input type="text" class="form-control" name="ket" placeholder="Masukkan jumlah Juz...">
            				<small class="text-danger">Contoh: 1 Juz, 30 Juz</small>
							`;
						}

    				// Tampilkan nama prestasi hanya untuk Akademik & Non Akademik
    				if (prestasi === "Akademik" || prestasi === "Non Akademik") {
        				document.getElementById("namaPrestasiContainer").style.display = "block";
    					}
					else {
        				document.getElementById("namaPrestasiContainer").style.display = "none";
    				}
					}

						// 4️⃣ Jika pilih Lainnya → select jadi textbox & keterangan bebas
		// 	 			if (prestasi === "Lainnya") {
		// 					document.getElementById("containerPrestasi").innerHTML = `
		// 		<input type="text" class="form-control" name="prestasi" 
		// 	 	placeholder="Tulis nama prestasi..." >
		// 	 `;

		// 					document.getElementById("containerKeterangan").innerHTML = `
		// <label>Keterangan</label>
		// <select class="form-control" name="ket" id="ketSelect">
		// 	<option value="">Pilih Juara</option>
		// 	<option value="Juara 1">Juara 1</option>
		// 	<option value="Juara 2">Juara 2</option>
		// 	<option value="Juara 3">Juara 3</option>
		// </select>
		// 	`;
		// 				}
		// 			}

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
					<button onclick="location.reload();" class="btn btn-lg btn-primary" name="reset">Reset</button>
				</div>
		</div>
		</form>
	</div>
</div>
</div>
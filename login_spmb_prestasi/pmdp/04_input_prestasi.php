<?php 
	include"01_nav.php";
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
					<div class="form-group col-md-6">
						<label>Keterangan</label>
						<input type="text" name="ket" class="form-control" required placeholder="Juara 1, Juara 2 dst...">
					</div>
					<div class="form-group col-md-6">
						<label>Tingkat Prestasi</label>
						<select class="form-control" name="tingkat">
							<option>Tingkat Prestasi</option>
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
						<small class="text-danger">Ukuran Gambar tidak boleh melebihi 500kb dan Format gambar ( .jpg / .png / .jpeg)</small>
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
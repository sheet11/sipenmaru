<?php 
	include "01_nav.php";
	include "../assets/js/date.php";
	error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	$query=mysqli_query($kon,"select * from tb_formulir4 where id_formulir='$_GET[id_formulir]'");
	$a=mysqli_fetch_array($query);
?>
	
<div id="page-wrapper">
	<div id="page-inner">
		<div class="container-fluid" style="margin:30px;">
			<h2>Formulir</h2>
			<hr>
			<table class="table table-hover">
				<tr>
					<th width="30%">Field</th>
					<th width="2%">:</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>ID/Nomor Kartu Ujian</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['username']); ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['nama_lengkap']); ?></td>
				</tr>
				<tr>
					<td>Pilihan Prodi</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['pilihan_prodi']); ?></td>
				</tr>
				<tr>
					<td>Pilihan Prodi</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['pilihan_prodi2']); ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['alamat']); ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['jenis_kelamin']); ?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['agama']); ?></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['no_hp']); ?></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['tempat_lahir']); ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['tanggal_lahir']); ?></td>
				</tr>
				<tr>
					<td>Berat Badan</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['berat_badan']); ?></td>
				</tr>
				<tr>
					<td>Tinggi Badan</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['tinggi_badan']); ?></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['golongan_darah']); ?></td>
				</tr>
				<tr>
					<td>Nomor Induk Keluarga (NIK)</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['nik']); ?></td>
				</tr>
				<tr>
					<td>Nama Orang Tua</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['nama_orang_tua']); ?></td>
				</tr>
				<tr>
					<td>Pekerjaan Orang Tua</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['pekerjaan_orang_tua']); ?></td>
				</tr>
				<tr>
					<td>Penghasilan Orang Tua</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['penghasilan_orang_tua']); ?></td>
				</tr>
				<tr>
					<td>NO Kartu BPJS</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['kartu_bpjs']); ?></td>
				</tr>
				<tr>
					<td>Nama Sekolah</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['nama_sekolah']); ?></td>
				</tr>
				<tr>
					<td>Akreditasi Sekolah</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['akreditasi']); ?></td>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['asal_sekolah']); ?></td>
				</tr>
				<tr>
					<td>Keterangan Sekolah</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['keterangan_sekolah']); ?></td>
				</tr>
				<tr>
					<td>Daerah Asal</td>
					<td>:</td>
					<td><?php echo htmlspecialchars($a['daerah_asal']); ?></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td>:</td>
					<td>
						<a href="../assets/img/<?php echo htmlspecialchars($a['nama_foto']); ?>" class="fancy">
							<img src="../assets/img/<?php echo htmlspecialchars($a['nama_foto']); ?>" alt="Foto" width="150" height="175" />
						</a>
					</td>
				</tr>
			</table>
			<div class="mt-3">
				<a href="01_formulir.php" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</div>

<?php 
	include"01_nav.php";
	include "../assets/js/date.php";
	error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	$query=mysqli_query($kon,"select * from tb_formulir3 where id_formulir='$_GET[id_formulir]'");
	$a=mysqli_fetch_array($query);
?>
	
<div id="page-wrapper">
	<div id="page-inner">
	    <div class="container-fluid" style="margin:30px;">
			<form method="post" action="01_prosesedit_formulir.php" enctype="multipart/form-data">	
				<table width="100%" class="table table-hover">
					<input type="hidden" name="id_formulir" value="<?php echo "$a[id_formulir]"; ?>">
					<tr>
						<td colspan="3"><h2>Selamat Datang</h2>   
		    							<h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
										<hr></hr></td> 
					</tr>

					<tr>
						<td width="15%">ID/Nomor Kartu Ujian</td>
						<td width="2%">:</td>
						<td><input type="text" maxlength="20"  value="<?php echo $a['username']; ?>" disabled class="form-control"></td>
					</tr>

		    
				    <tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input type="text" value="<?php echo $a['nama_lengkap']; ?>" disabled class="form-control"></td>
					</tr>

					<tr>
						<td>Pilihan Prodi</td>
						<td>:</td>
						<td><select name='pilihan_prodi' class='form-control' >";
				        	<option value="<?php echo $a['pilihan_prodi']; ?>"><?php echo $a['pilihan_prodi']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_prodi ");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[nama_prodi]'>$row[nama_prodi]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat" class="form-control" required><?php echo $a['alamat']; ?></textarea></td>
					</tr>
				    
				    <tr>
				        <td>Jenis Kelamin</td>
				        <td>:</td>
				        <td>
				        	<select name='jenis_kelamin' class='form-control' required>";
				        	<option value="<?php echo $a['jenis_kelamin']; ?>"><?php echo $a['jenis_kelamin']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_jenis_kelamin ");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[nama_jenis_kelamin]'>$row[nama_jenis_kelamin]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select>
				        </td>
				    </tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><select name='agama' class='form-control' required>";
				        	<option value="<?php echo $a['agama']; ?>"><?php echo $a['agama']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_agama");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[nama_agama]'>$row[nama_agama]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>
		    
					<tr>
						<td>No Handphone</td>
						<td>:</td>
						<td><input type="number" name="no_hp"  value="<?php echo $a['no_hp']; ?>" class="form-control" required></td>
					</tr>

				    <tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input type="text" name="tempat_lahir"  value="<?php echo $a['tempat_lahir']; ?>" class="form-control" required></td>
					</tr>   

					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input type="date" name="tanggal_lahir" id="tgls" value="<?php echo $a['tanggal_lahir']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Berat Badan</td>
						<td>:</td>
						<td><input type="number" name="berat_badan" value="<?php echo $a['berat_badan']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Tinggi Badan</td>
						<td>:</td>
						<td><input type="number" name="tinggi_badan" value="<?php echo $a['tinggi_badan']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Golongan Darah</td>
						<td>:</td>
						<td><select name="golongan_darah" class="form-control" required>
							<option value="AB"<?php if($a['golongan_darah']=='AB'){echo "selected";} ?>>AB</option>
							<option value="A"<?php if($a['golongan_darah']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['golongan_darah']=='B'){echo "selected";} ?>>B</option>
							<option value="O"<?php if($a['golongan_darah']=='O'){echo "selected";} ?>>O</option>
						</select></td>
					</tr>
					
					<tr>
						<td>Nomor Induk Keluarga (NIK)</td>
						<td>:</td>
						<td><input type="number" name="nik" value="<?php echo $a['nik']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Nama Orang Tua</td>
						<td>:</td>
						<td><input type="text" name="nama_orang_tua" value="<?php echo $a['nama_orang_tua']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Pekerjaan Orang Tua</td>
						<td>:</td>
						<td><select name='pekerjaan_orang_tua' class='form-control' >";
				        	<option value="<?php echo $a['pekerjaan_orang_tua']; ?>"><?php echo $a['pekerjaan_orang_tua']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_pekerjaan_orangtua");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[nama_pekerjaan_orangtua]'>$row[nama_pekerjaan_orangtua]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>
					
					<tr>
						<td>Penghasilan Orang Tua</td>
						<td>:</td>
						<td><select name='penghasilan_orang_tua' class='form-control' >";
				        	<option value="<?php echo $a['penghasilan_orang_tua']; ?>"><?php echo $a['penghasilan_orang_tua']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_penghasilan_orangtua");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[jumlah_penghasilan_orangtua]'>$row[keterangan]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>
					
					<tr>
						<td>NO Kartu BPJS</td>
						<td>:</td>
						<td><input type="number" name="kartu_bpjs" value="<?php echo $a['kartu_bpjs']; ?>" class="form-control" required></td>
					</tr>

					<tr>
						<td>Nama Sekolah</td>
						<td>:</td>
						<td><input type="text" name="nama_sekolah" value="<?php echo $a['nama_sekolah']; ?>" class="form-control" required></td>
					</tr>
					<tr>
						<td>Akreditasi Sekolah</td>
						<td>:</td>
						<td><select name="akreditasi" class="form-control" required>
							<option value="0"<?php if($a['akreditasi']=='0'){echo "selected";} ?>>Tidak Terakreditasi</option>
							<option value="A"<?php if($a['akreditasi']=='A'){echo "selected";} ?>>Terakreditasi A</option>
							<option value="B"<?php if($a['akreditasi']=='B'){echo "selected";} ?>>Terakreditasi B</option>
							<option value="C"<?php if($a['akreditasi']=='C'){echo "selected";} ?>>Terakreditasi C</option>
						</select></td>
					</tr>
		    
				    <tr>
						<td>Asal Sekolah</td>
						<td>:</td>
						<td><select name='asal_sekolah' class='form-control' required>";
				        	<option value="<?php echo $a['asal_sekolah']; ?>"><?php echo $a['asal_sekolah']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_asal_sekolah");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[asal_sekolah]'>$row[asal_sekolah]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>

					<tr>
						<td>Keterangan Sekolah</td>
						<td>:</td>
						<td><select name='keterangan_sekolah' class='form-control' required>";
				        	<option value="<?php echo $a['keterangan_sekolah']; ?>"><?php echo $a['keterangan_sekolah']; ?></option>
				            <?php include "../config/koneksi.php";
				        	$query = mysqli_query($kon,"SELECT * FROM tb_keterangan_sekolah");
				        	while ($row = mysqli_fetch_array($query)) {
				       		 echo"
				        	<option value='$row[keterangan_sekolah]'>$row[keterangan_sekolah]</option>
				        	";
				       		 }
				        	?>
				        	echo"</select></td>
					</tr>

				    <tr>
				        <td>Daerah Asal</td>
				        <td>:</td>
				        <td><input type="text" name="daerah_asal" value="<?php echo $a['daerah_asal']; ?>" class="form-control" required></td>
				    </tr>

					<tr>
						<td>Foto</td>
						<td>: </td>
						<td><input type="file" name="gambar" class="form-control" ></td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
						<td >
							<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
							<input type="reset" name="submit" value="Hapus" class="btn btn-success">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<?php 
	include"01_nav.php";
	include "../assets/js/date.php";
	error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	$query=mysqli_query($kon,"select * from tb_nilai where id_nilai='$_GET[id_nilai]'");
	$a=mysqli_fetch_array($query);
?>
	
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="02_prosesedit_nilai.php" enctype="multipart/form-data">	
			<table width="100%" class="table table-hover">
				<input type="hidden" name="id_nilai" value="<?php echo "$a[id_nilai]"; ?>">
				<tr>
					<td colspan="3"><h2>Selamat Datang</h2>   
	    							<h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
									<hr></hr></td> 
				</tr>

				<tr>
					<td width="25%">&nbsp;</td>	
					<td>Pengajaran</td>		
					<td> Praktek</td>
				</tr>

				<tr>
					<td>Semester</td>
					<td colspan="2"><select name="semester" type="select" class="form-control" required="yes">
				    	<option value="<?php echo $a['semester']; ?>"><?php echo $a['semester']; ?></option>
						<option value="1">1 </option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				        </select></td>
				</tr>

				<tr>
					<td>Pendidikan Agama</td>		
					<td><input type="number" name="peng_agama" class="form-control" value="<?php echo $a['peng_agama']; ?>"> </td>
					<td><input type="number" name="prak_agama" class="form-control" value="<?php echo $a['prak_agama']; ?>"> </td>
				</tr>

				<tr>
					<td>Kewarganegaraan</td>		
					<td><input type="number" name="peng_kewarganegaraan" class="form-control" value="<?php echo $a['peng_kewarganegaraan']; ?>"> </td>
					<td><input type="number" name="prak_kewarganegaraan" class="form-control" value="<?php echo $a['prak_kewarganegaraan']; ?>"> </td>
				</tr>

				<tr>
					<td>Bahasa Indonesia</td>		
					<td><input type="number" name="peng_bahasa_indonesia" class="form-control" value="<?php echo $a['peng_bahasa_indonesia']; ?>"> </td>
					<td><input type="number" name="prak_bahasa_indonesia" class="form-control" value="<?php echo $a['prak_bahasa_indonesia']; ?>"> </td>
				</tr>

				<tr>
					<td>Bahasa Inggris</td>		
					<td><input type="number" name="peng_bahasa_inggris" class="form-control" value="<?php echo $a['peng_bahasa_inggris']; ?>"> </td>
					<td><input type="number" name="prak_bahasa_inggris" class="form-control" value="<?php echo $a['prak_bahasa_inggris']; ?>"> </td>
				</tr>

				<tr>
					<td>Matematika</td>		
					<td><input type="number" name="peng_matematika" class="form-control" value="<?php echo $a['peng_matematika']; ?>"> </td>
					<td><input type="number" name="prak_matematika" class="form-control" value="<?php echo $a['prak_matematika']; ?>"> </td>
				</tr>

				<tr>
					<td>Fisika</td>		
					<td><input type="number" name="peng_fisika" class="form-control" value="<?php echo $a['peng_fisika']; ?>"> </td>
					<td><input type="number" name="prak_fisika" class="form-control" value="<?php echo $a['prak_fisika']; ?>"> </td>
				</tr>

				<tr>
					<td>Biologi</td>		
					<td><input type="number" name="peng_biologi" class="form-control" value="<?php echo $a['peng_biologi']; ?>"> </td>
					<td><input type="number" name="prak_biologi" class="form-control" value="<?php echo $a['prak_biologi']; ?>"> </td>
				</tr>

				<tr>
					<td>Kimia</td>		
					<td><input type="number" name="peng_kimia" class="form-control" value="<?php echo $a['peng_kimia']; ?>"> </td>
					<td><input type="number" name="prak_kimia" class="form-control" value="<?php echo $a['prak_kimia']; ?>"> </td>
				</tr>

				<tr>
					<td>Sejarah</td>		
					<td><input type="number" name="peng_sejarah" class="form-control" value="<?php echo $a['peng_sejarah']; ?>"> </td>
					<td><input type="number" name="prak_sejarah" class="form-control" value="<?php echo $a['prak_sejarah']; ?>"> </td>
				</tr>

				<tr>
					<td>Geografi</td>		
					<td><input type="number" name="peng_geografi" class="form-control" value="<?php echo $a['peng_geografi']; ?>"> </td>
					<td><input type="number" name="prak_geografi" class="form-control" value="<?php echo $a['prak_geografi']; ?>"> </td>
				</tr>

				<tr>
					<td>Ekonomi</td>		
					<td><input type="number" name="peng_ekonomi" class="form-control" value="<?php echo $a['peng_ekonomi']; ?>"> </td>
					<td><input type="number" name="prak_ekonomi" class="form-control" value="<?php echo $a['prak_ekonomi']; ?>"> </td>
				</tr>

				<tr>
					<td>Sosiologi</td>		
					<td><input type="number" name="peng_sosiologi" class="form-control" value="<?php echo $a['peng_sosiologi']; ?>"> </td>
					<td><input type="number" name="prak_sosiologi" class="form-control" value="<?php echo $a['prak_sosiologi']; ?>"> </td>
				</tr>

				<tr>
					<td>Seni Budaya</td>		
					<td><input type="number" name="peng_senibudaya" class="form-control" value="<?php echo $a['peng_senibudaya']; ?>"> </td>
					<td><input type="number" name="prak_senibudaya" class="form-control" value="<?php echo $a['prak_senibudaya']; ?>"> </td>
				</tr>

				<tr>
					<td>Pendidikan Jasmani</td>		
					<td><input type="number" name="peng_pend_jasmani" class="form-control" value="<?php echo $a['peng_pend_jasmani']; ?>"> </td>
					<td><input type="number" name="prak_pend_jasmani" class="form-control" value="<?php echo $a['prak_pend_jasmani']; ?>"> </td>
				</tr>

				<tr>
					<td>Teknologi Informasi</td>		
					<td><input type="number" name="peng_teknologi_informasi" class="form-control" value="<?php echo $a['peng_teknologi_informasi']; ?>"> </td>
					<td><input type="number" name="prak_teknologi_informasi" class="form-control" value="<?php echo $a['prak_teknologi_informasi']; ?>"> </td>
				</tr>

				<tr>
					<td>Keterampilan / Bhs Asing</td>		
					<td><input type="number" name="peng_keterampilan" class="form-control" value="<?php echo $a['peng_keterampilan']; ?>"> </td>
					<td><input type="number" name="prak_keterampilan" class="form-control" value="<?php echo $a['prak_keterampilan']; ?>"> </td>
				</tr>

				<tr>
					<td>Muatan Lokal</td>		
					<td><input type="number" name="peng_mulok" class="form-control" value="<?php echo $a['peng_mulok']; ?>"> </td>
					<td><input type="number" name="prak_mulok" class="form-control" value="<?php echo $a['prak_mulok']; ?>"> </td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td >
						<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
						<input type="reset" name="submit" value="Hapus" class="btn btn-success">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

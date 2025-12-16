<?php 
	include "01_nav.php";
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
				<table width="100%" class="table table-hover">
					<tr>
						<td colspan="3"><h2>Formulir</h2>   
										<hr></hr></td> 
					</tr>

					<tr>
						<td width="15%">ID/Nomor Kartu Ujian</td>
						<td width="2%">:</td>
						<td><?php echo $a['username']; ?></td>
					</tr>

		    
				    <tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?php echo $a['nama_lengkap']; ?></td>
					</tr>

					<tr>
						<td>Pilihan Prodi</td>
						<td>:</td>
						<td><?php echo $a['pilihan_prodi']; ?>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?php echo $a['alamat']; ?></td>
					</tr>
				    
				    <tr>
				        <td>Jenis Kelamin</td>
				        <td>:</td>
				        <td>
				        	<?php echo $a['jenis_kelamin']; ?>
				        </td>
				    </tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><?php echo $a['agama']; ?></option>
					</tr>
		    
					<tr>
						<td>No Handphone</td>
						<td>:</td>
						<td><?php echo $a['no_hp']; ?></td>
					</tr>

				    <tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><?php echo $a['tempat_lahir']; ?></td>
					</tr>   

					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><?php echo $a['tanggal_lahir']; ?></td>
					</tr>

					<tr>
						<td>Berat Badan</td>
						<td>:</td>
						<td><?php echo $a['berat_badan']; ?></td>
					</tr>

					<tr>
						<td>Tinggi Badan</td>
						<td>:</td>
						<td><?php echo $a['tinggi_badan']; ?></td>
					</tr>

					<tr>
						<td>Golongan Darah</td>
						<td>:</td>
						<td><?php echo $a['golongan_darah']; ?></td>
					</tr>
					
					<tr>
						<td>Nomor Induk Keluarga (NIK)</td>
						<td>:</td>
						<td><?php echo $a['nik']; ?></td>
					</tr>

					<tr>
						<td>Nama Orang Tua</td>
						<td>:</td>
						<td><?php echo $a['nama_orang_tua']; ?></td>
					</tr>

					<tr>
						<td>Pekerjaan Orang Tua</td>
						<td>:</td>
						<td><?php echo $a['pekerjaan_orang_tua']; ?>
					</tr>
					
					<tr>
						<td>Penghasilan Orang Tua</td>
						<td>:</td>
						<td><?php echo $a['penghasilan_orang_tua']; ?></td>
					</tr>
					
					<tr>
						<td>NO Kartu BPJS</td>
						<td>:</td>
						<td><?php echo $a['kartu_bpjs']; ?></td>
					</tr>

					<tr>
						<td>Nama Sekolah</td>
						<td>:</td>
						<td><?php echo $a['nama_sekolah']; ?></td>
					</tr>
					<tr>
						<td>Akreditasi Sekolah</td>
						<td>:</td>
						<td><?php echo $a['akreditasi']; ?></td>
					</tr>
		    
				    <tr>
						<td>Asal Sekolah</td>
						<td>:</td>
						<td><?php echo $a['asal_sekolah']; ?></td>
					</tr>

					<tr>
						<td>Keterangan Sekolah</td>
						<td>:</td>
						<td><?php echo $a['keterangan_sekolah']; ?></td>
					</tr>

				    <tr>
				        <td>Daerah Asal</td>
				        <td>:</td>
				        <td><?php echo $a['daerah_asal']; ?></td>
				    </tr>

					<tr>
						<td>Foto</td>
						<td>: </td>
						<td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">
              <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>
					</tr>

				</table>
				<tr>
					<td colspan="2">&nbsp;</td>
					<td >
						<a href="01_formulir.php" class="btn btn-primary">Kembali</a>
						<!-- <input type="reset" name="submit" value="Hapus" class="btn btn-success"> -->
					</td>
				</tr>
		</div>
	</div>
</div>

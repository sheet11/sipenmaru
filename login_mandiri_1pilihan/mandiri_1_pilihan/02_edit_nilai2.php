<?php 	
	include "01_nav.php";
  	include "../config/koneksi.php";
  	include "../assets/js/date.php";
	error_reporting(0); 
?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="" enctype="multipart/form-data">	
			<table width="100%" class="table table-bordered">
				<tr>
					<td colspan="9" class="success"><b><h5>Tambah Data Nilai</b></h5></td>
				</tr>
				<tr>
					<th colspan="4">Matakuliah Perguruan Asal</th>
					<th colspan="5">Matakuliah Prodi Poltekkes</th>
				</tr>

				<tr>
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>	
					<th>Nilai</th>	
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>
					<th>Status</th>		
					<th>Nilai</th>

				</tr>

				<?php $query=mysqli_query($kon,"select tb_rpl.sks_asal, tb_rpl.nilai_asal, tb_rpl.idasesmen, tb_rpl.kode_asal, tb_rpl.matkul_asal, tb_asesmen.idasesmen, tb_asesmen.kode_polkes, tb_asesmen.sks_polkes, tb_asesmen.matkul_polkes from tb_asesmen join tb_rpl on tb_asesmen.idasesmen=tb_rpl.idasesmen where tb_asesmen.nama_jurusan='keperawatan' and tb_rpl.username='$_GET[username]'"); 
				while($a=mysqli_fetch_array($query))
				{ ?>
				<tr>
					<td hidden><input type="text" value="<?=$a['idasesmen'];?>" name="idasesmen[]"></td>
					<td><input type="text" value="<?=$a['kode_asal'];?>" name="kode_asal[]"  class="form-control"></td>
					<td><input type="text" value="<?=$a['matkul_asal'];?>" name="matkul_asal[]"  class="form-control"></td>
					<td><input type="text" value="<?=$a['sks_asal'];?>" name="sks_asal[]"  class="form-control"></td>
					<td><select value="<?=$a['nilai_asal'];?>" name="nilai_asal[]" class="form-control" required>
						<option value="0"<?php if($a['nilai_asal']=='0'){echo "selected";} ?>>Nilai</option>
						<option value="A"<?php if($a['nilai_asal']=='A'){echo "selected";} ?>>A</option>
						<option value="B"<?php if($a['nilai_asal']=='B'){echo "selected";} ?>>B</option>
						<option value="C"<?php if($a['nilai_asal']=='C'){echo "selected";} ?>>C</option>
					</select></td>
					<td><?=$a['kode_polkes'];?></td>
					<td><?=$a['matkul_polkes'];?></td>		
					<td><?=$a['sks_polkes'];?></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<?php 
				}
				?>
				<tr>
						<td colspan="9"><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
						<input type="reset" name="submit" value="Hapus" class="btn btn-success"></td>
				</tr>

		</table>      
	</form>

	</div>
</div>

<?php
			include "../config/koneksi.php";
	
				if(isset($_POST['submit']))
				{		
						$idasesmen = $_POST['idasesmen'];
						$kode = $_POST['kode_asal'];
						$matkul =$_POST['matkul_asal'];
						$sks =$_POST['sks_asal'];
						$nilai =$_POST['nilai_asal'];
						$user= $_GET['username'];
						
						$jml=count($idasesmen);
							for($x=0;$x<$jml;$x++){
								$query= mysqli_query($kon, "UPDATE tb_rpl SET kode_asal='$kode[$x]', matkul_asal='$matkul[$x]', sks_asal='$sks[$x]', nilai_asal='$nilai[$x]' WHERE idasesmen='$idasesmen[$x]' AND username='$user'");
							}
						
							if($query)
							{
								echo"<script>alert('Data Berhasil di Simpan');window.location='02_lihat_nilai2.php'</script>";
							}
							
							else
							{
								echo"<script>alert('Data Gagal di Simpan');window.location='02_lihat_nilai2.php'</script>";
							}
						}		
						?> 	
	</body>
</html>
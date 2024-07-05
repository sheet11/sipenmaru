<?php 	
	include "01_nav.php";
  	include "../config/koneksi.php";
  	include "../assets/js/date.php";
	error_reporting(0); 

	if (empty($_SESSION['username'])) {
		echo"<script>alert('Sesi habis, Silahkan login kembali');window.location='login_mandiri_1pilihan/index.php'</script>";
	}
?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
    	<h5>Catatan : <br>*Mohon mengisi data yang mirip dengan mata kuliah perguruan asal calon sesuai kolom yang sudah tertera, sesudah lengkap baru kemudian calon menyimpan data menggunakan tombol simpan di bawah</h5>
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
					<th width="125px">Kode</th>	
					<th>Matakuliah</th>	
					<th width="50px">SKS</th>	
					<th width="90px">Nilai</th>	
					<th width="110px">Kode</th>		
					<th width="170px">Matakuliah</th>	
					<th>SKS</th>
					<th width="50px">Status</th>		
					<th width="50px">Nilai</th>

				</tr>
				<?php $query=mysqli_query($kon,"select * from tb_asesmen where nama_jurusan='kebidanan'"); 
				while($a=mysqli_fetch_array($query))
				{ ?>

				<tr>
					<td hidden><input type="text" value="<?=$a['idasesmen'];?>" name="idasesmen[]"></td>
					<td><input type="text" name="kode_asal[]"  class="form-control"></td>
					<td><input type="text" name="matkul_asal[]"  class="form-control"></td>
					<td><input type="text" name="sks_asal[]"  class="form-control"></td>
					<td><select name="nilai_asal[]" class="form-control" required>
							<option value="0"<?php if($a['nilai_1']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_1']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_1']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_1']=='C'){echo "selected";} ?>>C</option>
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
					<td>&nbsp;</td>
					<td colspan="8"><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
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
						$user= $_SESSION['username'];
						
						$jml=count($idasesmen);
							for($x=0;$x<$jml;$x++){
								$query= mysqli_query($kon, "INSERT INTO tb_rpl(idasesmen, kode_asal, matkul_asal, sks_asal, nilai_asal, username) VALUES ('$idasesmen[$x]', '$kode[$x]', '$matkul[$x]', '$sks[$x]', '$nilai[$x]','$user')");
							}
						
						// $query=mysqli_query($kon,"insert into tb_rpl(
						// 					idasesmen, kode_asal, matkul_asal, sks_asal, nilai_asal, username)
						// 	values('$_POST[idasesmen]','$_POST[kode_asal]','$_POST[matkul_asal]','$_POST[sks_asal]','$_POST[nilai_asal]','$_SESSION[username]')");
						if($query)
							{
								echo"<script>alert('Data Berhasil di Simpan');window.location='02_lihat_nilai.php'</script>";
							}

						else
							{
								echo"<script>alert('Data Gagal di Simpan');window.location='02_input_nilai.php'</script>";
							}
				}else{
					echo "gagal";
				}			
		?> 	
	</body>
</html>

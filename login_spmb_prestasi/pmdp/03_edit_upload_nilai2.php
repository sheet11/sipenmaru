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
			<form method="post" action="03_prosesedit_upload_nilai2.php" enctype="multipart/form-data">	
				<table width="100%" class="table table-hover">
					<input type="hidden" name="id_formulir" value="<?php echo "$a[id_formulir]"; ?>">
					<tr>
						<td colspan="3"><h2>Selamat Datang</h2>   
		    							<h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
										<hr></hr></td> 
					</tr>

					

					<tr>
						<td>File</td>
						<td>: </td>
						<td><input type="file" name="gambar" class="form-control"><small class="text-danger">Ukuran Gambar tidak boleh melebihi 500kb dan Format file ( .jpg / .png / .jpeg / .pdf)</small></td>
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

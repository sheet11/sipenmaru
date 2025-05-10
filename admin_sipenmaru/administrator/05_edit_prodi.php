<?php 
		include"01_nav.php";
		error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_prodi where id_prodi='$_GET[id_prodi]'");
	$a=mysqli_fetch_array($query);
	
?>
	
	<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
		<form method="post" action="05_prosesedit_prodi.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="id_prodi" value="<?php echo "$a[id_prodi]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>
			 Edit Data Prodi</b></h4></td> 
		</tr>
	
   		<tr>
			<td colspan="3">Nama Prodi <br><input type="text" placeholder="Nama Prodi" name="nama_prodi" value="<?php echo "$a[nama_prodi]"; ?>"class="form-control" ></td>
			
		</tr>
		<tr>
			<td colspan="3">Status Aktif<input type="text" placeholder="Aktif" name="aktif" value="<?php echo "$a[aktif]"; ?>"class="form-control" ></td>
			
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
				<input type="reset" name="submit" value="Hapus" class="btn btn-success">
			</td>
		</tr>
		</table>
		<p>*catatan <br>Aktif 1 = SPMB Prestasi <br>Aktif 2 = SPMB Mandiri 2 Pilihan <br>Aktif 3 = SPMB Mandiri 1 Pilihan</p>
	</form>
	</div>
</div>

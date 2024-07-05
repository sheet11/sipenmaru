<?php include"01_nav.php";?>
<?php error_reporting(0); ?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_jumlah_prodi where id_jumlah_prodi='$_GET[id_jumlah_prodi]'");
	$a=mysqli_fetch_array($query);
	
?>
	
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="13_prosesedit_jumlah_prodi.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="id_jumlah_prodi" value="<?php echo "$a[id_jumlah_prodi]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>
			 EDIT DATA JUMLAH PRODI</b></h4></td> 
		</tr>
	
   		<tr>
			<td colspan="3"><input type="text" placeholder="Jumlah Prodi" name="jumlah_prodi" value="<?php echo "$a[jumlah_prodi]"; ?>"class="form-control" ></td>
			
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
				<input type="reset" name="submit" value="Hapus" class="btn btn-success">
			</td>
		</tr>
		</table>
	</form>
	</div>
</div>

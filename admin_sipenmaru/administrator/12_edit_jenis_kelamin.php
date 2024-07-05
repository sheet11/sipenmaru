<?php include"01_nav.php";?>
<?php error_reporting(0); ?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_jenis_kelamin where id_jenis_kelamin='$_GET[id_jenis_kelamin]'");
	$a=mysqli_fetch_array($query);
	
?>
	
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="12_prosesedit_jenis_kelamin.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="id_jenis_kelamin" value="<?php echo "$a[id_jenis_kelamin]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>
			 EDIT DATA Jenis Kelamin</b></h4></td> 
		</tr>
	
   		<tr>
			<td colspan="3"><input type="text" placeholder="Nama Jenis Kelamin" name="nama_jenis_kelamin" value="<?php echo "$a[nama_jenis_kelamin]"; ?>"class="form-control" ></td>
			
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

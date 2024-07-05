<?php include"01_nav.php";?>
<?php error_reporting(0); ?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from status where id_status='$_GET[id_status]'");
	$a=mysqli_fetch_array($query);
	
?>
	
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="06_prosesedit_status.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="id_status" value="<?php echo "$a[id_status]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>
			 EDIT DATA AGAMA</b></h4></td> 
		</tr>
	
   		<tr>
			<td colspan="3"><input type="text" placeholder="Nama status" name="nama_status" value="<?php echo "$a[nama_status]"; ?>"class="form-control" ></td>
			
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

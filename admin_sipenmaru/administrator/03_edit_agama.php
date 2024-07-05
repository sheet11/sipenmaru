<?php include"01_nav.php";?>
<?php error_reporting(0); ?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_agama where id_agama='$_GET[id_agama]'");
	$a=mysqli_fetch_array($query);
	
?>
	
	<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
		<form method="post" action="03_prosesedit_agama.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="id_agama" value="<?php echo "$a[id_agama]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>
			 EDIT DATA AGAMA</b></h4></td> 
		</tr>
	
   		<tr>
			<td colspan="3"><input type="text" placeholder="Agama" name="nama_agama" value="<?php echo "$a[nama_agama]"; ?>"class="form-control" ></td>
				
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

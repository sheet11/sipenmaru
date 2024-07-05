<?php 
		include"01_nav.php";
		error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_tempat_ujian where id_tempat_ujian='$_GET[id_tempat_ujian]'");
	$a=mysqli_fetch_array($query);
	
?>
	
	<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
					<form method="post" action="07_prosesedit_tempat_ujian.php" enctype="multipart/form-data">	
						<table width="100%" border="0" class="table table-hover">
							<input type="hidden" name="id_tempat_ujian" value="<?php echo "$a[id_tempat_ujian]"; ?>">
						<tr>
							<td align="left" colspan="3"><b><h4>EDIT DATA TEMPAT UJIAN</b></h4></td> 
						</tr>
					
						<tr>
							<td colspan="3"><input type="text" placeholder="Nama Tempat Ujian" name="tempat_ujian" value="<?php echo "$a[tempat_ujian]"; ?>"class="form-control" ></td>
							
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

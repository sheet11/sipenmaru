<?php 
		include"01_nav.php";
		error_reporting(0); 
?>

<?php
	require_once("../config/koneksi.php");
	include "js/date.php";
	$query=mysqli_query($kon,"select * from tb_user where username='$_GET[username]'");
	$a=mysqli_fetch_array($query);
	
?>
	
	<aside class="right-side">
    <section class="content-header">
    <div class="container-fluid" style="margin:30px;">
			<form method="post" action="04_prosesedit_user.php" enctype="multipart/form-data">	
				<table width="100%" border="0" class="table table-hover">
					<input type="hidden" name="username" value="<?php echo "$a[username]"; ?>">
					<tr>
						<td align="left" colspan="3"><b><h4>EDIT DATA USER</b></h4></td> 
					</tr>
				
					<tr>
						<td colspan="3"><input type="text" placeholder="Username" name="username" value="<?php echo "$a[username]"; ?>"class="form-control" ></td>		
					</tr>

					<tr>
						<td colspan="3"><input type="text" placeholder="Password" name="password" value="<?php echo "$a[password]"; ?>"class="form-control" ></td>	
					</tr>

					<tr>
						<td colspan="3"><input type="text" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo "$a[nama_lengkap]"; ?>"class="form-control" ></td>	
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

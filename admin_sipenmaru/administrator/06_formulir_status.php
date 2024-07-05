<?php 	include"01_nav.php";
		include"js/date.php";
		include "koneksi.php";
?>
<?php


if($_SESSION['level'] == "administrator"){ ?>
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
	<form method="post" action="" enctype="multipart/form-data">	
		<table style="width:100%" class="table table-bordered">
			<tr>
				<td align="left" colspan="2"><b><h4>DATA status</b></h4></td> 
			</tr>
			
			<tr>
				<td><input type="text" placeholder="Nama status" name="nama_status" class="form-control"></td>
				
			</tr>
			
			<tr>	
				<td colspan="4">
					<input type="submit" name="submit" value="SIMPAN"  class="btn btn-primary">
					<input type="reset" name="submit" value="RESET" class="btn btn-danger">
				</td>
			</tr>
		</table>
	</form>
	</div>
</div>
		<?php
			include"../config/koneksi.php";
	
				if(isset($_POST['submit'])){
														
				$query=mysqli_query($kon,"insert into status(id_status, nama_status)
									values('$_POST[id_status]','$_POST[nama_status]')");
					
										
					if($query){
						echo"<script>alert('Data Berhasil di Simpan');window.location='06_daftar_status.php'</script>";
					}
				}					
		?>


				
<?php } ?>	 		 	
	</body>
</html>

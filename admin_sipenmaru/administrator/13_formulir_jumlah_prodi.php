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
				<td align="left" colspan="2"><b><h4>DATA JUMLAH PRODI</b></h4></td> 
			</tr>
			
			<tr>
				<td><input type="text" placeholder="Jumlah Prodi" name="jumlah_prodi" class="form-control"></td>
				
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
														
				$query=mysqli_query($kon,"insert into tb_jumlah_prodi(id_jumlah_prodi, jumlah_prodi)
									values('$_POST[id_jumlah_prodi]','$_POST[jumlah_prodi]')");
					
										
					if($query){
						echo"<script>alert('Data Berhasil di Simpan');window.location='13_daftar_jumlah_prodi.php'</script>";
					}
				}					
		?>


				
<?php } ?>	 		 	
	</body>
</html>

<?php 	
	include"01_nav.php";
?>
<?php


if($_SESSION['level'] == "administrator"){ ?>
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
	<form method="post" action="" enctype="multipart/form-data">	
		<table style="width:100%" class="table table-bordered">
			<tr>
				<td align="left" colspan="2"><b><h4>DATA PRODI</b></h4></td> 
			</tr>
			
			<tr>
				<td><input type="text" placeholder="Nama Prodi" name="nama_prodi" class="form-control"></td>
				
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
														
				$query=mysqli_query($kon,"insert into tb_prodi(id_prodi, nama_prodi)
									values('$_POST[id_prodi]','$_POST[nama_prodi]')");
					
										
					if($query){
						echo"<script>alert('Data Berhasil di Simpan');window.location='05_daftar_prodi.php'</script>";
					}
				}					
		?>


				
<?php } ?>	 		 	
	</body>
</html>

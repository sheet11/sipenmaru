<?php 	include"01_nav.php";

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
				<td align="left" colspan="2"><b><h4>DATA AGAMA</b></h4></td> 
			</tr>
			
			<tr>
				<td><input type="text" placeholder="Nama Agama" name="nama_agama" class="form-control"></td>
				
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
														
				$query=mysqli_query($kon,"insert into tb_agama(id_agama, nama_agama)
									values('$_POST[id_agama]','$_POST[nama_agama]')");
					
										
					if($query){
						echo"<script>alert('Data Berhasil di Simpan');window.location='03_daftar_agama.php'</script>";
					}
				}					
		?>


				
<?php } ?>	 		 	
	</body>
</html>

<?php 	include"01_nav.php";
		include"js/date.php";
	
?>
<?php

error_reporting(0);
if($_SESSION['level'] == "administrator"){ ?>
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			
		<tr>
			<td align="left" colspan="3"><b><h4>FORMULIR CALON MAHASISWA</b></h4>
			</td>
		</tr>
		 <tr><td>Tanggal, Bulan, Tahun Lahir (dalam angka tanpa spasi)</td>
		<tr> 
			<td><input type="text" placeholder="Tanggal, Bulan, Tahun Lahir (dalam angka tanpa spasi)" name="tgllahir" class="form-control" value="<?php echo "$a[tgllahir]"; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
			<input type="reset" name="submit" value="Hapus" class="btn btn-success">
			</td>
		</tr>
		</table>
	</form>
	</div>
</div>
		<?php
			include"../config/koneksi.php";
	
				if(isset($_POST['submit'])){
														
				$query=mysqli_query($kon,"insert into tb_pendaftaran_4(user_id, username,jumlahprodi)
									values('$_POST[user_id]','$_POST[username]','1 Pilihan Jalur Lintas Provinsi')");
					
										
					if($query){
						echo"<script>alert('Data Berhasil di Simpan');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php'</script>";
					}
				}					
		?>


				
<?php } ?>	 		 	
	</body>
</html>

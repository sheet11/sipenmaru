<?php include"01_nav.php";
include "js/date.php";?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
	<form method="post" action="01_action_report_excel_surat_masuk.php" enctype="multipart/form-data">		
		<table style="width:100%;" class="table table-hover" >
			<tr>
				<td colspan="2"><label>LAPORAN SURAT MASUK</label></td>
			</tr>
			
			<tr>
				
				<td><input id="tgls" type="text" placeholder="dari" name="tanggal_masuk" required="yes" class="form-control"></td>
				<td><input id="tglf" type="text" placeholder="sampai" name="tanggal_masuk" required="yes" class="form-control"></td>
			</tr>
			<tr>	
				<td colspan="2"><input type="submit" name="submit" value="export" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>			
	
			<?php
			
			require_once("../config/koneksi.php");
			
			if(isset($_POST['submit'])){
				
				$query = mysqli_query($kon,"SELECT * FROM tb_surat_masuk WHERE tanggal_masuk BETWEEN '$_POST[tanggal_masuk]' AND '$_POST[tanggal_masuk]'");
				
				if($query){
				echo"
				<p>&nbsp;</p>
					<table style='width:100%;' class='table table-hover' border='1'>
						<tr>
							<td>No Surat</td><td>Judul Surat</td><td>Tanggal Surat</td><td>tanggal Keluar</td><td>Lokasi Arsip</td><td>Nama Pengirim</td>
						</tr>
				";
					
					while($a=mysqli_fetch_array($query)){
						echo"
							<tr>
								<td>$a[no_surat]</td><td>$a[judul_surat]</td><td>$a[tanggal_surat]</td><td>$a[tanggal_masuk]</td><td>$a[lokasi_arsip]</td><td> $a[nama_pengirim]</td>
							</tr>
							";	
					}
				echo "</table>";	
				}
				
				else{		
					echo"data tidak ditemukan";
				}	
				
			}	
			?>
			</div>
		</div>
	</body>
</html>

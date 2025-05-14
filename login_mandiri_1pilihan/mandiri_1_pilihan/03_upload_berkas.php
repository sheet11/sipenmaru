<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Form Upload Berkas</h2>   
	    <h5>Detail Berkas Yang perlu di isi</h5>
		<hr></hr>
		<div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Akreditasi Prodi </th><th>Ijazah </th><th>Tranksrip Nilai </th><th width="10%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[pilihan_prodi]</td>
					<td>";
						
						if($a['photo1'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></a>
							";
						}else{
							echo"<a href='../assets/berkas/$a[photo1]' alt='Image description' target='_blank' class='btn btn-sm btn-success'><b>Sudah Upload</b></a> ";
						}
						
						echo"</td>
				
					<td>";
						if($a['photo2'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></a>
							";
						}else{
							echo"<a href='../assets/berkas/$a[photo2]' alt='Image description' target='_blank' class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
					<td>";
					if($a['photo3'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></a>
							";
						}else{
							echo"<a href='../assets/berkas/$a[photo3]' alt='Image description' target='_blank' class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
					<td>
						<a href='03_upload.php' class='btn btn-sm btn-danger'><b class='fa fa-upload'>Upload Berkas</b></a>
					</td>
					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><b>Catatan</b><br>
				1. Klik Tombol Upload Berkas Untuk Melengkapi Berkas</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>





<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Selamat Datang</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<hr></hr>
		<div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Semester </th><th width="10%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[pilihan_prodi]</td>
					<td>";
						echo "
						<a href='03_edit_upload_nilai1.php?id_formulir=$a[id_formulir]' class='btn btn-warning'><b>Semester 1</b></a>
						<a href='03_edit_upload_nilai2.php?id_formulir=$a[id_formulir]' class='btn btn-warning'><b>Semester 2</b></a></br>
						<a href='03_edit_upload_nilai3.php?id_formulir=$a[id_formulir]' class='btn btn-primary'><b>Semester 3</b></a>
						<a href='03_edit_upload_nilai4.php?id_formulir=$a[id_formulir]' class='btn btn-primary'><b>Semester 4</b></a></br>
						<a href='03_edit_upload_nilai5.php?id_formulir=$a[id_formulir]' class='btn btn-success'><b>Semester 5</b></a>
						
						 ";
						echo"</td>
				
					<td>";
						echo "					
						<a href='03_lihat_upload_nilai.php?id_formulir=$a[id_formulir]' class='btn btn-info'><b>Lihat</b></a> 
						 ";
				echo"	</td>
				

					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><b>Catatan</b><br>
				1. Klik Tombol Semester Untuk Melengkapi Data</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>





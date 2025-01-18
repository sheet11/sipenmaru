<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Sertifikat Akreditasi Sekolah</h2>   
	    <h5></h5>
		<hr></hr>
		<div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Rekomendasi </th><th width="10%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?=$a['username'] ?></td>
					<td><?=$a['nama_lengkap']?></td>
					<td><?php 
                    if($a['sertifikat_akreditasi'] == null){ ?>
                        <a class='btn btn-sm btn-danger'><b>Belum Lengkap</b></a>
                    <?php }else{ ?>
                        <a href="surat/<?=$a['sertifikat_akreditasi'] ?>" alt='Image description' class='btn btn-sm btn-success'><b>Sudah Lengkap</b>
                    <?php } ?></td>
					<td><a href='07_edituploadakreditasi.php?id_formulir=<?=$a['id_formulir']?>' class='btn btn-info'><b>Upload</b></a></td>
					</tr>
					</table>

			<?php }	?>
			<tr>
				<td><b>Catatan</b><br>
				1. Klik Tombol Semester Untuk Melengkapi Data</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>





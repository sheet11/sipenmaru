<?php 
	include "01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Form Daftar Riwayat Hidup dan Surat Pernyataan</h2>   
	    <h5>Detail Berkas Yang perlu di isi</h5>
		<hr>
		<div> 
			<div class="">
				<div class="card" >
					<div class="card-title"><i class="text-danger">*Sebelum mengunduh, lihat catatan di bawah</i></div>
					<div class="card-body" style="max-width: 270px;">
					Daftar Riwayat Hidup <a href="../media/DAFTAR RIWAYAT HIDUP.docx" download><button src="../media/DAFTAR RIWAYAT HIDUP.docx" class="btn btn-primary btn-sm" style="float: right;">Unduh Berkas <i class="fa fa-download"></i></button></a> </div> <br>
					<div class="card-body" style="max-width: 270px;">
					Surat Pernyataan <a href="../media/SURAT PERNYATAAN CAMABA AJ-RPL.docx" download><button src="../media/SURAT PERNYATAAN CAMABA AJ-RPL.docx" class="btn btn-sm btn-primary float-right" style="float: right;">Unduh Berkas <i class="fa fa-download"></i></button></a></div> <br>
				</div>
			</div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Daftar Riwayat Hidup </th><th>Surat Pernyataan  </th><th width="10%">Aksi</th>
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
						
						if($a['photo4'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></ a>
							";
						}else{
							echo"<a class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
				
					<td>";
						if($a['photo5'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></a>
							";
						}else{
							echo"<a class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
					<td>
						<a href='05_upload.php' class='btn btn-sm btn-primary'><b class='fa fa-upload'> Upload Berkas</b></a>
					</td>
					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><h4><b>Catatan :</b></h4>
				1. Unduh Berkas terlebih dahulu, setelah berkas diisi silahkan di upload kembali menggunakan Tombol Upload Berkas</br>
				2. Daftar riwayat hidup di isi dengan menggunakan word atau di ketik oleh camaba<br>
				3. Untuk Surat Pernyataan silahkan print/cetak terlebih dahulu dan sertakan meterai 10.000 yang sudah di tanda tangani CAMABA sebelum di upload/unggah kembali
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>
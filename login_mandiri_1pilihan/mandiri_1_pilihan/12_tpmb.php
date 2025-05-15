<?php 
	include "01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Form TPMB</h2>   
	    <h5>Detail Berkas Yang perlu di isi</h5>
		<hr>
		<div> 
			<div class="">
				<div class="card" >
					<div class="card-title"><i class="text-danger">*Sebelum mengunduh, lihat catatan di bawah</i></div>
					<div class="card-body" style="max-width: 270px;">
					TPMB <a href="../media/dokumen RPL.docx" download><button src="../media/DAFTAR RIWAYAT HIDUP.docx" class="btn btn-primary btn-sm" style="float: right;">Unduh Berkas <i class="fa fa-download"></i></button></a> </div> <br>
					</div>
			</div>
			<div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Link google Drive  </th><th width="10%">Aksi</th>
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
						
						if(empty($a['link'])){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum ada link</b></ a>
							";
						}else{
							echo "<a href='$a[link]' class='btn btn-sm btn-success' target='_blank'><b>Link</b></a>";
						}
						
						echo"</td>
					<td>
						<a href='12_edit.php' class='btn btn-sm btn-primary'><b class='fa fa-pencil'> Edit</b></a>
					</td>
					</tr>
					</table>";
				$i++;
			}
			?>
			<tr>
			    <td><h4><b>Catatan :</b></h4>
				1. Unduh Berkas terlebih dahulu dan di baca dengan seksama</br>
                2. Dokumen-dokumen yang sudah di upload di sistem ini silahkan di upload lagi ke google drive <br> 
                3. Lengkapi semua persyaratan yang tertera kemudian upload ke google drive pribadi dan input link google tersebut dengan cara klik edit</br>
            </td>
			</tr>
			</table>
		</div>
	 
	</div>
</div>
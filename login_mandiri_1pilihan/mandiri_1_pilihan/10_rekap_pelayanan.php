<?php 
	include "01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Form Rekap Pelayanan</h2>   
	    <h5>Detail Berkas Yang perlu di isi</h5>
		<hr>
		<div> 
			<div class="">
				<div class="card" >
					<div class="card-title"><i class="text-danger">*Sebelum mengunduh, lihat catatan di bawah</i></div>
					<div class="card-body" style="max-width: 320px;">
					Form Rekap Pelayanan <a href="../media/FORMULIR REKAPITULASI KEGIATAN PELAYANAN KEBIDANAN.docx" download><button src="../media/surat Rekomendasi.docx" class="btn btn-primary btn-sm" style="float: right;">Unduh Berkas <i class="fa fa-download"></i></button></a> </div> <br>
                    <br>
                    <br>
                </div>
			</div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Form Rekomendasi</th><th width="10%">Aksi</th>
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
						
						if($a['file_6'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></ a>
							";
						}else{
							echo"<a class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>                        
					<td>
						<a href='10_upload.php' class='btn btn-sm btn-primary'><b class='fa fa-upload'> Upload Berkas</b></a>
					</td>
					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><h4><b>Catatan :</b></h4>
				1. Unduh berkas terlebih dahulu, setelah berkas diisi silahkan di upload kembali menggunakan Tombol Upload Berkas</br>
				2. Silahkan diisi dengan sebenar-benarnya, kemudian di upload kembali<br></td>
			</tr>
			</table>
		
	 
	</div>
</div>
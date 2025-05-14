<?php 
	include "01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Form Konversi Nilai</h2>   
	    <h5>Detail Berkas Yang perlu di isi</h5>
		<hr>
		<div> 
			<div class="">
				<div class="card" >
					<div class="card-title"><i class="text-danger">*Sebelum mengunduh, lihat catatan di bawah</i></div>
					<?php if($_SESSION['prodi'] == "RPL Gizi dan Dietetik Sarjana Terapan") { ?>
					<div class="card-body" style="max-width: 300px;">
						Form Konversi Nilai 
						<a href="../media/FORM Konversi nilai gizi.xlsx" download>
							<button src="../media/FORM Konversi nilai gizi.xlsx" class="btn btn-primary btn-sm" style="float: right;">
								Unduh Berkas <i class="fa fa-download"></i>
							</button>
						</a> 
					</div> 
					<?php } else { ?>
					<div class="card-body" style="max-width: 300px;">
						Form Konversi Nilai 
						<a href="../media/FORM Konversi nilai.xlsx" download>
							<button src="../media/FORM Konversi nilai.xlsx" class="btn btn-primary btn-sm" style="float: right;">
								Unduh Berkas <i class="fa fa-download"></i>
							</button>
						</a>
					</div>
					<?php } ?>
					<br>
					<!-- kondisi download -->
					<?php 
					if ($_SESSION['prodi'] === "RPL Sarjana Terapan Kebidanan (Khusus TPMB)") { ?> 
						<div class="card-body" style="max-width: 300px;">
							Form Asesmen Alih Kredit
							<a href="../media/Lampiran 3. Form Asessment perolehan kredit STR TPMB.xlsx" download>
								<button class="btn btn-primary btn-sm" style="float: right;">
									Unduh Berkas <i class="fa fa-download"></i>
								</button>
							</a>
						</div>						
					<?php 
					} elseif ($_SESSION['prodi'] == "RPL Gizi dan Dietetik Sarjana Terapan") { ?>
						<div class="card-body" style="max-width: 300px;">
							Form Asesmen Alih Kredit
							<a href="../media/Form 3 Asesment Transfer Kredit STR Gizi.xlsx" download>
								<button class="btn btn-primary btn-sm" style="float: right;">
									Unduh Berkas <i class="fa fa-download"></i>
								</button>
							</a>
						</div>
					<?php 
					}else { ?>
						<div class="card-body" style="max-width: 300px;">
							Form Asesmen Alih Kredit
							<a href="../media/FORM 3 ASESMENT ALIH KREDIT SARJANA TERAPAN KEBIDANAN.xlsx" download>
								<button class="btn btn-primary btn-sm" style="float: right;">
									Unduh Berkas <i class="fa fa-download"></i>
								</button>
							</a>
						</div>
					<?php 
					} 
					?> 					
                    <br>
                    <br>
                </div>
			</div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>ID </th><th>Nama Lengkap </th><th>Prodi</th><th>Konversi</th><th>Form Alih Kredit</th><th width="10%">Aksi</th>
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
						
						if($a['file_1'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></ a>
							";
						}else{
							echo"<a class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
                        <td>";
						if($a['file_2'] == null){
							echo "
							<a class='btn btn-sm btn-danger'><b>Belum di Upload</b></a>
							";
						}else{
							echo"<a class='btn btn-sm btn-success'><b>Sudah di Upload</b></a> ";
						}
						
						echo"</td>
				
					<td>
						<a href='07_upload.php' class='btn btn-sm btn-primary'><b class='fa fa-upload'> Upload Berkas</b></a>
					</td>
					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><h4><b>Catatan :</b></h4>
				1. Unduh excel terlebih dahulu, setelah excel diisi silahkan di upload kembali menggunakan Tombol Upload Berkas</br>
				2. Silahkan input Mata Kuliah pada Perguruan Tinggi sebelummnya di bagian kiri kemudian upload kembali<br></td>
			</tr>
			</table>
		
	 
	</div>
</div>
<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Upload Berkas</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<hr></hr>
		<form method="post" action="10_proses_upload.php" enctype="multipart/form-data">
		<?php 
		$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' "); 
		$a=mysqli_fetch_array($query);
		?>
		<div class="card">
		<div class="card-body">
			<input type="hidden" name="id_formulir" value="<?php echo "$a[id_formulir]"; ?>">
			<div class="">
				<label class="card-title">Upload Form Rekap Pelayanan (.docx) <h8 class="text-danger">(File harus di bawah 1 mb)</h8></label>
				<input type="file" name="rekap" class="form-control">
			</div>
			<br>
			<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
			<input type="reset" name="submit" value="Hapus" class="btn btn-success">
		</div>
	</div>
	</form>
</div>
<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>
<div id="page-wrapper">
	<div id="page-inner">
		<h2>Edit Link</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<hr></hr>
		<form method="post" action="12_proses_edit.php" enctype="multipart/form-data">
		<?php 
		$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' "); 
		$a=mysqli_fetch_array($query);
		?>
		<div class="card">
		<div class="card-body">
			<input type="hidden" name="id_formulir" value="<?php echo "$a[id_formulir]"; ?>">
			<div class="">
				<label class="card-title">Link Google Drive <h8 class="text-danger">(Pastikan akses sudah nya public)</h8></label>
				<input type="text" name="link" class="form-control">
			</div>
			<br>
			<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
			<input type="reset" name="submit" value="Hapus" class="btn btn-success">
		</div>
	</div>
	</form>
</div>
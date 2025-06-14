    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />


    <?php
	include "koneksi.php";
	$ambil = mysqli_fetch_array(mysqli_query($kon, "SELECT username, password, id_formulir FROM tb_formulir5 WHERE status='Belum Lengkap' ORDER BY id_formulir ASC LIMIT 1"));
	?>
    <div id="wrapper">
    	<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="index.php">Seleksi Penerimaan Mahasiswa Baru Jalur Mandiri Program Profesi/Alih Jenjang (1 Pilihan) <br><i style="color: red;">Minimal lulusan D3/D4/S1</i></a>
    		</div>
    		<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Poltekkes Kemenkes Bengkulu </div>
    	</nav>


    	<?php
		$date = date("Y-m-d");
		$date = date('Y-m-d', strtotime($date));
		//echo $paymentDate; // echos today! 
		$query = mysqli_query($kon, "SELECT * FROM periode WHERE nama_periode='SPMB 1 Pilihan'");

		if ($query) {
			$a = mysqli_fetch_array($query);
		}
		$id_periode = $a['id_periode'];
		$nama_periode = $a['nama_periode'];
		$buka = $a['tanggal_buka'];
		$tutup = $a['tanggal_tutup'];
		$status = $a['status_periode'];
		if ($status == "Buka") {
			if (($date >= $buka) && ($date <= $tutup)) { ?>
    			<div id="page-wrapper">
    				<div id="page-inner">
    					<div class="container-fluid" style="margin:30px;">
    						<form method="post" action="" enctype="multipart/form-data" autocomplete="off">
    							<table style="width:100%" class="table table-basic">
    								<tr>
    									<!-- <td colspan="2"><b>Identitas Diri (ID)</b></td> -->
    									<input type="hidden" name="id" value="<?php echo $ambil['id_formulir']; ?>">
    									<input type="hidden" name="username" value="<?php echo $ambil['username']; ?>">
    								</tr>
    								<tr>

    									<td colspan="2"><input type="hidden" name="username" value="<?php echo $ambil['username']; ?>" class="form-control" disabled> </td>
    								</tr>

									<tr>
										<td colspan="" style="color: red;">Pendaftaran dan Pembayaran akan di tutup hari ini jam 00.00 WIB 14-06-2025</td>
									</tr>
									
    								<tr>
    									<td colspan="2"><b>Nama Lengkap</b></td>
    								</tr>

    								<tr>
    									<td colspan="2"><input type="text" name="nama_lengkap" class="form-control" required=""> </td>
    								</tr>

    								<tr>
    									<td colspan="2"><b>No Handphone</b></td>
    								</tr>

    								<tr>
    									<td colspan="2"><input type="number" name="no_hp" class="form-control" required=""> </td>
    								</tr>

    								<tr>
    									<td colspan="2"><b>Pilihan Prodi</b>
    										<select name='pilihan_prodi' class='form-control' required>";
    											<option value="">---- Pilih ----</option>
    											<?php include "koneksi.php";
												$query = mysqli_query($kon, "SELECT * FROM tb_prodi where aktif=3 order by nama_prodi desc");
												while ($row = mysqli_fetch_array($query)) {
													echo "<option value='$row[nama_prodi]'>$row[nama_prodi]</option>";
												}
												?>
    											echo"
    										</select>
    									</td>
    								</tr>

    								<tr>
    									<td colspan="4">
    										<small>NB: <br>
    											<b>1. Sebelum mendaftar harap klik tombol Refresh terlebih dahulu.</b><br>
    											<b>2. Klik Tombol Cetak untuk Mencetak Hasil Pendaftaran</b><br>
    											<b>3. Cetak Rangkap 2 (Satu Untuk Arsip dan satu Rangkap Lagi Untuk Dibawah Pada Saat Pembayaran Ke Bank) </b>
    										</small>
    									</td>

    								<tr>
    									<td colspan="4">
    										<input type="submit" name="submit" value="Cetak" class="btn btn-primary">
    										<input type="submit" value="Refresh" onclick='window.location.reload();' class="btn btn-primary">
    									</td>
    								</tr>
    							</table>
    						</form>
    					</div>
    				</div>
    			</div>
    		<?php } else {
				echo "<h1>Maaf pendaftaran sudah di tutup, silahkan mendaftar di periode selanjutnya</h1>";
			}
		} else { ?>
    		<h1>Maaf pendaftaran sudah di tutup, silahkan mendaftar di periode selanjutnya</h1>
    	<?php } ?>

    	<?php
		include "koneksi.php";

		if (isset($_POST['submit'])) {
			$date = date("Y-m-d");
			$username = addslashes($_POST['username']);
			$ambil = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE username='$username' AND status='Terdaftar'"));
			if ($ambil > 0) {
				echo "<script>alert('ID $username sudah terdaftar, silahkan ulangi pendaftaran. Mohon klik tombol Refresh terlebih dahulu sebelum mendaftar.');window.location='index.php'</script>";
			} else {
				$dapat = mysqli_query($kon, "UPDATE tb_formulir5 SET nama_lengkap = '$_POST[nama_lengkap]',
														no_hp = '$_POST[no_hp]',
														pilihan_prodi = '$_POST[pilihan_prodi]',
														tanggal_daftar = '$date',
														status='Terdaftar' 
													WHERE id_formulir='$_POST[id]'");
				if ($dapat) {
					echo "<script>alert('Anda Berhasil Terdaftar, Cetak Hasil Pendaftaran dan Silahkan Lakukan Pembayaran Ke Bank ');window.location='sukses.php?id=$username'</script>";
				} else {
					echo "<script>alert('Anda Gagal Terdaftar');window.location='../../'</script>";
				}
			}
		}
		?>

    	</body>

    	</html>

    	<style>
    		/* Chrome, Safari, Edge, Opera */
    		input::-webkit-outer-spin-button,
    		input::-webkit-inner-spin-button {
    			-webkit-appearance: none;
    			margin: 0;
    		}

    		/* Firefox */
    		input[type=number] {
    			-moz-appearance: textfield;
    		}
    	</style>
<?php
error_reporting(0);
include "session.php";
?>
<?php
$date = date("Y-m-d");
require_once("../config/koneksi.php");
// Untuk foto
$nama_file = $_FILES['pengalaman_kerja']['name'];
$ukuran_file = $_FILES['pengalaman_kerja']['size'];
$tipe_file = $_FILES['pengalaman_kerja']['type'];
$tmp_file = $_FILES['pengalaman_kerja']['tmp_name'];
$nama = $_SESSION['username'];

// Folder tempat menyimpan gambarnya
$path = "../assets/berkas/$nama-" . $nama_file;

if (empty($nama_file)) {
	$qr = mysqli_query($kon, "update tb_formulir5 set tanggal_login = '$date'								
												  	where id_formulir= '$_POST[id_formulir]'");
	if ($qr) {
		echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='01_formulir.php'</script>";
	} else {
		echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
	}
} else {
	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg" || $tipe_file == "application/pdf") {
		if ($ukuran_file <= 1000000) {
			if (move_uploaded_file($tmp_file, $path)) {
				$qr = mysqli_query($kon, "update tb_formulir5 set pengalaman_kerja = '$nama-$nama_file' where id_formulir= '$_POST[id_formulir]'");
				if ($qr) {
					echo "<script>alert('Data berhasil diperbarui.');window.location='rpl_str_ners_pengalaman.php'</script>";
				} else {
					echo "<script>alert('Mohon maaf, data 1 gagal diperbarui.');window.location='rpl_str_ners_pengalaman.php'</script>";
				}
			} else {
				echo "<script>alert('Mohon maaf, Gambar 1 gagal diupload.');window.location='rpl_str_ners_pengalaman.php'</script>";
			}
		} else {
			echo "<script>alert('Mohon maaf, Gambar 1 tidak boleh melebihi 1 Mb.');window.location='rpl_str_ners_pengalaman.php'</script>";
		}
	} else {
		echo "<script>alert('Mohon maaf, type gambar 1 yang diperbolehkan .pdf');window.location='rpl_str_ners_pengalaman.php'</script>";
	}
}
?>

<?php
$date = date("Y-m-d");
require_once("../config/koneksi.php");
// Untuk foto
$nama_file = $_FILES['izin_pimpinan']['name'];
$ukuran_file = $_FILES['izin_pimpinan']['size'];
$tipe_file = $_FILES['izin_pimpinan']['type'];
$tmp_file = $_FILES['izin_pimpinan']['tmp_name'];
$_SESSION['username'];

// Folder tempat menyimpan gambarnya
$path = "../assets/berkas/$nama-" . $nama_file;

if (empty($nama_file)) {
	$qr = mysqli_query($kon, "update tb_formulir5 set tanggal_login = '$date'								
												  	where id_formulir= '$_POST[id_formulir]'");
	if ($qr) {
		echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='01_formulir.php'</script>";
	} else {
		echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
	}
} else {
	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg" || $tipe_file == "application/pdf") {
		if ($ukuran_file <= 1000000) {
			if (move_uploaded_file($tmp_file, $path)) {
				$qr = mysqli_query($kon, "update tb_formulir5 set izin_pimpinan = '$nama-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
				if ($qr) {
					echo "<script>alert('Data berhasil diperbarui.');window.location='rpl_str_ners_pengalaman.php'</script>";
				} else {
					echo "<script>alert('Mohon maaf, data 2 gagal diperbarui.');window.location='rpl_str_ners_pengalaman.php'</script>";
				}
			} else {
				echo "<script>alert('Mohon maaf, Gambar 2 gagal diupload.');window.location='rpl_str_ners_pengalaman.php'</script>";
			}
		} else {
			echo "<script>alert('Mohon maaf, Gambar 2 tidak boleh melebihi 1 Mb.');window.location='rpl_str_ners_pengalaman.php'</script>";
		}
	} else {
		echo "<script>alert('Mohon maaf, type 2 gambar yang diperbolehkan .pdf');window.location='rpl_str_ners_pengalaman.php'</script>";
	}
}
?>
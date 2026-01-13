<?php
error_reporting(0);
include "session.php";
?>
<?php
$date = date("Y-m-d");
require_once("../config/koneksi.php");
// Untuk foto
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$nama = $_SESSION['username'];
$nama_ortu = addslashes($_POST["nama_orang_tua"]);

// Folder tempat menyimpan gambarnya
$path = "../assets/img/$nama-" . $nama_file;

if (empty($nama_file)) {
	$qr = mysqli_query($kon, "update tb_formulir3 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													jurusan_sekolah = '$_POST[jurusan_sekolah]',
													smk_jenis = '$_POST[smk_jenis]',
													email = '$_POST[email]',
													no_hp_ortu = '$_POST[no_hp_ortu]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													berat_badan = '$_POST[berat_badan]',
													tinggi_badan = '$_POST[tinggi_badan]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$nama_ortu',
													nama_orang_tua_ibu = '$_POST[nama_orang_tua_ibu]',
													pekerjaan_orang_tua_ibu = '$_POST[pekerjaan_orang_tua_ibu]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													penghasilan_orang_tua = '$_POST[penghasilan_orang_tua]',
													kartu_bpjs = '$_POST[kartu_bpjs]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													akreditasi='$_POST[akreditasi]',
													daerah_asal = '$_POST[daerah_asal]',
													tanggal_login = '$date',
													status = 'Sudah Membayar'									
												  	where id_formulir= '$_POST[id_formulir]'");
	if ($qr) {
		echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='01_formulir.php'</script>";
	} else {
		echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
	}
} else {
	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg") {
		if ($ukuran_file <= 3000000) {
			if (move_uploaded_file($tmp_file, $path)) {
				$qr = mysqli_query($kon, "update tb_formulir3 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													email = '$_POST[email]',
													no_hp_ortu = '$_POST[no_hp_ortu]',
													smk_jenis = '$_POST[smk_jenis]',
													jurusan_sekolah = '$_POST[jurusan_sekolah]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													berat_badan = '$_POST[berat_badan]',
													tinggi_badan = '$_POST[tinggi_badan]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$nama_ortu',
													nama_orang_tua_ibu = '$_POST[nama_orang_tua_ibu]',
													pekerjaan_orang_tua_ibu = '$_POST[pekerjaan_orang_tua_ibu]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													penghasilan_orang_tua = '$_POST[penghasilan_orang_tua]',
													kartu_bpjs = '$_POST[kartu_bpjs]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													akreditasi='$_POST[akreditasi]',
													daerah_asal = '$_POST[daerah_asal]',
													tanggal_login = '$date',
													status = 'Sudah Membayar',					
													nama_foto = '$nama-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
				if ($qr) {
					echo "<script>alert('Data berhasil diperbarui.');window.location='01_formulir.php'</script>";
				} else {
					echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
				}
			} else {
				echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='01_formulir.php'</script>";
			}
		} else {
			echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='01_formulir.php'</script>";
		}
	} else {
		echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='01_formulir.php'</script>";
	}
}
?>	

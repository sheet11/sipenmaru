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
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/img/$nama-".$nama_file;
		
$query1_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB'");
$query1_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB'");
$jumlah1 = mysqli_num_rows($query1_4) + mysqli_num_rows($query1_5);

// Sesi 2
$query2_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB'");
$query2_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB'");
$jumlah2 = mysqli_num_rows($query2_4) + mysqli_num_rows($query2_5);

// Sesi 3
$query3_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB'");
$query3_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB'");
$jumlah3 = mysqli_num_rows($query3_4) + mysqli_num_rows($query3_5);

// Sesi 4
$query4_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB'");
$query4_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB'");
$jumlah4 = mysqli_num_rows($query4_4) + mysqli_num_rows($query4_5);

// Sesi 5
$query5_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB'");
$query5_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB'");
$jumlah5 = mysqli_num_rows($query5_4) + mysqli_num_rows($query5_5);

// Sesi 6
$query6_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB'");
$query6_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB'");
$jumlah6 = mysqli_num_rows($query6_4) + mysqli_num_rows($query6_5);

// Sesi 7
$query7_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB'");
$query7_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 7 Pukul 08.00 - 09.30 WIB'");
$jumlah7 = mysqli_num_rows($query7_4) + mysqli_num_rows($query7_5);

// Sesi 8
$query8_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB'");
$query8_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 8 Pukul 10.00 - 11.30 WIB'");
$jumlah8 = mysqli_num_rows($query8_4) + mysqli_num_rows($query8_5);

// Sesi 9
$query9_4 = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB'");
$query9_5 = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB'");
$jumlah9 = mysqli_num_rows($query9_4) + mysqli_num_rows($query9_5);


if ($jumlah1 < 120) {
	$sesi = 'Sesi 1 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2025-06-17';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah2 < 120) {
	$sesi = 'Sesi 2 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2025-06-17';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah3 < 120) {
	$sesi = 'Sesi 3 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2025-06-17';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah4 < 120) {
	$sesi = 'Sesi 4 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2025-06-18';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah5 < 120) {
	$sesi = 'Sesi 5 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2025-06-18';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah6 < 120) {
	$sesi = 'Sesi 6 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2025-06-18';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah7 < 120) {
	$sesi = 'Sesi 7 Pukul 08.00 - 09.30 WIB';
	$tgl_ujian = '2025-06-19';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah8 < 120) {
	$sesi = 'Sesi 8 Pukul 10.00 - 11.30 WIB';
	$tgl_ujian = '2025-06-19';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} elseif ($jumlah9 < 120) {
	$sesi = 'Sesi 9 Pukul 13.00 - 14.30 WIB';
	$tgl_ujian = '2025-06-19';
	$tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	$ruang_ujian = 'Laboratorium Komputer';
} else {
}

$data = mysqli_query($kon, "SELECT * FROM tb_formulir5 WHERE id_formulir='$_POST[id_formulir]'");
$a = mysqli_fetch_array($data);
if (empty($a['sesi_ujian'])) {
	$sesi_ujian = $sesi;
	$tanggal_ujian = $tgl_ujian;
	$tmpt_ujian = $tempat_ujian;
	$r_ujian = $ruang_ujian;
} else {
	$sesi_ujian = $a['sesi_ujian'];
	$tanggal_ujian = $a['tanggal_ujian'];
	$tmpt_ujian = $a['tempat_ujian'];
	$r_ujian = $a['ruang_ujian'];
}
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													berat_badan = '$_POST[berat_badan]',
													tinggi_badan = '$_POST[tinggi_badan]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													penghasilan_orang_tua = '$_POST[penghasilan_orang_tua]',
													kartu_bpjs = '$_POST[kartu_bpjs]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													akreditasi='$_POST[akreditasi]',
													daerah_asal = '$_POST[daerah_asal]',
													pilihan_prodi = '$_POST[pilihan_prodi]',
													tanggal_ujian = '$tanggal_ujian',
													sesi_ujian = '$sesi_ujian',
													tempat_ujian = '$tmpt_ujian',
													ruang_ujian = '$r_ujian',
													tanggal_login = '$date',
													status = 'Sudah Membayar'									
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='01_formulir.php'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
		}
	}
	else
	{
		if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg")
		{
			if($ukuran_file <= 1000000)
			{
				if(move_uploaded_file($tmp_file, $path))
				{
					$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													berat_badan = '$_POST[berat_badan]',
													tinggi_badan = '$_POST[tinggi_badan]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													penghasilan_orang_tua = '$_POST[penghasilan_orang_tua]',
													kartu_bpjs = '$_POST[kartu_bpjs]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													akreditasi='$_POST[akreditasi]',
													daerah_asal = '$_POST[daerah_asal]',
													tanggal_ujian = '$tanggal_ujian',
													sesi_ujian = '$sesi_ujian',
													tempat_ujian = '$tmpt_ujian',
													ruang_ujian = '$r_ujian',
													tanggal_login = '$date',
													status = 'Sudah Membayar',
													pilihan_prodi = '$_POST[pilihan_prodi]',						
													nama_foto = '$nama-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='01_formulir.php'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='01_formulir.php'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='01_formulir.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='01_formulir.php'</script>";
		}
	}
?>	

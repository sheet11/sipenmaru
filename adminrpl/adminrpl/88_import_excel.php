<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->
 
<?php 
// menghubungkan dengan koneksi
include '../config/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['excel']['name']) ;
move_uploaded_file($_FILES['excel']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['excel']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['excel']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$kode_polkes     = $data->val($i, 1);
	$matkul_polkes   = $data->val($i, 2);
	$sks_polkes  = $data->val($i, 3);
	$nama_jurusan  = $data->val($i, 4);
 
	if($kode_polkes != "" && $matkul_polkes != "" && $sks_polkes != "" && $nama_jurusan != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($kon,"INSERT into tb_asesmen values('','$kode_polkes','$matkul_polkes','$sks_polkes','$nama_jurusan')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['excel']['name']);
 
// alihkan halaman ke index.php
header("location:88_asesmen.php?berhasil=$berhasil");
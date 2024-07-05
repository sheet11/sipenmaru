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
		
// 		$query6 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' ");
// 	    $query9 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 9 Pukul 13.00 - 14.30 WIB' ");
// 	    $jumlah6 = mysqli_num_rows ($query6);
//         $jumlah9 = mysqli_num_rows ($query9);
        
//         if($jumlah6 < 100){
// 	        $sesi = 'Sesi 6 Pukul 13.00 - 14.30 WIB';
// 	        $tgl_ujian = '2024-06-26';
// 	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
// 	        $ruang_ujian = 'Laboratorium Komputer';
// 	    }elseif($jumlah9 < 100){
// 	        $sesi = 'Sesi 9 Pukul 13.00 - 14.30 WIB';
// 	        $tgl_ujian = '2024-06-27';
// 	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
// 	        $ruang_ujian = 'Laboratorium Komputer';
// 	    }else{
	        
// 	    }
	
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

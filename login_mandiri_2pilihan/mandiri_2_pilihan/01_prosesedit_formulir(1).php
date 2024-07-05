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
		$nama= $_SESSION['username'];
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/img/$nama-".$nama_file;
		
	    $query1 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 1 Pukul 08.00 - 09.30 WIB' ");
	    $query2 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 2 Pukul 10.00 - 11.30 WIB' ");
	    $query3 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 3 Pukul 13.00 - 14.30 WIB' ");
	    $query4 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 4 Pukul 08.00 - 09.30 WIB' ");
	    $query5 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 5 Pukul 10.00 - 11.30 WIB' ");
	    $query6 = mysqli_query ($kon,"SELECT * from tb_formulir4 where sesi_ujian='Sesi 6 Pukul 13.00 - 14.30 WIB' ");
        $jumlah1 = mysqli_num_rows ($query1); 
        $jumlah2 = mysqli_num_rows ($query2);
        $jumlah3 = mysqli_num_rows ($query3);
        $jumlah4 = mysqli_num_rows ($query4);
        $jumlah5 = mysqli_num_rows ($query5);
        $jumlah6 = mysqli_num_rows ($query6);
        
        if($jumlah1 < 100){
	        $sesi = 'Sesi 1 Pukul 08.00 - 09.30 WIB';
	        $tgl_ujian = '2024-06-25';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }elseif($jumlah2 < 100){
	        $sesi = 'Sesi 2 Pukul 10.00 - 11.30 WIB';
	        $tgl_ujian = '2024-06-25';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }elseif($jumlah3 < 100){
	        $sesi = 'Sesi 3 Pukul 13.00 - 14.30 WIB';
	        $tgl_ujian = '2024-06-25';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }elseif($jumlah4 < 100){
	        $sesi = 'Sesi 4 Pukul 08.00 - 09.30 WIB';
	        $tgl_ujian = '2024-06-26';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }elseif($jumlah5 < 100){
	        $sesi = 'Sesi 5 Pukul 10.00 - 11.30 WIB';
	        $tgl_ujian = '2024-06-26';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }elseif($jumlah6 < 100){
	        $sesi = 'Sesi 6 Pukul 13.00 - 14.30 WIB';
	        $tgl_ujian = '2024-06-26';
	        $tempat_ujian = 'Kampus A Poltekkes Bengkulu';
	        $ruang_ujian = 'Laboratorium Komputer';
	    }
        
	
	if(empty($nama_file))
	{
	    
		$qr = mysqli_query($kon,"update tb_formulir4 set alamat = '$_POST[alamat]',
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
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',	
													sesi_ujian = '$sesi',
													tanggal_ujian = '$tgl_ujian',
													tempat_ujian = '$tempat_ujian',
													ruang_ujian = '$ruang_ujian',
													tanggal_login = '$date',
													status = 'Sudah Membayar'									
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='01_formulir.php'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui silahkan coba input ulang.');window.location='01_formulir.php'</script>";
		}
	}
	else
	{
		if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg")
		{
			if($ukuran_file <= 3000000)
			{
				if(move_uploaded_file($tmp_file, $path))
				{
					$qr = mysqli_query($kon,"update tb_formulir4 set alamat = '$_POST[alamat]',
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
													sesi_ujian = '$sesi',
													tanggal_ujian = '$tgl_ujian',
													tempat_ujian = '$tempat_ujian',
													ruang_ujian = '$ruang_ujian',
													pilihan_prodi = '$_POST[pilihan_prodi]',	
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',					
													nama_foto = '$nama-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='01_formulir.php'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui silahkan coba input ulang.');window.location='01_formulir.php'</script>";
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

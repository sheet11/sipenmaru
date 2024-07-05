<?php 
	error_reporting(0);
	include "session.php"; 
?>
<?php
if($_POST['halaman'] == 0)
{
	
		require_once("../config/koneksi.php");
			// Untuk foto
		$nama_file = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$tipe_file = $_FILES['gambar']['type'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/img/".$nama_file;
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir2 set nama_lengkap = '$_POST[nama_lengkap]',
													alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													pilihan_prodi1 = '$_POST[pilihan_prodi1]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah Membayar',
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													ikut_tes_tertulis = '$_POST[ikut_tes_tertulis]'
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
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
					$qr = mysqli_query($kon,"update tb_formulir2 set nama_lengkap = '$_POST[nama_lengkap]',
													alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													pilihan_prodi1 = '$_POST[pilihan_prodi1]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah Membayar',
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													kut_ujian = '$_POST[ikut_tes_tertulis]',										
													nama_foto = '$nama_file'													
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='08_daftar_calon_mahasiswa.php?username=$_POST[username]'</script>";
		}
	}
}
else
{
	
		require_once("../config/koneksi.php");
			// Untuk foto
		$nama_file = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$tipe_file = $_FILES['gambar']['type'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/img/".$nama_file;
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir2 set nama_lengkap = '$_POST[nama_lengkap]',
													alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													pilihan_prodi1 = '$_POST[pilihan_prodi1]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah Membayar',
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													ikut_tes_tertulis = '$_POST[ikut_tes_tertulis]'
																								
												  		where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
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
					$qr = mysqli_query($kon,"update tb_formulir2 set 
													nama_lengkap = '$_POST[nama_lengkap]',
													alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													pilihan_prodi1 = '$_POST[pilihan_prodi1]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													golongan_darah = '$_POST[golongan_darah]',
													nik = '$_POST[nik]',
													nama_orang_tua = '$_POST[nama_orang_tua]',
													pekerjaan_orang_tua = '$_POST[pekerjaan_orang_tua]',
													nama_sekolah = '$_POST[nama_sekolah]',
													asal_sekolah = '$_POST[asal_sekolah]',
													keterangan_sekolah = '$_POST[keterangan_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah Membayar',
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													ikut_tes_tertulis = '$_POST[ikut_tes_tertulis]',										
													nama_foto = '$nama_file'													
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='08_daftar_calon_mahasiswa.php?halaman=$_POST[halaman]'</script>";
		}
	}
}
?>
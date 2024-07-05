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
		$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													nama_lengkap = '$_POST[nama_lengkap]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													asal_sekolah = '$_POST[asal_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													pilihan_prodi = '$_POST[pilihan_prodi]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',													
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													status = 'Sudah di Verifikasi'										
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
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
					$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													nama_lengkap = '$_POST[nama_lengkap]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													asal_sekolah = '$_POST[asal_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah di Verifikasi',
													pilihan_prodi = '$_POST[pilihan_prodi]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',													
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',											
													nama_foto = '$nama_file'													
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?username=$_POST[username]'</script>";
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
		$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													nama_lengkap = '$_POST[nama_lengkap]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													asal_sekolah = '$_POST[asal_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													pilihan_prodi = '$_POST[pilihan_prodi]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',													
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',
													status = 'Sudah di Verifikasi'
																								
												  		where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah gambar Formulir.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
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
					$qr = mysqli_query($kon,"update tb_formulir5 set alamat = '$_POST[alamat]',
													no_hp = '$_POST[no_hp]',
													nama_lengkap = '$_POST[nama_lengkap]',
													tempat_lahir = '$_POST[tempat_lahir]',
													tanggal_lahir = '$_POST[tanggal_lahir]',
													jenis_kelamin = '$_POST[jenis_kelamin]',
													agama = '$_POST[agama]',
													asal_sekolah = '$_POST[asal_sekolah]',
													daerah_asal = '$_POST[daerah_asal]',
													status = 'Sudah di Verifikasi',
													pilihan_prodi = '$_POST[pilihan_prodi]',
													pilihan_prodi2 = '$_POST[pilihan_prodi2]',												
													tempat_ujian = '$_POST[tempat_ujian]',
													ruang_ujian = '$_POST[ruang_ujian]',											
													nama_foto = '$nama_file'													
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 1 Mb.');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png');window.location='10_daftar_calon_mahasiswa_lintas_provinsi.php?halaman=$_POST[halaman]'</script>";
		}
	}
}
?>
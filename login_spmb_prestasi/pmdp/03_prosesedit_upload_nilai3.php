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
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir3 set tanggal_login = '$date'								
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
		if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg" || $tipe_file="application/pdf")
		{
			if($ukuran_file <= 500000)
			{
				if(move_uploaded_file($tmp_file, $path))
				{
					$qr = mysqli_query($kon,"update tb_formulir3 set 	photo3 = '$nama-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='03_upload_nilai.php'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='03_upload_nilai.php'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, Gambar gagal diupload.');window.location='03_upload_nilai.php'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, Gambar tidak boleh melebihi 500 kb.');window.location='03_upload_nilai.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Mohon maaf, type gambar yang diperbolehkan .jpg , .jpeg , .png , .pdf');window.location='03_upload_nilai.php'</script>";
		}
	}
?>	

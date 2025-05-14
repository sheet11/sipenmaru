<?php 
	error_reporting(0);
	include "session.php"; 
?>
<?php
		$date = date("Y-m-d");
		require_once("../config/koneksi.php");
			// Untuk foto
		$nama_file = $_FILES['konversi']['name'];
		$ukuran_file = $_FILES['konversi']['size'];
		$tipe_file = $_FILES['konversi']['type'];
		$tmp_file = $_FILES['konversi']['tmp_name'];
		$name = $_SESSION['username'];
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/berkas/$name-".$nama_file;
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir5 set tanggal_login = '$date'								
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui, dengan tanpa merubah berkas.');window.location='07_asesmen.php'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
		}
	}
	else
	{
		if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $tipe_file == "application/vnd.ms-excel")
		{
			if($ukuran_file <= 1000000)
			{
				if(move_uploaded_file($tmp_file, $path))
				{
					$qr = mysqli_query($kon,"update tb_formulir5 set 	file_1 = '$name-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='07_asesmen.php'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='07_asesmen.php'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, file gagal diupload.');window.location='07_upload.php'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, file tidak boleh melebihi 1 Mb.');window.location='07_upload.php'</script>";
			}
		}
		else
		{
			// var_dump($tipe_file);
			echo "<script>alert('Mohon maaf, type file yang diperbolehkan hanya .xlsx atau .xls');window.location='07_upload.php'</script>";
		}
	}
?>		


<?php
		$date = date("Y-m-d");
		require_once("../config/koneksi.php");
			// Untuk foto
		$nama_file = $_FILES['kredit']['name'];
		$ukuran_file = $_FILES['kredit']['size'];
		$tipe_file = $_FILES['kredit']['type'];
		$tmp_file = $_FILES['kredit']['tmp_name'];
		
		// Folder tempat menyimpan gambarnya
		$path = "../assets/berkas/$name-".$nama_file;
	
	if(empty($nama_file))
	{
		$qr = mysqli_query($kon,"update tb_formulir5 set tanggal_login = '$date'								
												  	where id_formulir= '$_POST[id_formulir]'");
		if($qr)
		{
			echo "<script>alert('Data berhasil diperbarui');window.location='01_formulir.php'</script>";
		}
		else
		{
			echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='01_formulir.php'</script>";
		}
	}
	else
	{
		if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $tipe_file == "application/vnd.ms-excel")
		{
			if($ukuran_file <= 1000000)
			{
				if(move_uploaded_file($tmp_file, $path))
				{
					$qr = mysqli_query($kon,"update tb_formulir5 set 	file_2 = '$name-$nama_file'		
												  	where id_formulir= '$_POST[id_formulir]'");
					if($qr)
					{
						echo "<script>alert('Data berhasil diperbarui.');window.location='07_asesmen.php'</script>";
					}
					else
					{
						echo "<script>alert('Mohon maaf, data gagal diperbarui.');window.location='07_asesmen.php'</script>";
					}
				}
				else
				{
					echo "<script>alert('Mohon maaf, file gagal diupload.');window.location='07_upload.php'</script>";
				}
			}
			else
			{
				echo "<script>alert('Mohon maaf, file tidak boleh melebihi 1 Mb.');window.location='07_upload.php'</script>";
			}
		}
		else
		{
			// var_dump($tipe_file);
			echo "<script>alert('Mohon maaf, type file yang diperbolehkan hanya .xlsx atau .xls' );window.location='07_upload.php'</script>";
		}
	}
?>	
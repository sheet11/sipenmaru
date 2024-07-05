<?php error_reporting(0); ?>
<?php include "session.php"; ?>
<?php
		require_once("../config/koneksi.php");
		
		
		$query=mysqli_query($kon,"update tb_pendaftaran_2 set user_id = '$_POST[user_id]',
														namalengkap = '$_POST[namalengkap]',
														username = '$_POST[username]',
														password = '$_POST[password]',
														ruang_ujian = '$_POST[ruang_ujian]',
														status_pembayaran = 'Sudah Membayar'
												  		where user_id= '$_POST[user_id]'");
														
				
							
																		
				if($query) { 
			echo "<script>alert('Data Berhasil di Update');window.location='08_daftar_calon_mahasiswa.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Update');window.location='08_daftar_calon_mahasiswa.php'</script>";
	}
?>	

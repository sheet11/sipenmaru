<?php 
	error_reporting(0); 
    include "session.php"; 
?> 

<?php
		require_once("../config/koneksi.php"); 
		$query=mysqli_query($kon,"update tb_nilai set semester = '$_POST[semester]', 
												peng_agama = '$_POST[peng_agama]',
												peng_kewarganegaraan= '$_POST[peng_kewarganegaraan]',
												peng_bahasa_indonesia = '$_POST[peng_bahasa_indonesia]',
												peng_bahasa_inggris = '$_POST[peng_bahasa_inggris]',
												peng_matematika = '$_POST[peng_matematika]',
												peng_fisika = '$_POST[peng_fisika]',
												peng_biologi = '$_POST[peng_biologi]',
												peng_kimia = '$_POST[peng_kimia]',
												peng_sejarah = '$_POST[peng_sejarah]',
												peng_geografi = '$_POST[peng_geografi]',
												peng_ekonomi = '$_POST[peng_ekonomi]',												
												peng_sosiologi = '$_POST[peng_sosiologi]',
												peng_senibudaya = '$_POST[peng_senibudaya]',
												peng_pend_jasmani = '$_POST[peng_pend_jasmani]',
												peng_teknologi_informasi = '$_POST[peng_teknologi_informasi]',
												peng_keterampilan = '$_POST[peng_keterampilan]',
												peng_mulok = '$_POST[peng_mulok]',
												prak_agama = '$_POST[prak_agama]',
												prak_kewarganegaraan= '$_POST[prak_kewarganegaraan]',
												prak_bahasa_indonesia = '$_POST[prak_bahasa_indonesia]',
												prak_bahasa_inggris = '$_POST[prak_bahasa_inggris]',
												prak_matematika = '$_POST[prak_matematika]',
												prak_fisika = '$_POST[prak_fisika]',
												prak_biologi = '$_POST[prak_biologi]',
												prak_kimia = '$_POST[prak_kimia]',
												prak_sejarah = '$_POST[prak_sejarah]',
												prak_geografi = '$_POST[prak_geografi]',
												prak_ekonomi = '$_POST[prak_ekonomi]',												
												prak_sosiologi = '$_POST[prak_sosiologi]',
												prak_senibudaya = '$_POST[prak_senibudaya]',
												prak_pend_jasmani = '$_POST[prak_pend_jasmani]',
												prak_teknologi_informasi = '$_POST[prak_teknologi_informasi]',
												prak_keterampilan = '$_POST[prak_keterampilan]',
												prak_mulok = '$_POST[prak_mulok]'
											  	where id_nilai = '$_POST[id_nilai]'");
														
	if($query) 
		{ 
			echo "<script>alert('Data Berhasil di Update');window.location='02_lihat_nilai.php'</script>";
		} 
	
	else 
		{
			echo "<script>alert('Data Gagal di Update');window.location='02_lihat_nilai.php'</script>";
		}
?>	


<!-- Script Cadangan  
  -->
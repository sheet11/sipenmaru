	<script src="../assets/js/jquery-1.11.0.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

<?php
	include "session.php";
	error_reporting(0);
?>

<?php

	include"../config/koneksi.php";
	include("bar128.php");
  	include("library.php");
  	include("fucnt_tgl.php");	
	$query=mysqli_query($kon,"select * from tb_nilai, tb_formulir3 where tb_nilai.username=tb_formulir3.username AND tb_nilai.username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
?>
<html>
	<body>
		<table class="table">
			<tr >
		    	<td><img src="../assets/img_app/logo-kemenkes.png" width="150" height="100"/></td>
		    	<td align="center"><strong>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2023/2024</strong></td>
		    	<td align="center"><img src="../assets/img_app/logo.png" width="100" height="100"/></td>
		  	</tr>
		  	
		  	<tr>
		  		<td colspan="3"><hr></hr></td>
		  	</tr>
		</table>

        <table class="table">
          	<tr>
	            <td valign="top"  width="200">ID</td>
	            <td valign="top">:</td>
	            <td><?php echo $a['username']; ?></td>
          	</tr>

          	<tr>
            	<td valign="top">Nama</td>
            	<td valign="top">:</td>
            	<td><?php echo $a['nama_lengkap']; ?></td>
          	</tr>
		</table>
		
		<table class="table table-bordered">
			<tr class="bg-primary">
				<th rowspan="3" align="center">NO</th>
				<th rowspan="3" align="center">MATA PELAJARAN</th>
				<th colspan="10" align="center">Semester</th>
			</tr>
			<tr class="bg-primary">
				<th colspan="2" align="center">1</th>
				<th colspan="2" align="center">2</th>
				<th colspan="2" align="center">3</th>
				<th colspan="2" align="center">4</th>
				<th colspan="2" align="center">5</th>
			</tr>
			<tr class="bg-primary">
				<th>Peng</th>
				<th>Prak</th>
				<th>Peng</th>
				<th>Prak</th>
				<th>Peng</th>
				<th>Prak</th>
				<th>Peng</th>
				<th>Prak</th>
				<th>Peng</th>
				<th>Prak</th>
			</tr>
			<tr>
				<?php
					$satu=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '1'"));
					$dua=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '2'"));
					$tiga=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '3'"));
					$empat=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '4'"));
					$lima=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '5'"));
					$enam=mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' AND semester = '6'"));
					
					// Semester 1
					if(!empty($satu['peng_agama'])){ $peng1a = 1;}else{ $peng1a = 0;}
					if(!empty($satu['peng_kewarganegaraan'])){ $peng1b = 1;}else{ $peng1b = 0;}
					if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}
					if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}
					if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}
					if(!empty($satu['peng_fisika'])){ $peng1f = 1;}else{ $peng1f = 0;}
					if(!empty($satu['peng_biologi'])){ $peng1g = 1;}else{ $peng1g = 0;}
					if(!empty($satu['peng_kimia'])){ $peng1h = 1;}else{ $peng1h = 0;}
					if(!empty($satu['peng_sejarah'])){ $peng1i = 1;}else{ $peng1i = 0;}
					if(!empty($satu['peng_geografi'])){ $peng1j = 1;}else{ $peng1j = 0;}
					if(!empty($satu['peng_ekonomi'])){ $peng1k = 1;}else{ $peng1k = 0;}
					if(!empty($satu['peng_sosiologi'])){ $peng1l = 1;}else{ $peng1l = 0;}
					if(!empty($satu['peng_senibudaya'])){ $peng1m = 1;}else{ $peng1m = 0;}
					if(!empty($satu['peng_pend_jasmani'])){ $peng1n = 1;}else{ $peng1n = 0;}
					if(!empty($satu['peng_teknologi_informasi'])){ $peng1o = 1;}else{ $peng1o = 0;}
					if(!empty($satu['peng_keterampilan'])){ $peng1p = 1;}else{ $peng1p = 0;}
					if(!empty($satu['peng_mulok'])){ $peng1q = 1;}else{ $peng1q = 0;}
					
					if(!empty($satu['prak_agama'])){ $prak1a = 1;}else{ $prak1a = 0;}
					if(!empty($satu['prak_kewarganegaraan'])){ $prak1b = 1;}else{ $prak1b = 0;}
					if(!empty($satu['prak_bahasa_indonesia'])){ $prak1c = 1;}else{ $prak1c = 0;}
					if(!empty($satu['prak_bahasa_inggris'])){ $prak1d = 1;}else{ $prak1d = 0;}
					if(!empty($satu['prak_matematika'])){ $prak1e = 1;}else{ $prak1e = 0;}
					if(!empty($satu['prak_fisika'])){ $prak1f = 1;}else{ $prak1f = 0;}
					if(!empty($satu['prak_biologi'])){ $prak1g = 1;}else{ $prak1g = 0;}
					if(!empty($satu['prak_kimia'])){ $prak1h = 1;}else{ $prak1h = 0;}
					if(!empty($satu['prak_sejarah'])){ $prak1i = 1;}else{ $prak1i = 0;}
					if(!empty($satu['prak_geografi'])){ $prak1j = 1;}else{ $prak1j = 0;}
					if(!empty($satu['prak_ekonomi'])){ $prak1k = 1;}else{ $prak1k = 0;}
					if(!empty($satu['prak_sosiologi'])){ $prak1l = 1;}else{ $prak1l = 0;}
					if(!empty($satu['prak_senibudaya'])){ $prak1m = 1;}else{ $prak1m = 0;}
					if(!empty($satu['prak_pend_jasmani'])){ $prak1n = 1;}else{ $prak1n = 0;}
					if(!empty($satu['prak_teknologi_informasi'])){ $prak1o = 1;}else{ $prak1o = 0;}
					if(!empty($satu['prak_keterampilan'])){ $prak1p = 1;}else{ $prak1p = 0;}
					if(!empty($satu['prak_mulok'])){ $prak1q = 1;}else{ $prak1q = 0;}
					
					$totalpeng1 = $satu['peng_agama'] + $satu['peng_kewarganegaraan'] + $satu['peng_bahasa_indonesia'] + $satu['peng_bahasa_inggris'] + $satu['peng_matematika'] + $satu['peng_fisika'] + $satu['peng_biologi'] + $satu['peng_kimia'] + $satu['peng_sejarah'] + $satu['peng_geografi'] + $satu['peng_ekonomi'] + $satu['peng_sosiologi'] + $satu['peng_senibudaya'] + $satu['peng_pend_jasmani'] + $satu['peng_teknologi_informasi'] + $satu['peng_keterampilan'] + $satu['peng_mulok'];
					$countpeng1 = $peng1a + $peng1b + $peng1c + $peng1d + $peng1e + $peng1f + $peng1g + $peng1h + $peng1i + $peng1j + $peng1k + $peng1l + $peng1m + $peng1n + $peng1o + $peng1p + $peng1q;
					$jumlahpeng1 = number_format(($totalpeng1/$countpeng1), 1, '.', '');
					if(!empty($jumlahpeng1)){$countjumlahpeng1 = 1;}else{$countjumlahpeng1 = 0;}
					
					$totalprak1 = $satu['prak_agama'] + $satu['prak_kewarganegaraan'] + $satu['prak_bahasa_indonesia'] + $satu['prak_bahasa_inggris'] + $satu['prak_matematika'] + $satu['prak_fisika'] + $satu['prak_biologi'] + $satu['prak_kimia'] + $satu['prak_sejarah'] + $satu['prak_geografi'] + $satu['prak_ekonomi'] + $satu['prak_sosiologi'] + $satu['prak_senibudaya'] + $satu['prak_pend_jasmani'] + $satu['prak_teknologi_informasi'] + $satu['prak_keterampilan'] + $satu['prak_mulok'];
					$countprak1 = $prak1a + $prak1b + $prak1c + $prak1d + $prak1e + $prak1f + $prak1g + $prak1h + $prak1i + $prak1j + $prak1k + $prak1l + $prak1m + $prak1n + $prak1o + $prak1p + $prak1q;
					$jumlahprak1 = number_format(($totalprak1/$countprak1), 1, '.', '');
					if(!empty($jumlahprak1)){$countjumlahprak1 = 1;}else{$countjumlahprak1 = 0;}
					
					$totalrata1 = number_format(($jumlahpeng1+$jumlahprak1)/($countjumlahpeng1+$countjumlahprak1), 1, '.', '');
					
					// Semester 2
					if(!empty($dua['peng_agama'])){ $peng2a = 1;}else{ $peng2a = 0;}
					if(!empty($dua['peng_kewarganegaraan'])){ $peng2b = 1;}else{ $peng2b = 0;}
					if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}
					if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}
					if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}
					if(!empty($dua['peng_fisika'])){ $peng2f = 1;}else{ $peng2f = 0;}
					if(!empty($dua['peng_biologi'])){ $peng2g = 1;}else{ $peng2g = 0;}
					if(!empty($dua['peng_kimia'])){ $peng2h = 1;}else{ $peng2h = 0;}
					if(!empty($dua['peng_sejarah'])){ $peng2i = 1;}else{ $peng2i = 0;}
					if(!empty($dua['peng_geografi'])){ $peng2j = 1;}else{ $peng2j = 0;}
					if(!empty($dua['peng_ekonomi'])){ $peng2k = 1;}else{ $peng2k = 0;}
					if(!empty($dua['peng_sosiologi'])){ $peng2l = 1;}else{ $peng2l = 0;}
					if(!empty($dua['peng_senibudaya'])){ $peng2m = 1;}else{ $peng2m = 0;}
					if(!empty($dua['peng_pend_jasmani'])){ $peng2n = 1;}else{ $peng2n = 0;}
					if(!empty($dua['peng_teknologi_informasi'])){ $peng2o = 1;}else{ $peng2o = 0;}
					if(!empty($dua['peng_keterampilan'])){ $peng2p = 1;}else{ $peng2p = 0;}
					if(!empty($dua['peng_mulok'])){ $peng2q = 1;}else{ $peng2q = 0;}
					
					if(!empty($dua['prak_agama'])){ $prak2a = 1;}else{ $prak2a = 0;}
					if(!empty($dua['prak_kewarganegaraan'])){ $prak2b = 1;}else{ $prak2b = 0;}
					if(!empty($dua['prak_bahasa_indonesia'])){ $prak2c = 1;}else{ $prak2c = 0;}
					if(!empty($dua['prak_bahasa_inggris'])){ $prak2d = 1;}else{ $prak2d = 0;}
					if(!empty($dua['prak_matematika'])){ $prak2e = 1;}else{ $prak2e = 0;}
					if(!empty($dua['prak_fisika'])){ $prak2f = 1;}else{ $prak2f = 0;}
					if(!empty($dua['prak_biologi'])){ $prak2g = 1;}else{ $prak2g = 0;}
					if(!empty($dua['prak_kimia'])){ $prak2h = 1;}else{ $prak2h = 0;}
					if(!empty($dua['prak_sejarah'])){ $prak2i = 1;}else{ $prak2i = 0;}
					if(!empty($dua['prak_geografi'])){ $prak2j = 1;}else{ $prak2j = 0;}
					if(!empty($dua['prak_ekonomi'])){ $prak2k = 1;}else{ $prak2k = 0;}
					if(!empty($dua['prak_sosiologi'])){ $prak2l = 1;}else{ $prak2l = 0;}
					if(!empty($dua['prak_senibudaya'])){ $prak2m = 1;}else{ $prak1m = 0;}
					if(!empty($dua['prak_pend_jasmani'])){ $prak2n = 1;}else{ $prak2n = 0;}
					if(!empty($dua['prak_teknologi_informasi'])){ $prak2o = 1;}else{ $prak2o = 0;}
					if(!empty($dua['prak_keterampilan'])){ $prak2p = 1;}else{ $prak2p = 0;}
					if(!empty($dua['prak_mulok'])){ $prak2q = 1;}else{ $prak2q = 0;}					
					
					$totalpeng2 = $dua['peng_agama'] + $dua['peng_kewarganegaraan'] + $dua['peng_bahasa_indonesia'] + $dua['peng_bahasa_inggris'] + $dua['peng_matematika'] + $dua['peng_fisika'] + $dua['peng_biologi'] + $dua['peng_kimia'] + $dua['peng_sejarah'] + $dua['peng_geografi'] + $dua['peng_ekonomi'] + $dua['peng_sosiologi'] + $dua['peng_senibudaya'] + $dua['peng_pend_jasmani'] + $dua['peng_teknologi_informasi'] + $dua['peng_keterampilan'] + $dua['peng_mulok'];
					$countpeng2 = $peng2a + $peng2b + $peng2c + $peng2d + $peng2e + $peng2f + $peng2g + $peng2h + $peng2i + $peng2j + $peng2k + $peng2l + $peng2m + $peng2n + $peng2o + $peng2p + $peng2q;
					$jumlahpeng2 = number_format(($totalpeng2/$countpeng2), 1, '.', '');
					if(!empty($jumlahpeng2)){$countjumlahpeng2 = 1;}else{$countjumlahpeng2 = 0;}
					
					$totalprak2 = $dua['prak_agama'] + $dua['prak_kewarganegaraan'] + $dua['prak_bahasa_indonesia'] + $dua['prak_bahasa_inggris'] + $dua['prak_matematika'] + $dua['prak_fisika'] + $dua['prak_biologi'] + $dua['prak_kimia'] + $dua['prak_sejarah'] + $dua['prak_geografi'] + $dua['prak_ekonomi'] + $dua['prak_sosiologi'] + $dua['prak_senibudaya'] + $dua['prak_pend_jasmani'] + $dua['prak_teknologi_informasi'] + $dua['prak_keterampilan'] + $dua['prak_mulok'];
					$countprak2 = $prak2a + $prak2b + $prak2c + $prak2d + $prak2e + $prak2f + $prak2g + $prak2h + $prak2i + $prak2j + $prak2k + $prak2l + $prak2m + $prak2n + $prak2o + $prak2p + $prak2q;
					$jumlahprak2 = number_format(($totalprak2/$countprak2), 1, '.', '');
					if(!empty($jumlahprak2)){$countjumlahprak2 = 1;}else{$countjumlahprak2 = 0;}
					
					$totalrata2 = number_format(($jumlahpeng2+$jumlahprak2)/($countjumlahpeng2+$countjumlahprak2), 1, '.', '');
					
					// Semester 3
					if(!empty($tiga['peng_agama'])){ $peng3a = 1;}else{ $peng3a = 0;}
					if(!empty($tiga['peng_kewarganegaraan'])){ $peng3b = 1;}else{ $peng3b = 0;}
					if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}
					if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}
					if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}
					if(!empty($tiga['peng_fisika'])){ $peng3f = 1;}else{ $peng3f = 0;}
					if(!empty($tiga['peng_biologi'])){ $peng3g = 1;}else{ $peng3g = 0;}
					if(!empty($tiga['peng_kimia'])){ $peng3h = 1;}else{ $peng3h = 0;}
					if(!empty($tiga['peng_sejarah'])){ $peng3i = 1;}else{ $peng3i = 0;}
					if(!empty($tiga['peng_geografi'])){ $peng3j = 1;}else{ $peng3j = 0;}
					if(!empty($tiga['peng_ekonomi'])){ $peng3k = 1;}else{ $peng3k = 0;}
					if(!empty($tiga['peng_sosiologi'])){ $peng3l = 1;}else{ $peng3l = 0;}
					if(!empty($tiga['peng_senibudaya'])){ $peng3m = 1;}else{ $peng3m = 0;}
					if(!empty($tiga['peng_pend_jasmani'])){ $peng3n = 1;}else{ $peng3n = 0;}
					if(!empty($tiga['peng_teknologi_informasi'])){ $peng3o = 1;}else{ $peng3o = 0;}
					if(!empty($tiga['peng_keterampilan'])){ $peng3p = 1;}else{ $peng3p = 0;}
					if(!empty($tiga['peng_mulok'])){ $peng3q = 1;}else{ $peng3q = 0;}
					
					if(!empty($tiga['prak_agama'])){ $prak3a = 1;}else{ $prak3a = 0;}
					if(!empty($tiga['prak_kewarganegaraan'])){ $prak3b = 1;}else{ $prak3b = 0;}
					if(!empty($tiga['prak_bahasa_indonesia'])){ $prak3c = 1;}else{ $prak3c = 0;}
					if(!empty($tiga['prak_bahasa_inggris'])){ $prak3d = 1;}else{ $prak3d = 0;}
					if(!empty($tiga['prak_matematika'])){ $prak3e = 1;}else{ $prak3e = 0;}
					if(!empty($tiga['prak_fisika'])){ $prak3f = 1;}else{ $prak3f = 0;}
					if(!empty($tiga['prak_biologi'])){ $prak3g = 1;}else{ $prak3g = 0;}
					if(!empty($tiga['prak_kimia'])){ $prak3h = 1;}else{ $prak3h = 0;}
					if(!empty($tiga['prak_sejarah'])){ $prak3i = 1;}else{ $prak3i = 0;}
					if(!empty($tiga['prak_geografi'])){ $prak3j = 1;}else{ $prak3j = 0;}
					if(!empty($tiga['prak_ekonomi'])){ $prak3k = 1;}else{ $prak3k = 0;}
					if(!empty($tiga['prak_sosiologi'])){ $prak3l = 1;}else{ $prak3l = 0;}
					if(!empty($tiga['prak_senibudaya'])){ $prak3m = 1;}else{ $prak3m = 0;}
					if(!empty($tiga['prak_pend_jasmani'])){ $prak3n = 1;}else{ $prak3n = 0;}
					if(!empty($tiga['prak_teknologi_informasi'])){ $prak3o = 1;}else{ $prak3o = 0;}
					if(!empty($tiga['prak_keterampilan'])){ $prak3p = 1;}else{ $prak3p = 0;}
					if(!empty($tiga['prak_mulok'])){ $prak3q = 1;}else{ $prak3q = 0;}
					
					$totalpeng3 = $tiga['peng_agama'] + $tiga['peng_kewarganegaraan'] + $tiga['peng_bahasa_indonesia'] + $tiga['peng_bahasa_inggris'] + $tiga['peng_matematika'] + $tiga['peng_fisika'] + $tiga['peng_biologi'] + $tiga['peng_kimia'] + $tiga['peng_sejarah'] + $tiga['peng_geografi'] + $tiga['peng_ekonomi'] + $tiga['peng_sosiologi'] + $tiga['peng_senibudaya'] + $tiga['peng_pend_jasmani'] + $tiga['peng_teknologi_informasi'] + $tiga['peng_keterampilan'] + $tiga['peng_mulok'];
					$countpeng3 = $peng3a + $peng3b + $peng3c + $peng3d + $peng3e + $peng3f + $peng3g + $peng3h + $peng3i + $peng3j + $peng3k + $peng3l + $peng3m + $peng3n + $peng3o + $peng3p + $peng3q;
					$jumlahpeng3 = number_format(($totalpeng3/$countpeng3), 1, '.', '');
					if(!empty($jumlahpeng3)){$countjumlahpeng3 = 1;}else{$countjumlahpeng3 = 0;}
					
					$totalprak3 = $tiga['prak_agama'] + $tiga['prak_kewarganegaraan'] + $tiga['prak_bahasa_indonesia'] + $tiga['prak_bahasa_inggris'] + $tiga['prak_matematika'] + $tiga['prak_fisika'] + $tiga['prak_biologi'] + $tiga['prak_kimia'] + $tiga['prak_sejarah'] + $tiga['prak_geografi'] + $tiga['prak_ekonomi'] + $tiga['prak_sosiologi'] + $tiga['prak_senibudaya'] + $tiga['prak_pend_jasmani'] + $tiga['prak_teknologi_informasi'] + $tiga['prak_keterampilan'] + $tiga['prak_mulok'];
					$countprak3 = $prak3a + $prak3b + $prak3c + $prak3d + $prak3e + $prak3f + $prak3g + $prak3h + $prak3i + $prak3j + $prak3k + $prak3l + $prak3m + $prak3n + $prak3o + $prak3p + $prak3q;
					$jumlahprak3 = number_format(($totalprak3/$countprak3), 1, '.', '');
					if(!empty($jumlahprak3)){$countjumlahprak3 = 1;}else{$countjumlahprak3 = 0;}
					
					$totalrata3 =  number_format(($jumlahpeng3+$jumlahprak3)/($countjumlahpeng3+$countjumlahprak3), 1, '.', '');					
					
					// Semester 4
					if(!empty($empat['peng_agama'])){ $peng4a = 1;}else{ $peng4a = 0;}
					if(!empty($empat['peng_kewarganegaraan'])){ $peng4b = 1;}else{ $peng4b = 0;}
					if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}
					if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}
					if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}
					if(!empty($empat['peng_fisika'])){ $peng4f = 1;}else{ $peng4f = 0;}
					if(!empty($empat['peng_biologi'])){ $peng4g = 1;}else{ $peng4g = 0;}
					if(!empty($empat['peng_kimia'])){ $peng4h = 1;}else{ $peng4h = 0;}
					if(!empty($empat['peng_sejarah'])){ $peng4i = 1;}else{ $peng4i = 0;}
					if(!empty($empat['peng_geografi'])){ $peng4j = 1;}else{ $peng4j = 0;}
					if(!empty($empat['peng_ekonomi'])){ $peng4k = 1;}else{ $peng4k = 0;}
					if(!empty($empat['peng_sosiologi'])){ $peng4l = 1;}else{ $peng4l = 0;}
					if(!empty($empat['peng_senibudaya'])){ $peng4m = 1;}else{ $peng4m = 0;}
					if(!empty($empat['peng_pend_jasmani'])){ $peng4n = 1;}else{ $peng4n = 0;}
					if(!empty($empat['peng_teknologi_informasi'])){ $peng4o = 1;}else{ $peng4o = 0;}
					if(!empty($empat['peng_keterampilan'])){ $peng4p = 1;}else{ $peng4p = 0;}
					if(!empty($empat['peng_mulok'])){ $peng4q = 1;}else{ $peng4q = 0;}
					
					if(!empty($empat['prak_agama'])){ $prak4a = 1;}else{ $prak4a = 0;}
					if(!empty($empat['prak_kewarganegaraan'])){ $prak4b = 1;}else{ $prak4b = 0;}
					if(!empty($empat['prak_bahasa_indonesia'])){ $prak4c = 1;}else{ $prak4c = 0;}
					if(!empty($empat['prak_bahasa_inggris'])){ $prak4d = 1;}else{ $prak4d = 0;}
					if(!empty($empat['prak_matematika'])){ $prak4e = 1;}else{ $prak4e = 0;}
					if(!empty($empat['prak_fisika'])){ $prak4f = 1;}else{ $prak4f = 0;}
					if(!empty($empat['prak_biologi'])){ $prak4g = 1;}else{ $prak4g = 0;}
					if(!empty($empat['prak_kimia'])){ $prak4h = 1;}else{ $prak4h = 0;}
					if(!empty($empat['prak_sejarah'])){ $prak4i = 1;}else{ $prak4i = 0;}
					if(!empty($empat['prak_geografi'])){ $prak4j = 1;}else{ $prak4j = 0;}
					if(!empty($empat['prak_ekonomi'])){ $prak4k = 1;}else{ $prak4k = 0;}
					if(!empty($empat['prak_sosiologi'])){ $prak4l = 1;}else{ $prak4l = 0;}
					if(!empty($empat['prak_senibudaya'])){ $prak4m = 1;}else{ $prak4m = 0;}
					if(!empty($empat['prak_pend_jasmani'])){ $prak4n = 1;}else{ $prak4n = 0;}
					if(!empty($empat['prak_teknologi_informasi'])){ $prak4o = 1;}else{ $prak4o = 0;}
					if(!empty($empat['prak_keterampilan'])){ $prak4p = 1;}else{ $prak4p = 0;}
					if(!empty($empat['prak_mulok'])){ $prak4q = 1;}else{ $prak4q = 0;}
					
					$totalpeng4 = $empat['peng_agama'] + $empat['peng_kewarganegaraan'] + $empat['peng_bahasa_indonesia'] + $empat['peng_bahasa_inggris'] + $empat['peng_matematika'] + $empat['peng_fisika'] + $empat['peng_biologi'] + $empat['peng_kimia'] + $empat['peng_sejarah'] + $empat['peng_geografi'] + $empat['peng_ekonomi'] + $empat['peng_sosiologi'] + $empat['peng_senibudaya'] + $empat['peng_pend_jasmani'] + $empat['peng_teknologi_informasi'] + $empat['peng_keterampilan'] + $empat['peng_mulok'];
					$countpeng4 = $peng4a + $peng4b + $peng4c + $peng4d + $peng4e + $peng4f + $peng4g + $peng4h + $peng4i + $peng4j + $peng4k + $peng4l + $peng4m + $peng4n + $peng4o + $peng4p + $peng4q;
					$jumlahpeng4 = number_format(($totalpeng4/$countpeng4), 1, '.', '');
					if(!empty($jumlahpeng4)){$countjumlahpeng4 = 1;}else{$countjumlahpeng4 = 0;}
					
					$totalprak4 = $empat['prak_agama'] + $empat['prak_kewarganegaraan'] + $empat['prak_bahasa_indonesia'] + $empat['prak_bahasa_inggris'] + $empat['prak_matematika'] + $empat['prak_fisika'] + $empat['prak_biologi'] + $empat['prak_kimia'] + $empat['prak_sejarah'] + $empat['prak_geografi'] + $empat['prak_ekonomi'] + $empat['prak_sosiologi'] + $empat['prak_senibudaya'] + $empat['prak_pend_jasmani'] + $empat['prak_teknologi_informasi'] + $empat['prak_keterampilan'] + $empat['prak_mulok'];
					$countprak4 = $prak4a + $prak4b + $prak4c + $prak4d + $prak4e + $prak4f + $prak4g + $prak4h + $prak4i + $prak4j + $prak4k + $prak4l + $prak4m + $prak4n + $prak4o + $prak4p + $prak4q;
					$jumlahprak4 = number_format(($totalprak4/$countprak4), 1, '.', '');
					if(!empty($jumlahprak4)){$countjumlahprak4 = 1;}else{$countjumlahprak4 = 0;}
					
					$totalrata4 = number_format(($jumlahpeng4+$jumlahprak4)/($countjumlahpeng4+$countjumlahprak4), 1, '.', '');
										
					// Semester 5
					if(!empty($lima['peng_agama'])){ $peng5a = 1;}else{ $peng5a = 0;}
					if(!empty($lima['peng_kewarganegaraan'])){ $peng5b = 1;}else{ $peng5b = 0;}
					if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}
					if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}
					if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}
					if(!empty($lima['peng_fisika'])){ $peng5f = 1;}else{ $peng5f = 0;}
					if(!empty($lima['peng_biologi'])){ $peng5g = 1;}else{ $peng5g = 0;}
					if(!empty($lima['peng_kimia'])){ $peng5h = 1;}else{ $peng5h = 0;}
					if(!empty($lima['peng_sejarah'])){ $peng5i = 1;}else{ $peng5i = 0;}
					if(!empty($lima['peng_geografi'])){ $peng5j = 1;}else{ $peng5j = 0;}
					if(!empty($lima['peng_ekonomi'])){ $peng5k = 1;}else{ $peng5k = 0;}
					if(!empty($lima['peng_sosiologi'])){ $peng5l = 1;}else{ $peng5l = 0;}
					if(!empty($lima['peng_senibudaya'])){ $peng5m = 1;}else{ $peng5m = 0;}
					if(!empty($lima['peng_pend_jasmani'])){ $peng5n = 1;}else{ $peng5n = 0;}
					if(!empty($lima['peng_teknologi_informasi'])){ $peng5o = 1;}else{ $peng5o = 0;}
					if(!empty($lima['peng_keterampilan'])){ $peng5p = 1;}else{ $peng5p = 0;}
					if(!empty($lima['peng_mulok'])){ $peng5q = 1;}else{ $peng5q = 0;}
					
					if(!empty($lima['prak_agama'])){ $prak5a = 1;}else{ $prak5a = 0;}
					if(!empty($lima['prak_kewarganegaraan'])){ $prak5b = 1;}else{ $prak5b = 0;}
					if(!empty($lima['prak_bahasa_indonesia'])){ $prak5c = 1;}else{ $prak5c = 0;}
					if(!empty($lima['prak_bahasa_inggris'])){ $prak5d = 1;}else{ $prak5d = 0;}
					if(!empty($lima['prak_matematika'])){ $prak5e = 1;}else{ $prak5e = 0;}
					if(!empty($lima['prak_fisika'])){ $prak5f = 1;}else{ $prak5f = 0;}
					if(!empty($lima['prak_biologi'])){ $prak5g = 1;}else{ $prak5g = 0;}
					if(!empty($lima['prak_kimia'])){ $prak5h = 1;}else{ $prak5h = 0;}
					if(!empty($lima['prak_sejarah'])){ $prak5i = 1;}else{ $prak5i = 0;}
					if(!empty($lima['prak_geografi'])){ $prak5j = 1;}else{ $prak5j = 0;}
					if(!empty($lima['prak_ekonomi'])){ $prak5k = 1;}else{ $prak5k = 0;}
					if(!empty($lima['prak_sosiologi'])){ $prak5l = 1;}else{ $prak5l = 0;}
					if(!empty($lima['prak_senibudaya'])){ $prak5m = 1;}else{ $prak5m = 0;}
					if(!empty($lima['prak_pend_jasmani'])){ $prak5n = 1;}else{ $prak5n = 0;}
					if(!empty($lima['prak_teknologi_informasi'])){ $prak5o = 1;}else{ $prak5o = 0;}
					if(!empty($lima['prak_keterampilan'])){ $prak5p = 1;}else{ $prak5p = 0;}
					if(!empty($lima['prak_mulok'])){ $prak5q = 1;}else{ $prak5q = 0;}
					
					$totalpeng5 = $lima['peng_agama'] + $lima['peng_kewarganegaraan'] + $lima['peng_bahasa_indonesia'] + $lima['peng_bahasa_inggris'] + $lima['peng_matematika'] + $lima['peng_fisika'] + $lima['peng_biologi'] + $lima['peng_kimia'] + $lima['peng_sejarah'] + $lima['peng_geografi'] + $lima['peng_ekonomi'] + $lima['peng_sosiologi'] + $lima['peng_senibudaya'] + $lima['peng_pend_jasmani'] + $lima['peng_teknologi_informasi'] + $lima['peng_keterampilan'] + $lima['peng_mulok'];
					$countpeng5 = $peng5a + $peng5b + $peng5c + $peng5d + $peng5e + $peng5f + $peng5g + $peng5h + $peng5i + $peng5j + $peng5k + $peng5l + $peng5m + $peng5n + $peng5o + $peng5p + $peng5q;
					$jumlahpeng5 = number_format(($totalpeng5/$countpeng5), 1, '.', '');
					if(!empty($jumlahpeng5)){$countjumlahpeng5 = 1;}else{$countjumlahpeng5 = 0;}
					
					$totalprak5 = $lima['prak_agama'] + $lima['prak_kewarganegaraan'] + $lima['prak_bahasa_indonesia'] + $lima['prak_bahasa_inggris'] + $lima['prak_matematika'] + $lima['prak_fisika'] + $lima['prak_biologi'] + $lima['prak_kimia'] + $lima['prak_sejarah'] + $lima['prak_geografi'] + $lima['prak_ekonomi'] + $lima['prak_sosiologi'] + $lima['prak_senibudaya'] + $lima['prak_pend_jasmani'] + $lima['prak_teknologi_informasi'] + $lima['prak_keterampilan'] + $lima['prak_mulok'];
					$countprak5 = $prak5a + $prak5b + $prak5c + $prak5d + $prak5e + $prak5f + $prak5g + $prak5h + $prak5i + $prak5j + $prak5k + $prak5l + $prak5m + $prak5n + $prak5o + $prak5p + $prak5q;
					$jumlahprak5 = number_format(($totalprak5/$countprak5), 1, '.', '');
					if(!empty($jumlahprak5)){$countjumlahprak5 = 1;}else{$countjumlahprak5 = 0;}
					
					$totalrata5 = number_format(($jumlahpeng5+$jumlahprak5)/($countjumlahpeng5+$countjumlahprak5), 1, '.', '');
					
				?>
				<td>1</td>
				<td>Pendidikan Agama</td>
				<td align="right"><?php echo $satu['peng_agama'];?></td>
				<td align="right"><?php echo $satu['prak_agama'];?></td>
				<td align="right"><?php echo $dua['peng_agama'];?></td>
				<td align="right"><?php echo $dua['prak_agama'];?></td>
				<td align="right"><?php echo $tiga['peng_agama'];?></td>
				<td align="right"><?php echo $tiga['prak_agama'];?></td>
				<td align="right"><?php echo $empat['peng_agama'];?></td>
				<td align="right"><?php echo $empat['prak_agama'];?></td>
				<td align="right"><?php echo $lima['peng_agama'];?></td>
				<td align="right"><?php echo $lima['prak_agama'];?></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Kewarganegaraan</td>
				<td align="right"><?php echo $satu['peng_kewarganegaraan'];?></td>
				<td align="right"><?php echo $satu['prak_kewarganegaraan'];?></td>
				<td align="right"><?php echo $dua['peng_kewarganegaraan'];?></td>
				<td align="right"><?php echo $dua['prak_kewarganegaraan'];?></td>
				<td align="right"><?php echo $tiga['peng_kewarganegaraan'];?></td>
				<td align="right"><?php echo $tiga['prak_kewarganegaraan'];?></td>
				<td align="right"><?php echo $empat['peng_kewarganegaraan'];?></td>
				<td align="right"><?php echo $empat['prak_kewarganegaraan'];?></td>
				<td align="right"><?php echo $lima['peng_kewarganegaraan'];?></td>
				<td align="right"><?php echo $lima['prak_kewarganegaraan'];?></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Bahasa & Sastra Indo</td>
				<td align="right"><?php echo $satu['peng_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $satu['prak_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $dua['peng_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $dua['prak_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $tiga['peng_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $tiga['prak_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $empat['peng_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $empat['prak_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $lima['peng_bahasa_indonesia'];?></td>
				<td align="right"><?php echo $lima['prak_bahasa_indonesia'];?></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Bahasa Inggris</td>
				<td align="right"><?php echo $satu['peng_bahasa_inggris'];?></td>
				<td align="right"><?php echo $satu['prak_bahasa_inggris'];?></td>
				<td align="right"><?php echo $dua['peng_bahasa_inggris'];?></td>
				<td align="right"><?php echo $dua['prak_bahasa_inggris'];?></td>
				<td align="right"><?php echo $tiga['peng_bahasa_inggris'];?></td>
				<td align="right"><?php echo $tiga['prak_bahasa_inggris'];?></td>
				<td align="right"><?php echo $empat['peng_bahasa_inggris'];?></td>
				<td align="right"><?php echo $empat['prak_bahasa_inggris'];?></td>
				<td align="right"><?php echo $lima['peng_bahasa_inggris'];?></td>
				<td align="right"><?php echo $lima['prak_bahasa_inggris'];?></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Matematika</td>
				<td align="right"><?php echo $satu['peng_matematika'];?></td>
				<td align="right"><?php echo $satu['prak_matematika'];?></td>
				<td align="right"><?php echo $dua['peng_matematika'];?></td>
				<td align="right"><?php echo $dua['prak_matematika'];?></td>
				<td align="right"><?php echo $tiga['peng_matematika'];?></td>
				<td align="right"><?php echo $tiga['prak_matematika'];?></td>
				<td align="right"><?php echo $empat['peng_matematika'];?></td>
				<td align="right"><?php echo $empat['prak_matematika'];?></td>
				<td align="right"><?php echo $lima['peng_matematika'];?></td>
				<td align="right"><?php echo $lima['prak_matematika'];?></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Fisika</td>
				<td align="right"><?php echo $satu['peng_fisika'];?></td>
				<td align="right"><?php echo $satu['prak_fisika'];?></td>
				<td align="right"><?php echo $dua['peng_fisika'];?></td>
				<td align="right"><?php echo $dua['prak_fisika'];?></td>
				<td align="right"><?php echo $tiga['peng_fisika'];?></td>
				<td align="right"><?php echo $tiga['prak_fisika'];?></td>
				<td align="right"><?php echo $empat['peng_fisika'];?></td>
				<td align="right"><?php echo $empat['prak_fisika'];?></td>
				<td align="right"><?php echo $lima['peng_fisika'];?></td>
				<td align="right"><?php echo $lima['prak_fisika'];?></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Biologi</td>
				<td align="right"><?php echo $satu['peng_biologi'];?></td>
				<td align="right"><?php echo $satu['prak_biologi'];?></td>
				<td align="right"><?php echo $dua['peng_biologi'];?></td>
				<td align="right"><?php echo $dua['prak_biologi'];?></td>
				<td align="right"><?php echo $tiga['peng_biologi'];?></td>
				<td align="right"><?php echo $tiga['prak_biologi'];?></td>
				<td align="right"><?php echo $empat['peng_biologi'];?></td>
				<td align="right"><?php echo $empat['prak_biologi'];?></td>
				<td align="right"><?php echo $lima['peng_biologi'];?></td>
				<td align="right"><?php echo $lima['prak_biologi'];?></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Kimia</td>
				<td align="right"><?php echo $satu['peng_kimia'];?></td>
				<td align="right"><?php echo $satu['prak_kimia'];?></td>
				<td align="right"><?php echo $dua['peng_kimia'];?></td>
				<td align="right"><?php echo $dua['prak_kimia'];?></td>
				<td align="right"><?php echo $tiga['peng_kimia'];?></td>
				<td align="right"><?php echo $tiga['prak_kimia'];?></td>
				<td align="right"><?php echo $empat['peng_kimia'];?></td>
				<td align="right"><?php echo $empat['prak_kimia'];?></td>
				<td align="right"><?php echo $lima['peng_kimia'];?></td>
				<td align="right"><?php echo $lima['prak_kimia'];?></td>
			</tr>
			<tr>
				<td>9</td>
				<td>Sejarah</td>
				<td align="right"><?php echo $satu['peng_sejarah'];?></td>
				<td align="right"><?php echo $satu['prak_sejarah'];?></td>
				<td align="right"><?php echo $dua['peng_sejarah'];?></td>
				<td align="right"><?php echo $dua['prak_sejarah'];?></td>
				<td align="right"><?php echo $tiga['peng_sejarah'];?></td>
				<td align="right"><?php echo $tiga['prak_sejarah'];?></td>
				<td align="right"><?php echo $empat['peng_sejarah'];?></td>
				<td align="right"><?php echo $empat['prak_sejarah'];?></td>
				<td align="right"><?php echo $lima['peng_sejarah'];?></td>
				<td align="right"><?php echo $lima['prak_sejarah'];?></td>
			</tr>
			<tr>
				<td>10</td>
				<td>Geografi</td>
				<td align="right"><?php echo $satu['peng_geografi'];?></td>
				<td align="right"><?php echo $satu['prak_geografi'];?></td>
				<td align="right"><?php echo $dua['peng_geografi'];?></td>
				<td align="right"><?php echo $dua['prak_geografi'];?></td>
				<td align="right"><?php echo $tiga['peng_geografi'];?></td>
				<td align="right"><?php echo $tiga['prak_geografi'];?></td>
				<td align="right"><?php echo $empat['peng_geografi'];?></td>
				<td align="right"><?php echo $empat['prak_geografi'];?></td>
				<td align="right"><?php echo $lima['peng_geografi'];?></td>
				<td align="right"><?php echo $lima['prak_geografi'];?></td>
			</tr>
			<tr>
				<td>11</td>
				<td>Ekonomi</td>
				<td align="right"><?php echo $satu['peng_ekonomi'];?></td>
				<td align="right"><?php echo $satu['prak_ekonomi'];?></td>
				<td align="right"><?php echo $dua['peng_ekonomi'];?></td>
				<td align="right"><?php echo $dua['prak_ekonomi'];?></td>
				<td align="right"><?php echo $tiga['peng_ekonomi'];?></td>
				<td align="right"><?php echo $tiga['prak_ekonomi'];?></td>
				<td align="right"><?php echo $empat['peng_ekonomi'];?></td>
				<td align="right"><?php echo $empat['prak_ekonomi'];?></td>
				<td align="right"><?php echo $lima['peng_ekonomi'];?></td>
				<td align="right"><?php echo $lima['prak_ekonomi'];?></td>
			</tr>
			<tr>
				<td>12</td>
				<td>Sosiologi</td>
				<td align="right"><?php echo $satu['peng_sosiologi'];?></td>
				<td align="right"><?php echo $satu['prak_sosiologi'];?></td>
				<td align="right"><?php echo $dua['peng_sosiologi'];?></td>
				<td align="right"><?php echo $dua['prak_sosiologi'];?></td>
				<td align="right"><?php echo $tiga['peng_sosiologi'];?></td>
				<td align="right"><?php echo $tiga['prak_sosiologi'];?></td>
				<td align="right"><?php echo $empat['peng_sosiologi'];?></td>
				<td align="right"><?php echo $empat['prak_sosiologi'];?></td>
				<td align="right"><?php echo $lima['peng_sosiologi'];?></td>
				<td align="right"><?php echo $lima['prak_sosiologi'];?></td>
			</tr>
			<tr>
				<td>13</td>
				<td>Seni Budaya</td>
				<td align="right"><?php echo $satu['peng_senibudaya'];?></td>
				<td align="right"><?php echo $satu['prak_senibudaya'];?></td>
				<td align="right"><?php echo $dua['peng_senibudaya'];?></td>
				<td align="right"><?php echo $dua['prak_senibudaya'];?></td>
				<td align="right"><?php echo $tiga['peng_senibudaya'];?></td>
				<td align="right"><?php echo $tiga['prak_senibudaya'];?></td>
				<td align="right"><?php echo $empat['peng_senibudaya'];?></td>
				<td align="right"><?php echo $empat['prak_senibudaya'];?></td>
				<td align="right"><?php echo $lima['peng_senibudaya'];?></td>
				<td align="right"><?php echo $lima['prak_senibudaya'];?></td>
			</tr>
			<tr>
				<td>14</td>
				<td>Pend Jasmani</td>
				<td align="right"><?php echo $satu['peng_pend_jasmani'];?></td>
				<td align="right"><?php echo $satu['prak_pend_jasmani'];?></td>
				<td align="right"><?php echo $dua['peng_pend_jasmani'];?></td>
				<td align="right"><?php echo $dua['prak_pend_jasmani'];?></td>
				<td align="right"><?php echo $tiga['peng_pend_jasmani'];?></td>
				<td align="right"><?php echo $tiga['prak_pend_jasmani'];?></td>
				<td align="right"><?php echo $empat['peng_pend_jasmani'];?></td>
				<td align="right"><?php echo $empat['prak_pend_jasmani'];?></td>
				<td align="right"><?php echo $lima['peng_pend_jasmani'];?></td>
				<td align="right"><?php echo $lima['prak_pend_jasmani'];?></td>
			</tr>
			<tr>
				<td>15</td>
				<td>Teknologi Informasi</td>
				<td align="right"><?php echo $satu['peng_teknologi_informasi'];?></td>
				<td align="right"><?php echo $satu['prak_teknologi_informasi'];?></td>
				<td align="right"><?php echo $dua['peng_teknologi_informasi'];?></td>
				<td align="right"><?php echo $dua['prak_teknologi_informasi'];?></td>
				<td align="right"><?php echo $tiga['peng_teknologi_informasi'];?></td>
				<td align="right"><?php echo $tiga['prak_teknologi_informasi'];?></td>
				<td align="right"><?php echo $empat['peng_teknologi_informasi'];?></td>
				<td align="right"><?php echo $empat['prak_teknologi_informasi'];?></td>
				<td align="right"><?php echo $lima['peng_teknologi_informasi'];?></td>
				<td align="right"><?php echo $lima['prak_teknologi_informasi'];?></td>
			</tr>
			<tr>
				<td>16</td>
				<td>Keterampilan/Bhs Asing</td>
				<td align="right"><?php echo $satu['peng_keterampilan'];?></td>
				<td align="right"><?php echo $satu['prak_keterampilan'];?></td>
				<td align="right"><?php echo $dua['peng_keterampilan'];?></td>
				<td align="right"><?php echo $dua['prak_keterampilan'];?></td>
				<td align="right"><?php echo $tiga['peng_keterampilan'];?></td>
				<td align="right"><?php echo $tiga['prak_keterampilan'];?></td>
				<td align="right"><?php echo $empat['peng_keterampilan'];?></td>
				<td align="right"><?php echo $empat['prak_keterampilan'];?></td>
				<td align="right"><?php echo $lima['peng_keterampilan'];?></td>
				<td align="right"><?php echo $lima['prak_keterampilan'];?></td>
			</tr>
			<tr>
				<td>17</td>
				<td>Mulok</td>
				<td align="right"><?php echo $satu['peng_mulok'];?></td>
				<td align="right"><?php echo $satu['prak_mulok'];?></td>
				<td align="right"><?php echo $dua['peng_mulok'];?></td>
				<td align="right"><?php echo $dua['prak_mulok'];?></td>
				<td align="right"><?php echo $tiga['peng_mulok'];?></td>
				<td align="right"><?php echo $tiga['prak_mulok'];?></td>
				<td align="right"><?php echo $empat['peng_mulok'];?></td>
				<td align="right"><?php echo $empat['prak_mulok'];?></td>
				<td align="right"><?php echo $lima['peng_mulok'];?></td>
				<td align="right"><?php echo $lima['prak_mulok'];?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="right"><?php echo $jumlahpeng1;?></td>
				<td align="right"><?php echo $jumlahprak1;?></td>
				<td align="right"><?php echo $jumlahpeng2;?></td>
				<td align="right"><?php echo $jumlahprak2;?></td>
				<td align="right"><?php echo $jumlahpeng3;?></td>
				<td align="right"><?php echo $jumlahprak3;?></td>
				<td align="right"><?php echo $jumlahpeng4;?></td>
				<td align="right"><?php echo $jumlahprak4;?></td>
				<td align="right"><?php echo $jumlahpeng5;?></td>
				<td align="right"><?php echo $jumlahprak5;?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Rerata</td>
				<td align="center" colspan="2"><?php echo $totalrata1;?></td>
				<td align="center" colspan="2"><?php echo $totalrata2;?></td>
				<td align="center" colspan="2"><?php echo $totalrata3;?></td>
				<td align="center" colspan="2"><?php echo $totalrata4;?></td>
				<td align="center" colspan="2"><?php echo $totalrata5;?></td>
			</tr>
        </table>


	</body>
</html>

<script>
  window.print();
</script>
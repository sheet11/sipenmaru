
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />

<?php
	include "session.php";
	error_reporting(0);
	include"../config/koneksi.php";
	include("bar128.php");
  	include("library.php");
  	include("fucnt_tgl.php");	
	  ?>
<html>
	<body>
		<table  align="center">
			<tr>
				<td width="101" height="102"><img src="../assets/img_kop/logo-kemenkes.png" width="150" height="100"/></td>
		    	<td width="601" align="center"><strong><h4>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu T.A 2023/2024</h4></strong></td>
		    	<td width="109" align="center"><img src="../assets/img_kop/logo.png" width="100" height="100"/></td>
			</tr>
			
			<tr>
				<td colspan="3"><hr></hr></td>
			</tr>
		</table>
		<?php
		$query=mysqli_query($kon,"select * from tb_formulir4 where username='$_GET[username]' ");
		while($a=mysqli_fetch_array($query)){
		?>
        <table>
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
		<?php } ?>
		<table width="100%" class="table table-bordered">
				<tr>
					<th class="success" colspan="4">Matakuliah Perguruan Asal</th>
					<th class="success" colspan="5">Matakuliah Prodi Poltekkes</th>
				</tr>

				<tr>
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>	
					<th>Nilai</th>	
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>
				</tr>

				<?php $query=mysqli_query($kon,"select tb_rpl.sks_asal, tb_rpl.nilai_asal, tb_rpl.idasesmen, tb_rpl.kode_asal, tb_rpl.matkul_asal, tb_asesmen.idasesmen, tb_asesmen.kode_polkes, tb_asesmen.sks_polkes, tb_asesmen.matkul_polkes from tb_asesmen join tb_rpl on tb_asesmen.idasesmen=tb_rpl.idasesmen where tb_asesmen.nama_jurusan='keperawatan' and tb_rpl.username='$_GET[username]'"); 
				while($a=mysqli_fetch_array($query))
				{ ?>
				<tr>
					<td><?=$a['kode_asal'];?></td>
					<td><?=$a['matkul_asal'];?></td>
					<td><?=$a['sks_asal'];?></td>
					<td><?=$a['nilai_asal'];?></td>
					<td><?=$a['kode_polkes'];?></td>
					<td><?=$a['matkul_polkes'];?></td>		
					<td><?=$a['sks_polkes'];?></td>
				</tr>

				<?php 
				}
				?>

		</table>
		<table>	
          	
		</table>
	</body>
</html>

<script>
	var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

	style.type = 'text/css';
	style.media = 'print';

	if (style.styleSheet){
		style.styleSheet.cssText = css;
	} else {
		style.appendChild(document.createTextNode(css));
	}

	head.appendChild(style);

	window.print();
</script>
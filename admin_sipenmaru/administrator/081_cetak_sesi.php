<?php include "../config/koneksi.php"; ?>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Calon SIMAMI $_GET[sesi].xls");
	?>
 
	<center>
		<h1>Data Calon Mahasiswa Jalur Mandiri (SIMAMI) <?=$_GET['sesi'];?></h1>
	</center>
 
	<table border="1">
	    <?php 
	    if($_GET['tab'] == 'tb_formulir4') { ?>
		<tr>
                <th>No.</th>
                <th>ID </th>
                <th>Nama</th>
                <th>Prodi 1</th>
                <th>Prodi 2</th>
                <th>Tanggal Ujian</th>
                <th>Sesi Ujian</th>
                <th>Ruang Ujian</th>
                <th>Tempat Ujian</th>
                <th>Tanggal Login</th>
		</tr>
		<?php }elseif($_GET['tab'] == 'tb_formulir5') { ?>
		<tr>
                <th>No.</th>
                <th>ID </th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tanggal Ujian</th>
                <th>Sesi Ujian</th>
                <th>Ruang Ujian</th>
                <th>Tempat Ujian</th>
                <th>Tanggal Login</th>
		</tr>
		<?php } ?>
        <tr>
        <?php           
            $i=1; 
            $tabel = $_GET['tab'];
            $query=mysqli_query($kon,"select * from $tabel where sesi_ujian='$_GET[sesi]' and status='Sudah Membayar'");       
            while ($a=mysqli_fetch_array($query)) { 
            ?>
        <?php
        if($tabel == 'tb_formulir4') { ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['nama_lengkap']?></td>
               <td><?=$a['pilihan_prodi']?></td>
               <td><?=$a['pilihan_prodi2']?></td>
               <td><?=$a['tanggal_ujian']?></td>
               <td><?=$a['sesi_ujian']?></td>
               <td><?=$a['ruang_ujian']?></td>  
               <td><?=$a['tempat_ujian']?></td> 
               <td><?=$a['tanggal_login']?></td>
               
           </tr>
           <?php }elseif($tabel == 'tb_formulir5') { ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['nama_lengkap']?></td>
               <td><?=$a['pilihan_prodi']?></td>
               <td><?=$a['tanggal_ujian']?></td>
               <td><?=$a['sesi_ujian']?></td>
               <td><?=$a['ruang_ujian']?></td>  
               <td><?=$a['tempat_ujian']?></td>   
               <td><?=$a['tanggal_login']?></td>
           </tr>
           <?php } ?>
           <?php } ?>
	</table>
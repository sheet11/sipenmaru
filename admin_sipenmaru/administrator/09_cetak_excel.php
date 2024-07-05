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
	header("Content-Disposition: attachment; filename=Data Calon SIMAMI.xls");
	?>
 
	<center>
		<h1>Data Calon Mahasiswa Jalur PMDP</h1>
	</center>
 
	<table border="1">
		<tr>
                <th>No.</th>
                <th>ID </th>
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>No HP</th>
                <th>Tgl Daftar</th>
                <th>Tgl Login</th>
                <th>Status</th>
		</tr>
        <tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"select * from tb_formulir3 where status='Sudah Membayar'");       
            while ($a=mysqli_fetch_array($query)) { 
            ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['password']?></td>
               <td><?=$a['nama_lengkap']?></td>
               <td><?=$a['pilihan_prodi']?></td>
               <td><?=$a['no_hp']?></td>
               <td><?=$a['tanggal_daftar']?></td>
               <td><?=$a['tanggal_login']?></td>
               <td><?=$a['status']?></td>        
           </tr>
           <?php } ?>
	</table>
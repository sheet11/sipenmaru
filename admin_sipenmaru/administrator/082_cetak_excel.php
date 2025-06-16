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
		<h1>Data Calon Mahasiswa SIMAMI</h1>
	</center>
 
	<table border="1">
		<tr>
                <th>No.</th>
                <th>ID </th>
                <th>Password</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>Prodi</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Nama Sekolah</th>
                <th>Keterangan Sekolah</th>
                <th>No HP</th>
                <th>Penghasilan Orang Tua</th>
                <th>Pekerjaan Orang Tua</th>
                <th>Tgl Daftar</th>
                <th>Tgl Login</th>
                <th>Tgl Ujian</th>
                <th>Tempat Ujian</th>
                <th>Ruang Ujian</th>
                <th>Sesi Ujian</th>
                <th>Status</th>
                <th>Status tahap 1</th>
		</tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar'");       
            while ($a=mysqli_fetch_array($query)) { 
            ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['password']?></td>
               <td><?=$a['nama_lengkap']?></td>
               <td><?=$a['tempat_lahir']?></td>
               <td><?=$a['tanggal_lahir']?></td>
               <td><?=$a['pilihan_prodi']?></td>
               <td><?=$a['agama']?></td>
               <td><?=$a['jenis_kelamin']?></td>
               <td><?=$a['asal_sekolah']?></td>
               <td><?=$a['nama_sekolah']?></td>
               <td><?=$a['keterangan_sekolah']?></td>
               <td><?=$a['no_hp']?></td>
               <td><?=$a['penghasilan_orang_tua']?></td>
               <td><?=$a['pekerjaan_orang_tua']?></td>
               <td><?=$a['tanggal_daftar']?></td>
               <td><?=$a['tanggal_login']?></td>
               <td><?=$a['tanggal_ujian']?></td>
               <td><?=$a['tempat_ujian']?></td>
               <td><?=$a['ruang_ujian']?></td>
               <td><?=$a['sesi_ujian']?></td>
               <td><?=$a['status']?></td> 
               <td><?=$a['status_lulus']?></td>
           </tr>
           <?php } ?>
	</table>
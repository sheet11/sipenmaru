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
                <th>Username </th>
                <th>Prestasi</th>
		</tr>
        <tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"SELECT 
    username,
    GROUP_CONCAT(CONCAT(nama, ' - ', ket, ' (', CASE 
                             WHEN tingkat = '1' THEN 'Internasional'
                             WHEN tingkat = '2' THEN 'Nasional'
                             WHEN tingkat = '3' THEN 'Regional'
                             WHEN tingkat = '4' THEN 'Provinsi'
                             WHEN tingkat = '5' THEN 'Kabupaten'
                             WHEN tingkat = '6' THEN 'Sekolah'
                             WHEN tingkat = 'Tingkat Pr' THEN 'Tidak Bertingkat' 
                         END, '), ', 
                         'Prestasi: ', tgl, ', Entri: ', entri, ',Bukti: <a href='https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/',bukti_n,''>Bukti</a>')
                 SEPARATOR ' | ') AS daftar_prestasi
FROM tb_prestasi
WHERE username BETWEEN '25100001' AND '25103500'
GROUP BY username;");       
            while ($a=mysqli_fetch_array($query)) { 
            ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['daftar_prestasi']?></td>
           </tr>
           <?php } ?>
	</table>
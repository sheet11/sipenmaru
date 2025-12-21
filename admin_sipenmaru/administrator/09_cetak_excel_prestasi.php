<?php 
	include "../config/koneksi.php";
	include "09_daftar_prestasi.php";
 ?>
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
	header("Content-Disposition: attachment; filename=Data prestasi.xls");
	?>
 
	<center>
		<h1>Data Calon Mahasiswa Jalur PMDP</h1>
	</center>
 <?php
	echo "<table border='1'>
    <tr>
        <th>Username</th>
        <th>nama lengkap</th>
        <th>pilihan prodi</th>
        <th>Nama Prestasi</th>
        <th>Keterangan Juara</th>
        <th>Tingkat Kejuaraan</th>
        <th>Tanggal Prestasi</th>
        <th>Tanggal Entri Prestasi</th>
        <th>Bukti</th>
    </tr>";

foreach ($data as $username => $prestasi_list) {
    foreach ($prestasi_list as $prestasi) {
    echo "<tr>";
    echo "<td>$username</td>";
    echo "<td>{$prestasi['nama_lengkap']}</td>";
    echo "<td>{$prestasi['pilihan_prodi']}</td>";
    echo "<td>{$prestasi['nama_prestasi']}</td>";
    echo "<td>{$prestasi['keterangan_juara']}</td>";
    echo "<td>{$prestasi['tingkat_kejuaraan']}</td>";
    echo "<td>{$prestasi['tanggal_prestasi']}</td>";
    echo "<td>{$prestasi['tanggal_entri_prestasi']}</td>";
    echo "<td><a href='https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/{$prestasi['bukti']}' target='_blank'></a><img src='https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/{$prestasi['bukti']}' alt='Bukti' width='100'></td>";
    echo "</tr>";
    }
}

echo "</table>"; ?>
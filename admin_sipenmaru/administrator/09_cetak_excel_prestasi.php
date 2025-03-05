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
	header("Content-Disposition: attachment; filename=Data prestasi.xls");
	?>
 
	<center>
		<h1>Data Calon Mahasiswa Jalur PMDP</h1>
	</center>
 
	<table border="1">
		<tr>
                <th>No.</th>
                <th>Username </th>
                <th>Nama Prestasi</th>
                <th>Keterrangan Prestasi</th>
                <th>Tingkat Prestasi</th>
                <th>Bukti Prestasi</th>
                <th>Tanggal Prestasi</th>
                <th>Tanggal Entri</th>

		</tr>
        <tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"SELECT * FROM tb_prestasi WHERE username BETWEEN 25100001 AND 25103500");       
            if (!$query) {
    trigger_error(mysqli_error($kon), E_USER_ERROR);
}   
            while ($a=mysqli_fetch_array($query)) { 
            ?>
           <tr>
               <td><?= $i++ ?></td>
               <td><?=$a['username']?></td>
               <td><?=$a['nama']?></td>
               <td><?=$a['ket']?></td>
               <td><?=$a['tingkat']?></td>
               <td><a href="https://sipenmaru-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/<?=$a['bukti_n']?>">bukti</a></td>
               <td><?=$a['tgl']?></td>
               <td><?=$a['entri']?></td>
    
           </tr>
           <?php } ?>
	</table>
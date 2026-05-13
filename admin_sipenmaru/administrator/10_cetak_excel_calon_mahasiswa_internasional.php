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
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pendaftar_Internasional.xls");
	?>
 
	<center>
		<h1>Data Calon Mahasiswa Baru Jalur Internasional</h1>
	</center>
 
	<table border="1">
		<tr>
            <th>No</th>
            <th>ID (Username)</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Negara Asal (Nationality)</th>
            <th>Passport</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Lokasi Saat Ini</th>
            <th>Tingkat Pendidikan</th>
            <th>GPA</th>
            <th>Sekolah Sebelumnya</th>
            <th>Program 1</th>
            <th>Program 2</th>
            <th>Beasiswa</th>
            <th>English Proficiency</th>
            <th>SOP</th>
            <th>Referral</th>
            <th>File Passport</th>
            <th>File English Cert</th>
            <th>File Diploma</th>
            <th>Waktu Daftar</th>
		</tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"select * from tb_interstudent");       
            while ($a=mysqli_fetch_array($query)) { 
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?=$a['username']?></td>
            <td><?=$a['password']?></td>
            <td><?=$a['first_name']?></td>
            <td><?=$a['last_name']?></td>
            <td><?=$a['dob']?></td>
            <td><?=$a['gender']?></td>
            <td><?=$a['nationality']?></td>
            <td><?=$a['passport']?></td>
            <td><?=$a['email']?></td>
            <td>'<?=$a['phone']?></td>
            <td><?=$a['current_location']?></td>
            <td><?=$a['education_level']?></td>
            <td><?=$a['gpa']?></td>
            <td><?=$a['previous_school']?></td>
            <td><?=$a['program1']?></td>
            <td><?=$a['program2']?></td>
            <td><?=$a['scholarship']?></td>
            <td><?=$a['english_proficiency']?></td>
            <td><?=$a['sop']?></td>
            <td><?=$a['referral']?></td>
            <td><?=$a['passport_file']?></td>
            <td><?=$a['english_cert_file']?></td>
            <td><?=$a['diploma_file']?></td>
            <td><?=$a['created_at']?></td>
        </tr>
        <?php } ?>
	</table>
</body>

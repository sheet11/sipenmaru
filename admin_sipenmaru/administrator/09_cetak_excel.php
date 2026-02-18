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
                <th>No</th>
                <th>ID</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No HP</th>
                <th>No HP Ortu/wali</th>
                <th>alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Jenis SMK</th>
                <th>Jurusan sekolah</th>
                <th>Tahun Lulus</th>
                <th>Akreditasi</th>
                <th>Nama Sekolah</th>
                <th>Keterangan Sekolah</th>
                <th>Daerah asal</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan Ayah</th>
                <th>Pekerjaan Ibu</th>
                <th>Penghasilan Orangtua</th>
                <th>Kartu BPJS</th>
                <th>NIK</th>
                <th>Golongan Darah</th>
                <th>Rekomendasi Sekolah</th>
                <th>Sertifikat Akreditasi</th>
                <th>Sertifikat Toefl</th>
                <th>List Sertifikat</th>
                <th>Cetak Nilai</th>
                <th>Semester 1</th>
                <th>Semester 2</th>
                <th>Semester 3</th>
                <th>Semester 4</th>
                <th>Semester 5</th>
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
               <td><?=$a['email']?></td>
               <td>'<?=$a['no_hp']?></td>
               <td>'<?=$a['no_hp_ortu']?></td>
               <td><?=$a['alamat']?></td>
               <td><?=$a['tempat_lahir']?></td>
               <td><?=$a['tanggal_lahir']?></td>
               <td><?=$a['jenis_kelamin']?></td>
               <td><?=$a['agama']?></td>
               <td><?=$a['asal_sekolah']?></td>
               <td><?=$a['smk_jenis']?></td>
               <td><?=$a['jurusan_sekolah']?></td>
               <td><?=$a['tahun_lulus']?></td>
               <td><?=$a['akreditasi']?></td>
               <td><?=$a['nama_sekolah']?></td>
               <td><?=$a['keterangan_sekolah']?></td>
               <td><?=$a['daerah_asal']?></td>
               <td><?=$a['berat_badan']?></td>
               <td><?=$a['tinggi_badan']?></td>
               <td><?=$a['nama_orang_tua']?></td>
               <td><?=$a['nama_orang_tua_ibu']?></td>
               <td><?=$a['pekerjaan_orang_tua']?></td>
               <td><?=$a['penghasilan_orang_tua']?></td>
               <td><?=$a['pekerjaan_orang_tua_ibu']?></td>
               <td>'<?=$a['kartu_bpjs']?></td>
               <td>'<?=$a['nik']?></td>
               <td><?=$a['golongan_darah']?></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/surat/<?=$a['rekomendasi_sekolah']?>">Surat Rekomendasi</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/surat/<?=$a['sertifikat_akreditasi']?>">Sertifikat Akreditasi</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/pmdp/toefl/<?=$a['sertifikat_toefl']?>">Sertifikat Toefl</a></td>
               <td><a href="https://spmb-polkeslu.cloud/admin_sipenmaru/administrator/09_cetak_sertifikat_calon_mahasiswa_pmdp.php?username=<?=$a['username']?>">List Sertifikat</a></td>
               <td><a href="https://spmb-polkeslu.cloud/admin_sipenmaru/administrator/09_lihat_nilai_input.php?username=<?=$a['username']?>">Cetak Nilai</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/assets/img/<?=$a['photo1']?>">Semester 1</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/assets/img/<?=$a['photo2']?>">Semester 2</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/assets/img/<?=$a['photo3']?>">Semester 3</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/assets/img/<?=$a['photo4']?>">Semester 4</a></td>
               <td><a href="https://spmb-polkeslu.cloud/login_spmb_prestasi/assets/img/<?=$a['photo5']?>">Semester 5</a></td>
               <td><?=$a['tanggal_daftar']?></td>
               <td><?=$a['tanggal_login']?></td>
               <td><?=$a['status']?></td>        
           </tr>
           <?php } ?>
	</table>
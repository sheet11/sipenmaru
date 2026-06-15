<?php include "../config/koneksi.php"; ?>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
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
            <th>Prodi</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Nama Sekolah</th>
            <th>Keterangan Sekolah</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Penghasilan Orang Tua</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Surat Pernyataan</th>
            <th>Daftar Riwayat Hidup</th>
            <th>Transkrip Nilai</th>
            <th>Ijazah</th>
            <th>Akreditasi</th>
            <th>Konversi Nilai</th>
            <th>Form asesmen Alih Kredit</th>
            <th>Form Pendaftaran</th>
            <th>Form Evaluasi diri</th>
            <th>Tgl Daftar</th>
            <th>Tgl Login</th>
            <th>Tgl Ujian</th>
            <th>Tempat Ujian</th>
            <th>Ruang Ujian</th>
            <th>Sesi Ujian</th>
            <th>Status</th>
            <th>Status tahap 1</th>
            <th>Status tahap 2</th>
        </tr>
        <?php           
            $i=1; 
            $query=mysqli_query($kon,"select * from tb_formulir5 where (status='Sudah Membayar' or status='Terdaftar') and tahun_pendaftaran='2026'");       
            while ($a=mysqli_fetch_array($query)) { 
            ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?=$a['username']?></td>
            <td><?=$a['password']?></td>
            <td><?=$a['nama_lengkap']?></td>
            <td><?=$a['pilihan_prodi']?></td>
            <td><?=$a['tempat_lahir']?></td>
            <td><?=$a['tanggal_lahir']?></td>
            <td><?=$a['agama']?></td>
            <td><?=$a['jenis_kelamin']?></td>
            <td><?=$a['asal_sekolah']?></td>
            <td><?=$a['nama_sekolah']?></td>
            <td><?=$a['keterangan_sekolah']?></td>
            <td><?=$a['no_hp']?></td>
            <td><?=$a['email']?></td>
            <td><?=$a['penghasilan_orang_tua']?></td>
            <td><?=$a['pekerjaan_orang_tua']?></td>
            <td><?php if(!empty($a['photo5'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['photo5']?>"
                    target="_blank">Surat Pernyataan</a>
                <?php } ?></td>
            <td><?php if(!empty($a['photo4'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['photo4']?>"
                    target="_blank">Daftar Riwayat Hidup</a>
                <?php } ?></td>
            <td><?php if(!empty($a['photo3'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['photo3']?>"
                    target="_blank">Transkrip Nilai</a>
                <?php } ?></td>
            <td><?php if(!empty($a['photo2'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['photo2']?>"
                    target="_blank">Ijazah</a>
                <?php } ?></td>
            <td><?php if(!empty($a['photo1'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['photo1']?>"
                    target="_blank">Akreditasi</a>
                <?php } ?></td>
            <td><?php if(!empty($a['file_1'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['file_1']?>"
                    target="_blank">Konversi Nilai</a>
                <?php } ?></td>
            <td><?php if(!empty($a['file_2'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['file_2']?>"
                    target="_blank">Form Asesmen Alih Kredit</a>
                <?php } ?></td>
            <td><?php if(!empty($a['file_3'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['file_3']?>"
                    target="_blank">Form Pendaftaran</a>
                <?php } ?></td>
            <td><?php if(!empty($a['file_4'])){ ?>
                <a href="https://spmb-polkeslu.cloud/login_mandiri_1pilihan/assets/berkas/<?=$a['file_4']?>"
                    target="_blank">Form Evaluasi Diri</a>
                <?php } ?></td>
            <td><?=$a['tanggal_daftar']?></td>
            <td><?=$a['tanggal_login']?></td>
            <td><?=$a['tanggal_ujian']?></td>
            <td><?=$a['tempat_ujian']?></td>
            <td><?=$a['ruang_ujian']?></td>
            <td><?=$a['sesi_ujian']?></td>
            <td><?=$a['status']?></td>
            <td><?=$a['status_lulus']?></td>
            <td><?=$a['status_lulus_2']?></td>
        </tr>
        <?php } ?>
    </table>
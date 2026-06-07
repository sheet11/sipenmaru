<?php include "../config/koneksi.php"; ?>

<body>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            font-size: 11pt;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 5px;
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
    header("Content-Disposition: attachment; filename=Absensi Peserta SPMB Mandiri $_GET[sesi].xls");
    ?>

    <?php $que = mysqli_query($kon, "SELECT * FROM tb_formulir4 WHERE sesi_ujian='$_GET[sesi]' and tahun_pendaftaran = YEAR(CURDATE())");
    $q = mysqli_fetch_assoc($que);
    ?>

    <b style="width: 100%; font-size: 30px;">Absen Peserta SPMB Jalur Mandiri</b><br><br>
    <b>Sesi Ujian: <?=$_GET['sesi'];?></b> <br>
    <b>Tanggal Ujian: <?=date("d-m-Y", strtotime($q['tanggal_ujian']))?></b><br>
    <b>Ruang Ujian: <?=$q['ruang_ujian']?></b><br>
    <b>Tempat Ujian: <?=$q['tempat_ujian']?></b>
    <br>
    <table border=" 1">
        <tr style="background-color: #689dc0;">
            <th>No.</th>
            <th>ID</th>
            <th style="width: 380px;">Nama</th>
            <th style="width: 220px;">TTD</th>
        </tr>
        <?php
        $sesi = mysqli_real_escape_string($kon, $_GET['sesi']);
        $i = 1;
        $j = 1;

        // Ambil dari tb_formulir4
        $query4 = mysqli_query($kon, "SELECT *, 'tb_formulir4' as sumber FROM tb_formulir4 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE())");
        while ($a = mysqli_fetch_assoc($query4)) {
            echo "<tr>
                <td>".$i++."</td>
                <td>".$a['username']."</td>
                <td>".$a['nama_lengkap']."</td>
                <td style='text-align: left; height: 50px; width: 150px;'>".$j++.".</td>
            </tr>";
        }

        // Ambil dari tb_formulir5
        $query5 = mysqli_query($kon, "SELECT *, 'tb_formulir5' as sumber FROM tb_formulir5 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE())");
        while ($a = mysqli_fetch_assoc($query5)) {
            echo "<tr>
                <td>".$i++."</td>
                <td>".$a['username']."</td>
                <td>".$a['nama_lengkap']."</td>
                <td style='text-align: left; height: 50px; width: 150px;'>".$j++.".</td>
            </tr>";
        }
        ?>
    </table>
</body>
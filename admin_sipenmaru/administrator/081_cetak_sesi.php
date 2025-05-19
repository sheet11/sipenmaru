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
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Prodi 1</th>
            <th>Prodi 2</th>
            <th>Tanggal Ujian</th>
            <th>Sesi Ujian</th>
            <th>Ruang Ujian</th>
            <th>Tempat Ujian</th>
            <th>Tanggal Login</th>
            <th>Sumber Data</th>
        </tr>
        <?php
        $sesi = mysqli_real_escape_string($kon, $_GET['sesi']);
        $i = 1;

        // Ambil dari tb_formulir4
        $query4 = mysqli_query($kon, "SELECT *, 'tb_formulir4' as sumber FROM tb_formulir4 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar'");
        while ($a = mysqli_fetch_assoc($query4)) {
            echo "<tr>
                <td>".$i++."</td>
                <td>".$a['username']."</td>
                <td>".$a['nama_lengkap']."</td>
                <td>".$a['pilihan_prodi']."</td>
                <td>".$a['pilihan_prodi2']."</td>
                <td>".$a['tanggal_ujian']."</td>
                <td>".$a['sesi_ujian']."</td>
                <td>".$a['ruang_ujian']."</td>
                <td>".$a['tempat_ujian']."</td>
                <td>".$a['tanggal_login']."</td>
                <td>tb_formulir4</td>
            </tr>";
        }

        // Ambil dari tb_formulir5
        $query5 = mysqli_query($kon, "SELECT *, 'tb_formulir5' as sumber FROM tb_formulir5 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar'");
        while ($a = mysqli_fetch_assoc($query5)) {
            echo "<tr>
                <td>".$i++."</td>
                <td>".$a['username']."</td>
                <td>".$a['nama_lengkap']."</td>
                <td>".$a['pilihan_prodi']."</td>
                <td>-</td>
                <td>".$a['tanggal_ujian']."</td>
                <td>".$a['sesi_ujian']."</td>
                <td>".$a['ruang_ujian']."</td>
                <td>".$a['tempat_ujian']."</td>
                <td>".$a['tanggal_login']."</td>
                <td>tb_formulir5</td>
            </tr>";
        }
        ?>
    </table>
</body>
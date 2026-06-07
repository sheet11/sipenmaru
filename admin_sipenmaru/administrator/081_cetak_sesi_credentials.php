<?php
include "../config/koneksi.php";

$sesi = isset($_GET['sesi']) ? mysqli_real_escape_string($kon, $_GET['sesi']) : '';
$labelSesi = isset($_GET['sesi']) ? $_GET['sesi'] : '';

$query4 = mysqli_query($kon, "SELECT username, nama_lengkap FROM tb_formulir4 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC");
$query5 = mysqli_query($kon, "SELECT username, nama_lengkap FROM tb_formulir5 WHERE sesi_ujian='$sesi' AND status='Sudah Membayar' AND tahun_pendaftaran = YEAR(CURDATE()) ORDER BY username ASC");

$rows = [];
while ($a = mysqli_fetch_assoc($query4)) {
    $rows[] = ['username' => $a['username'], 'nama' => $a['nama_lengkap']];
}
while ($a = mysqli_fetch_assoc($query5)) {
    $rows[] = ['username' => $a['username'], 'nama' => $a['nama_lengkap']];
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Username dan Password - <?= htmlspecialchars($labelSesi) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 15px;
        }

        .header {
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0 0 5px;
            font-size: 18px;
        }

        .header h2 {
            margin: 0 0 10px;
            font-size: 14px;
            font-weight: normal;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .card {
            width: calc(33.333% - 10px);
            border: 1px solid #333;
            padding: 10px;
            box-sizing: border-box;
            page-break-inside: avoid;
            min-height: 120px;
        }

        .card h3 {
            margin: 0 0 6px;
            font-size: 13px;
            border-bottom: 1px dashed #666;
            padding-bottom: 4px;
        }

        .card p {
            margin: 3px 0;
            line-height: 1.3;
        }

        .cut-label {
            margin-top: 10px;
            font-size: 10px;
            color: #555;
        }

        <blade media|%20print%20%7B>body {
            margin: 10mm;
        }

        .card {
            width: calc(33.333% - 10px);
            page-break-inside: avoid;
        }

        .no-print {
            display: none;
        }
        }
    </style>
    <script>
        window.addEventListener('load', function () {
            window.print();
        });
    </script>
</head>

<body>
    <div class="header">
        <h1>Cetak Username dan Password</h1>
        <h2>SPMB Mandiri Poltekkes Kemenkes Bengkulu</h2>
        <p>Sesi Ujian: <strong><?= htmlspecialchars($labelSesi) ?></strong></p>
        <p>Tahun Akademik: <strong>2026/2027</strong></p>
        <p class="no-print" style="font-size:11px; color:#333;">Cetak dan potong masing-masing kartu untuk dibagikan ke
            peserta.</p>
    </div>

    <div class="cards">
        <?php if (count($rows) === 0): ?>
        <div style="width:100%; text-align:center; padding:20px; border:1px solid #333;">Tidak ada data untuk sesi ini.
        </div>
        <?php else: ?>
        <?php $no = 1; ?>
        <?php foreach ($rows as $row): ?>
        <div class="card">
            <h3>Username / Password</h3>
            <p><strong>No.:</strong> <?= $no++; ?></p>
            <p><strong>Nama:</strong> <?= htmlspecialchars($row['nama']); ?></p>
            <p><strong>Username:</strong> <?= htmlspecialchars($row['username']); ?></p>
            <p><strong>Password:</strong> <?= htmlspecialchars($row['username'] . 'Spmb-bkl'); ?></p>
            <p><strong>Sesi Ujian:</strong> <?= htmlspecialchars($labelSesi) ?></p>
            <p><strong>Tahun:</strong> 2026/2027</p>
            <p class="cut-label">Potong di sini jika perlu.</p>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>

</html>
<?php
session_start();
include '../../config/koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../../index.php");
    exit;
}

$id_formulir = 5;
$title = "Laporan Golongan Darah - Formulir " . $id_formulir;

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <style>
        .report-header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #333;
            padding-bottom: 20px;
        }
        .report-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .report-subtitle {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
        .table-report {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
        .table-report th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .table-report td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .table-report tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .text-center {
            text-align: center;
        }
        .print-btn {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="report-header">
            <div class="report-title"><?php echo $title; ?></div>
            <div class="report-subtitle">Tanggal Cetak: <?php echo date('d-m-Y H:i:s'); ?></div>
        </div>

        <div class="print-btn">
            <button class="btn btn-primary" onclick="window.print()">
                <i class="glyphicon glyphicon-print"></i> Cetak Laporan
            </button>
            <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
        </div>

        <table class="table table-report">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th width="25%">Nama Responden</th>
                    <th width="20%">Golongan Darah</th>
                    <th width="25%">Tanggal Input</th>
                    <th width="25%">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $query = "SELECT 
                                f.id_formulir,
                                f.nm_responden,
                                f.tgl_input,
                                gd.nm_golongan_darah,
                                gd.id_golongan_darah
                            FROM tb_formulir f
                            LEFT JOIN tb_golongan_darah gd ON f.golongan_darah = gd.id_golongan_darah
                            WHERE f.id_formulir = :id_formulir
                            ORDER BY f.tgl_input DESC";
                    
                    $stmt = $koneksi->prepare($query);
                    $stmt->execute([':id_formulir' => $id_formulir]);
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    $no = 1;
                    if (count($results) > 0) {
                        foreach ($results as $row) {
                            echo "<tr>";
                            echo "<td class='text-center'>" . $no . "</td>";
                            echo "<td>" . htmlspecialchars($row['nm_responden']) . "</td>";
                            echo "<td class='text-center'>" . htmlspecialchars($row['nm_golongan_darah'] ?? '-') . "</td>";
                            echo "<td class='text-center'>" . date('d-m-Y H:i', strtotime($row['tgl_input'])) . "</td>";
                            echo "<td class='text-center'>-</td>";
                            echo "</tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>Data tidak ditemukan</td></tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='5' class='text-center' style='color: red;'>Error: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div style="margin-top: 30px; text-align: right;">
            <p>Dicetak oleh: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
            <p>Tanggal: <?php echo date('d-m-Y'); ?></p>
        </div>
    </div>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>

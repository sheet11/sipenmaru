<?php
include "01_nav.php";
error_reporting(0);
require_once("../config/koneksi.php");

// Key = label yang ditampilkan, Value = daftar nilai di database yang digabung ke label tsb
$golongan_darah_list = [
    "A" => ["A"],
    "B" => ["B"],
    "AB" => ["AB"],
    "O" => ["O"]
];

$chart_data_ayah = [];
$chart_data_ibu = [];

$prodi_list = [
    "Keseluruhan" => "",
    "RPL Sarjana Terapan Gizi" => "RPL Sarjana Terapan Gizi",
    "RPL Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners" => "RPL Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners",
    "RPL Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan" => "RPL Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan",
    "Pendidikan Profesi Ners" => "Pendidikan Profesi Ners",
    "Pendidikan Profesi Bidan" => "Pendidikan Profesi Bidan"
];
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <div class="row">
                <div class="col-md-12">
                    <h1>Golongan Darah</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="<?= count($golongan_darah_list) ?>">Golongan Darah</th>
                </tr>
                <tr style="text-align:center">
                    <?php foreach ($golongan_darah_list as $golongan_darah_label => $golongan_darah_values): ?>
                        <th><?= strtoupper($golongan_darah_label) ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $label ?></td>
                        <?php foreach ($golongan_darah_list as $golongan_darah_label => $golongan_darah_values):
                            $in_values = "'" . implode("','", array_map(function ($v) use ($kon) {
                                return mysqli_real_escape_string($kon, $v);
                            }, $golongan_darah_values)) . "'";

                            if ($prodi_value === "") {
                                $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE status='Sudah Membayar' AND golongan_darah IN ($in_values) AND tahun_pendaftaran='2026'");
                            } else {
                                $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND status='Sudah Membayar' AND golongan_darah IN ($in_values) AND tahun_pendaftaran='2026'");
                            }
                            $jumlah = mysqli_num_rows($query);

                            // Simpan total baris "Keseluruhan" untuk data grafik di bawah tabel
                            if ($prodi_value === "") {
                                $chart_data_ayah[$golongan_darah_label] = $jumlah;
                            }
                        ?>
                            <td><?= $jumlah ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="row">
                <div class="col-md-8">
                    <canvas id="chartGolonganDarah" height="120"></canvas>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctxGolonganDarah = document.getElementById('chartGolonganDarah').getContext('2d');
            new Chart(ctxGolonganDarah, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(array_keys($chart_data_ayah)) ?>,
                    datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: <?= json_encode(array_values($chart_data_ayah)) ?>,
                        backgroundColor: '#3c8dbc',
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Grafik Golongan Darah Pendaftar Tahun 2026'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                }
            });
        </script>
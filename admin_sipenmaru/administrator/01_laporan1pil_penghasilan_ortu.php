<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

    // Value = daftar isian di DB yang dianggap masuk kategori ini.
    // Data kosong / placeholder "-- Pilih Penghasilan Orang Tua --" dianggap masuk kategori "< 2.000.000,-"
    $penghasilan_list = [
        "< 2.000.000,-" => ["2000000", "", "-- Pilih Penghasilan Orang Tua --"],
        "2.000.000,- - 5.000.000,-" => ["5000000"],
        "> 5.000.000,-" => ["7000000"],
    ];

    $chart_data = [];

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
                    <h1>Penghasilan Orang Tua (Formulir 4)</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="<?= count($penghasilan_list) ?>">Penghasilan Orang Tua</th>
                </tr>
                <tr style="text-align:center">
                    <?php foreach ($penghasilan_list as $header_label => $nilai_values): ?>
                        <th><?= $header_label ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($penghasilan_list as $header_label => $nilai_values): 
                        $in_values = "'" . implode("','", array_map(function($v) use ($kon) {
                            return mysqli_real_escape_string($kon, $v);
                        }, $nilai_values)) . "'";
                        $kondisi_penghasilan = "(penghasilan_orang_tua IN ($in_values)" . (in_array("", $nilai_values) ? " OR penghasilan_orang_tua IS NULL" : "") . ")";

                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND $kondisi_penghasilan AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND $kondisi_penghasilan AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);

                        // Simpan total baris "Keseluruhan" untuk data grafik di bawah tabel
                        if ($prodi_value === "") {
                            $chart_data[$header_label] = $jumlah;
                        }
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>

            <div class="row">
                <div class="col-md-8">
                    <canvas id="chartPenghasilanOrtu" height="120"></canvas>
                </div>
            </div>
        </div>
    </section>
</aside>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctxPenghasilanOrtu = document.getElementById('chartPenghasilanOrtu').getContext('2d');
    new Chart(ctxPenghasilanOrtu, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_keys($chart_data)) ?>,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: <?= json_encode(array_values($chart_data)) ?>,
                backgroundColor: ['#3c8dbc', '#00a65a', '#f39c12'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Grafik Penghasilan Orang Tua'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { precision: 0 }
                }
            }
        }
    });
</script>
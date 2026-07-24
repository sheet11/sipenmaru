<?php
    include "../01_nav.php";
    error_reporting(0); 
    require_once("../../config/koneksi.php");

    // Key = label yang ditampilkan, Value = daftar nilai di database yang digabung ke label tsb
    $pekerjaan_list = [
        "PNS"        => ["PNS", "PNS/TNI/POLRI"],
        "TNI/Polri"  => ["TNI/POLRI", "TNI/Polri"],
        "Swasta"     => ["Swasta"],
        "Petani"     => ["Petani", "Tani"],
        "Buruh"      => ["Buruh"],
        "Wiraswasta" => ["Wiraswasta"],
        "Pensiunan"  => ["Pensiunan"],
        "Nelayan"    => ["Nelayan"],
        "Lainnya"    => ["Lainnya", ""],
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
                    <h1>Pekerjaan Ayah</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="<?= count($pekerjaan_list) ?>">Pekerjaan Ayah</th>
                </tr>
                <tr style="text-align:center">
                    <?php foreach ($pekerjaan_list as $pekerjaan_label => $pekerjaan_values): ?>
                        <th><?= strtoupper($pekerjaan_label) ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($pekerjaan_list as $pekerjaan_label => $pekerjaan_values): 
                        $in_values = "'" . implode("','", array_map(function($v) use ($kon) {
                            return mysqli_real_escape_string($kon, $v);
                        }, $pekerjaan_values)) . "'";

                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua IN ($in_values) AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua IN ($in_values) AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);

                        // Simpan total baris "Keseluruhan" untuk data grafik di bawah tabel
                        if ($prodi_value === "") {
                            $chart_data_ayah[$pekerjaan_label] = $jumlah;
                        }
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>

            <div class="row">
                <div class="col-md-8">
                    <canvas id="chartPekerjaanAyah" height="120"></canvas>
                </div>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctxPekerjaanAyah = document.getElementById('chartPekerjaanAyah').getContext('2d');
    new Chart(ctxPekerjaanAyah, {
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
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Grafik Pekerjaan Ayah'
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

        <br>
<br>
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pekerjaan Ibu</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="<?= count($pekerjaan_list) ?>">Pekerjaan Ayah</th>
                </tr>
                <tr style="text-align:center">
                    <?php foreach ($pekerjaan_list as $pekerjaan_label => $pekerjaan_values): ?>
                        <th><?= strtoupper($pekerjaan_label) ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($pekerjaan_list as $pekerjaan_label => $pekerjaan_values): 
                        $in_values = "'" . implode("','", array_map(function($v) use ($kon) {
                            return mysqli_real_escape_string($kon, $v);
                        }, $pekerjaan_values)) . "'";

                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua_ibu IN ($in_values) AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua_ibu IN ($in_values) AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);

                        // Simpan total baris "Keseluruhan" untuk data grafik di bawah tabel
                        if ($prodi_value === "") {
                            $chart_data_ibu[$pekerjaan_label] = $jumlah;
                        }
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>

            <div class="row">
                <div class="col-md-8">
                    <canvas id="chartPekerjaanIbu" height="120"></canvas>
                </div>
            </div>
        </div>

<script>
    var ctxPekerjaanIbu = document.getElementById('chartPekerjaanIbu').getContext('2d');
    new Chart(ctxPekerjaanIbu, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_keys($chart_data_ibu)) ?>,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: <?= json_encode(array_values($chart_data_ibu)) ?>,
                backgroundColor: '#00a65a',
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Grafik Pekerjaan Ibu'
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
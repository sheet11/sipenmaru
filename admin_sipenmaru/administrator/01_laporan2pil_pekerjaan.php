<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

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

    $prodi_list = [
        "Keseluruhan" => "",
        "D3 Kebidanan Bengkulu" => "D3 Kebidanan Bengkulu",
        "D3 Kebidanan Curup" => "D3 Kebidanan Curup",
        "D3 Keperawatan Bengkulu" => "D3 Keperawatan Bengkulu",
        "D3 Keperawatan Curup" => "D3 Keperawatan Curup",
        "D3 Teknologi Laboratorium Medis" => "D3 Teknologi Laboratorium Medis",
        "D3 Sanitasi" => "D3 Sanitasi",
        "D3 Gizi" => "D3 Gizi",
        "D3 Farmasi" => "D3 Farmasi",
        "Sarjana Terapan Gizi" => "Sarjana Terapan Gizi",
        "Sarjana Terapan Promosi Kesehatan" => "Sarjana Terapan Promosi Kesehatan",
        "Sarjana Terapan Keperawatan dan Ners" => "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners",
        "Sarjana Terapan Keperawatan dan Ners (Kelas Internasional)" => "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)",
        "Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan" => "Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan"
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
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir4 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua IN ($in_values) AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir4 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua IN ($in_values) AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

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
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir4 WHERE pekerjaan_orang_tua_ibu IN ($in_values) AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir4 WHERE pilihan_prodi = '$prodi_value' AND pekerjaan_orang_tua_ibu IN ($in_values) AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
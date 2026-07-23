<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

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
                    <?php foreach ($pekerjaan_list as $pekerjaan): ?>
                        <th><?= strtoupper($pekerjaan) ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($pekerjaan_list as $pekerjaan): 
                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua = '$pekerjaan' AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua = '$pekerjaan' AND tahun_pendaftaran='2026'");
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
                    <?php foreach ($pekerjaan_list as $pekerjaan): ?>
                        <th><?= strtoupper($pekerjaan) ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($pekerjaan_list as $pekerjaan): 
                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua_ibu = '$pekerjaan' AND tahun_pendaftaran='2026'");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir5 WHERE pilihan_prodi = '$prodi_value' AND (status='Sudah Membayar' OR status='Terdaftar') AND pekerjaan_orang_tua_ibu = '$pekerjaan' AND tahun_pendaftaran='2026'");
                        }
                        $jumlah = mysqli_num_rows($query);
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

    $penghasilan_list = [
        "2000000" => "< 2.000.000,-",
        "5000000" => "2.000.000,- - 5.000.000,-",
        "7000000" => "> 5.000.000,-"
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
                    <h1>Penghasilan Orang Tua</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="<?= count($penghasilan_list) ?>">Penghasilan Orang Tua</th>
                </tr>
                <tr style="text-align:center">
                    <?php foreach ($penghasilan_list as $label): ?>
                        <th><?= $label ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php 
                $no = 1;
                foreach ($prodi_list as $label => $prodi_value): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $label ?></td>
                    <?php foreach ($penghasilan_list as $nilai => $header_label): 
                        if ($prodi_value === "") {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir3 WHERE penghasilan_orang_tua = $nilai");
                        } else {
                            $query = mysqli_query($kon, "SELECT 1 FROM tb_formulir3 WHERE pilihan_prodi = '$prodi_value' AND penghasilan_orang_tua = $nilai");
                        }
                        $jumlah = mysqli_num_rows($query);
                    ?>
                        <td><?= $jumlah ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</aside>
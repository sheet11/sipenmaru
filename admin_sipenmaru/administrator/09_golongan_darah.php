<?php
    include"01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");
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
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Program Studi</th><th colspan="4">Golongan Darah</th>
                        </tr>

                        <tr>
                            <th>A</th>
                            <th>B</th>
                            <th>AB</th>
                            <th>O</th>
                        </tr>

                        <?php
                        $prodi_list = [
                            "Keseluruhan",
                            "D3 Kebidanan Bengkulu",
                            "D3 Kebidanan Curup",
                            "D3 Keperawatan Bengkulu",
                            "D3 Keperawatan Curup",
                            "D3 Teknologi Laboratorium Medis",
                            "D3 Sanitasi",
                            "D3 Gizi",
                            "D3 Farmasi",
                            "Sarjana Terapan Gizi",
                            "Sarjana Terapan Promosi Kesehatan",
                            "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners",
                            "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)",
                            "Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan"
                        ];

                        $gd_list = ["A", "B", "AB", "O"];
                        $no_prodi = 1;

                        foreach ($prodi_list as $prodi) {
                            $no_tampil = ($prodi === "Keseluruhan") ? "" : $no_prodi++;
                            echo "<tr>";
                            echo "<td>{$no_tampil}</td><td>{$prodi}</td>";

                            foreach ($gd_list as $gd) {
                                if ($prodi === "Keseluruhan") {
                                    $query = mysqli_query($kon,"SELECT * FROM tb_formulir3 WHERE golongan_darah='{$gd}'");
                                } else {
                                    $query = mysqli_query($kon,"SELECT * FROM tb_formulir3 WHERE pilihan_prodi='{$prodi}' AND golongan_darah='{$gd}'");
                                }
                                echo "<td>" . mysqli_num_rows($query) . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </table>
        </div>   

           
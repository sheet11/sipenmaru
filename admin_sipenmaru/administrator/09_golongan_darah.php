<?php
    include"01_nav.php";
    error_reporting(0); 
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
                            <th rowspan="2" width="2%">No</th><td rowspan="2">Program Studi</td><th colspan="4">Golongan Darah</th>
                        </tr>

                        <tr>
                            <th>A</th>
                            <th>B</th>
                            <th>AB</th>
                            <th>O</th>
                        <tr>
                            <td></td>
                            <td>Keseluruhan </td>
                            <td><?php
                                require_once("../config/koneksi.php");
                                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where golongan_darah='A' ");
                                $jumlah= mysqli_num_rows ($query);
                                ?><?php echo $jumlah; ?></td>

                            <td><?php
                            require_once("../config/koneksi.php");
                            $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where golongan_darah='B' ");
                            $jumlah= mysqli_num_rows ($query);
                            ?><?php echo $jumlah; ?></td>

                            <td><?php
                            require_once("../config/koneksi.php");
                            $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                            <td><?php
                            require_once("../config/koneksi.php");
                            $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>1</td><td>D3 Kebidanan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>2</td><td>D3 Kebidanan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                                                        
                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>3</td><td>D3 Keperawatan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>4</td><td>D3 Keperawatan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5</td><td>D3 Teknologi Laboratorium Medis </td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>6</td><td>D3 Sanitasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>



                        </tr>

                        <tr>
                            <td>7</td><td>D3 Gizi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

  
                        </tr>

                        <tr>
                            <td>8</td><td>D3 Farmasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>9</td><td>Sarjana Terapan Gzi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>


                        </tr>

                        <tr>
                            <td>10</td><td>Sarjana Terapan Promosi Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>     

                         <tr>
                            <td>11</td><td>Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>     
                        <tr>
                            <td>12</td><td>Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                          <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>
                         <tr>
                            <td>13</td><td>Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and golongan_darah='A' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and golongan_darah='B' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                        <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and golongan_darah='AB' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and golongan_darah='O' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>     

                    </table>
        </div>   

           
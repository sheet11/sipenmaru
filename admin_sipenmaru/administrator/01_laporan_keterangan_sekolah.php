<?php
    include"01_nav.php";
    error_reporting(0); 
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                        <h5>Keterangan Sekolah</h5>
                </div>
            </div>              
                    <table class="table table-bordered">
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><td rowspan="2">Program Studi</td><th colspan="2">Keterangan Sekolah</th>
                        </tr>

                        <tr>
                            <th>Luar Kota Bengkulu</th><th>Dalam Kota Bengkulu
                        </tr>
                        <tr>
                            <td>1 </td><td>Keseluruhan </td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>1 </td><td>D3 Kebidanan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kebidanan Bengkulu' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kebidanan Bengkulu' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>2</td><td>D3 Kebidanan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kebidanan Curup' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kebidanan Curup' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>3</td><td>D3 Keperawatan Bengkulu</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Keperawatan Bengkulu' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Keperawatan Bengkulu' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>4</td><td>D3 Keperawatan Curup</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Keperawatan Curup' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Keperawatan Curup' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>5</td><td>D3 Analis Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Analis Kesehatan' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Analis Kesehatan' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td>6</td><td>D3 Kesehatan Lingkungan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kesehatan Lingkungan' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Kesehatan Lingkungan' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>7</td><td>D3 Gizi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Gizi' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Gizi' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

  
                        </tr>

                        <tr>
                            <td>8</td><td>D3 Farmasi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Farmasi' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D3 Farmasi' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>9</td><td>D4 Gzi</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D4 Gizi' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D4 Gizi' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                        </tr>

                        <tr>
                            <td>10</td><td>D4 Promosi Kesehatan</td><td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D4 Promosi Kesehatan' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>

                                                         <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir1 where pilihan_prodi='D4 Promosi Kesehatan' and keterangan_sekolah='Luar Kota Bengkulu' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>                       
                    </table>
        </div>   

           
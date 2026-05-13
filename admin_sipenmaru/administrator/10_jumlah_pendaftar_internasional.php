<?php 
    $page = "calon internasional";
    include "01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
                <td align="left" colspan="6"><b><h4>Jumlah Pendaftar Jalur Internasional Berdasarkan Negara Asal (Nationality)</b></h4></td>   
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>

        <div class="row">
            <div class="col-md-6">
                <table style="width:100%;" class="table table-bordered">    
                    <tr class="info">
                        <th width="10%">No.</th>
                        <th>Negara Asal (Nationality)</th>
                        <th width="30%">Jumlah Pendaftar</th>
                    </tr>
                    <?php 
                        require_once("../config/koneksi.php");
                        $query = mysqli_query($kon,"SELECT nationality, count(*) as total FROM tb_interstudent GROUP BY nationality ORDER BY total DESC"); 
                        $i = 1;
                        $total_semua = 0;
                        while($a = mysqli_fetch_array($query)){
                            $total_semua += $a['total'];
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $a['nationality'] ? $a['nationality'] : 'Tidak Diketahui'; ?></td>
                        <td><?php echo $a['total']; ?></td>
                    </tr>
                    <?php 
                            $i++;
                        }
                    ?>
                    <tr class="success">
                        <td colspan="2" align="right"><b>Total Seluruh Pendaftar</b></td>
                        <td><b><?php echo $total_semua; ?></b></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</section>
</aside>

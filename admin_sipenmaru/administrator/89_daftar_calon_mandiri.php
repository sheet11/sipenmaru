
<?php 
    include "01_nav.php";
    error_reporting(0);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;" id="daftar" class="table table-bordered">    
            <tr class="info">
                <th>No.</th>
                <th>ID </th>
                <th>Password</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th width="150">Aksi</th>
            </tr>
            <?php             
                    $query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar' order by username asc");
                
                    $i = 1;     
                while($a=mysqli_fetch_array($query)){

                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$a['username']?></td>
                    <td><?=$a['password']?></td>
                    <td><?=$a['nama_lengkap']?></td>
                    <td><?=$a['pilihan_prodi']?></td> 
                    <td>
                        <a href='89_cetak_calon_mandiri.php?username=<?=$a['username']?>' class='btn btn-success btn-xs'>
                            <span class='glyphicon glyphicon-print' aria-hidden='true'></span>
                        </a> 
<!--                         <a href='09_edit_calon_mahasiswa_pmdp.php?username=$a[username]' class='btn btn-info btn-xs'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a> 
                        <a href='09_delete_calon_mahasiswa_pmdp.php?username=$a[username]' onclick='return confirm("Anda yakin akan menghapus $a[nama_lengkap] ?")' class='btn btn-warning btn-xs'>
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a> -->
                    </td>
                </tr>
                <?php } ?>
            </table>
    </div>
</div>          

<script type="text/javascript">
      $(document).ready(function () {
    $('#daftar').DataTable();
});
    </script>











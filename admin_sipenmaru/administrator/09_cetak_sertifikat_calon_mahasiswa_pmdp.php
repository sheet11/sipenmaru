

<div id="page-wrapper">
  <div id="page-inner">
    <h2>Selamat Datang</h2>   
      <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
    <div>
      <hr>
      <div class="table-responsive">

<?php
  include "session.php";
?>

<?php
  include"../config/koneksi.php";
  include("bar128.php");
  include("library.php");
  include("fucnt_tgl.php");
  
    

?>
        
        <table border=1>
          <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Prestasi</th>
            <th>Keterangan</th>
            <th>Tingkat</th>
            <th>Bukti</th>
          </thead>
          <?php 
          $i = 1;
            $auery=mysqli_query($kon,"select * from tb_prestasi where username='$_GET[username]'");
            while($a=mysqli_fetch_array($auery)){
          ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?php echo $a['username'];?></td>
            <td><?php echo $a['nama'];?></td>
            <td><?php echo $a['ket'];?></td>
            <td><?php 
							if($a['tingkat']==1)
                    {
                        $nprestasi='Internasional';
                    }
                    elseif($a['tingkat']==2)
                    {
                        $nprestasi='Nasional';
                    }
                    elseif($a['tingkat']==3)
                    {
                        $nprestasi='Regional';
                    }
                    elseif($a['tingkat']==4)
                    {
                        $nprestasi='Provinsi';
                    }
                    elseif($a['tingkat']==5)
                    {
                        $nprestasi='Kabupaten/Kota';
                    }
                    elseif($a['tingkat']==6)
                    {
                        $nprestasi='Sekolah';
                    }echo $nprestasi;?></td>
            <td>
            <a href="../../login_spmb_prestasi/pmdp/prestasi/<?php echo $a['bukti_n'];?>" class="fancy">
            <img src="../../login_spmb_prestasi/pmdp/prestasi/<?php echo $a['bukti_n'];?>" alt="" width=150 height=175 border="0" /></a></td>
            </tr>
            <?php } ?>
            </thead>
        </table>
      </div>
    </div>
  </div>
</div>
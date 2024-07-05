

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
  
    
  $query=mysqli_query($kon,"select * from tb_prestasi where username='$_GET[username]'");
   $a=mysqli_fetch_array($query);
?>
        
        <table border=1>
          <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Prestasi</th>
            <th>Keterangan</th>
            <th>Bukti</th>
          </thead>
          <tr>
            <td>1</td>
            <td><?php echo $a['username'];?></td>
            <td><?php echo $a['nama'];?></td>
            <td><?php echo $a['ket'];?></td>
            <td rowspan=14 width=164 valign="top">
            <a href="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" class="fancy">
            <img src="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" alt="" width=150 height=175 border="0" /></a></td>
            </tr>

            <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Prestasi</th>
            <th>Keterangan</th>
            <th>Bukti</th>
          </thead>
          <tr>
            <td>1</td>
            <td><?php echo $a['username'];?></td>
            <td><?php echo $a['nama'];?></td>
            <td><?php echo $a['ket'];?></td>
            <td rowspan=14 width=164 valign="top">
            <a href="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" class="fancy">
            <img src="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" alt="" width=150 height=175 border="0" /></a></td>
            </tr>

            <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Prestasi</th>
            <th>Keterangan</th>
            <th>Bukti</th>
          </thead>
          <tr>
            <td>1</td>
            <td><?php echo $a['username'];?></td>
            <td><?php echo $a['nama'];?></td>
            <td><?php echo $a['ket'];?></td>
            <td rowspan=14 width=164 valign="top">
            <a href="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" class="fancy">
            <img src="../../login_pmdp/pmdp/prestasi/<?php echo $a['bukti_n'];?>" alt="" width=150 height=175 border="0" /></a></td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
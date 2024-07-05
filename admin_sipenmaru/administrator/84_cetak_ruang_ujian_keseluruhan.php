
<?php
  include "session.php";
?>
   <script src="js/jquery-1.11.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <table style="width:100%;" class="table table-bordered" border="1">  
       <tr>
            <th colspan="7">Ruang Lab Komputer Hari 1 Sesi 3</th>
       </tr>
        <tr class="info">
            <th width="5">No.</th>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Tanggal</th>
            <th>Tempat</th>
            <th>Ruang</th>
            <th>Sesi</th>
       </tr>
      <?php 
         
          $query=mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' and tanggal_ujian='2023-06-21' and sesi_ujian='Sesi 3 Pukul 13:00 WIB' order by username asc");

          $i = +1;   
        while($a=mysqli_fetch_array($query)){

        echo"
        <tr>
          <td>$i</td>
          <td style='font-size:24;text-transform:uppercase;'>$a[username]</td>
          <td>$a[nama_lengkap]</td>
          <td>$a[tanggal_ujian]</td>
        <td>$a[tempat_ujian]</td>
            <td>$a[ruang_ujian]</td>
            <td>$a[sesi_ujian]</td>
         
        </tr>";
        $i++;
      }
      
      ?>
    
   
  </div>
</div>      





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




    <table style="width:100%;" class="table table-bordered">  
       <tr>
            <th colspan="3">Gedung Bersama 6</th>
       </tr>
        <tr class="info">
            <th>No.</th><th>No Pendaftaran</th><th>Nama Lengkap</th><th>Ruang Ujian</th>
       </tr>
      <?php 
        
          $query=mysqli_query($kon,"select * from tb_pendaftaran_1 where status_aktif='Sudah Mengisi' and tempatujian='Bengkulu' and ruang_ujian='Gedung Bersama 6' order by user_id asc");
        
          $i = $posisi+1;   
        while($a=mysqli_fetch_array($query)){

        echo"
        <tr>
          <td>$i</td>
          <td>$a[user_id]</td>
          <td>$a[namalengkap]</td>
          <td>$a[ruang_ujian]</td>
         
        </tr>";
        $i++;
      }
      ?>
    
   
  </div>
</div>      




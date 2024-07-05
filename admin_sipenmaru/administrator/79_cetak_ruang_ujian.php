
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




    <table class="table table-bordered" >  
       <tr>
            <th colspan="3">Gedung Bersama 10</th>
       </tr>

      <?php 
        
          $query=mysqli_query($kon,"select * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 10' order by user_id asc");
        
          $i = +1;   
        while($a=mysqli_fetch_array($query)){

        echo"
        <tr>
            <td style='font-size:24;'>No Ujian</td><td style='font-size:24;'><b>$a[user_id]</b></td>
        </tr>
        <tr>
            <td style='font-size:24;text-transform:uppercase;'>Nama Lengkap</td><td style='font-size:24;text-transform:uppercase;'><b>$a[namalengkap]</b></td>                    
        </tr>";
        $i++;
      }
      ?>
      </table>
    
   
  </div>
</div>      




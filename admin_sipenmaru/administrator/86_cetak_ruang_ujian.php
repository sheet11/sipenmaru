
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




    <table class="table table-bordered" border="1">  
      <?php 
        
          $query=mysqli_query($kon,"select * from tb_formulir4 where hari='2' and sesi='2' order by sesi asc, hari asc, pc asc");
        
          $i = +1;   
        while($a=mysqli_fetch_array($query)){

        echo"
        <tr>
            <td style='font-size:20;'>Username</td>
            <td>:</td>
            <td style='font-size:20;'><b>$a[username]</b></td>
        </tr>
        <tr>
            <td style='font-size:20;'>Password</td>
            <td>:</td>
            <td style='font-size:20;'><b>$a[password]</b></td>              
        </tr>
        <tr>
            <td style='font-size:20;'>Nama Lengkap</td>
            <td>:</td>
            <td style='font-size:20;'><b>$a[nama_lengkap]</b></td>              
        </tr>
        <tr>
            <td style='font-size:20;'>Prodi</td>
            <td>:</td>
            <td style='font-size:20;'><b>$a[pilihan_prodi]</b></td>
        </tr>
        <tr>
            <td colspan='3'>&nbsp;</td>
        </tr>
        ";
        $i++;
      }
      ?>
      </table>
    
   
  </div>
</div>      




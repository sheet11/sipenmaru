
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
            <th colspan="3">Ruang Auditorium Blok 2</th>
       </tr>
        <tr class="info">
            <th>No.</th><th>No Pendaftaran</th><th>Nama Lengkap</th><th>Ruang Ujian</th>
       </tr>
      <?php 
        if(isset($_POST['submit'])){
          $cariid = $_POST['cariid'];
          $cari = $_POST['cari'];
          $query=mysqli_query($kon,"select * from tb_pendaftaran_3 where status_aktif='Sudah Mengisi' where $cariid = '$cari' 
                                                   or $cariid = '0'");
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
        }else{
          $p      = new Paging;
          $batas  = 10;
          $posisi = $p->cariPosisi($batas);       
          $query=mysqli_query($kon,"select * from tb_pendaftaran_3 where status_aktif='Sudah Mengisi' and ruang_ujian='Auditorium Blok 2' order by user_id  desc LIMIT 50");
        
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
      

   
}
      ?>
    
   
  </div>
</div>      




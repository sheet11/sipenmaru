<html>
 <head>
  <title>Import Kelulusan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color: #0cb313b3;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  input[type="file"]{
    border:1px solid gray;
  }
  
  </style>
 </head>
 <body>
  <div class="container box">
   <form method="post" enctype="multipart/form-data">
    <div class="container-fluid">
      <h3 align="center" class="text-success" style="font-weight:600;">Import Kelulus Calon Mahasiswa Mandiri Tahap 2</h3><br />
      <a class="btn-link" href="index.php">Kembali</a>
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-4 col-xs-4 col-sm-4"></div>  <!-- Blank Div -->
        
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <label>Pilih File Excel*</label>
        </div>
        <div class="col-xs-6 col-md-5 col-sm-6 col-lg-5">
            <input type="file" name="excel" />
        </div>
        <div class="col-xs-7 col-md-7 col-sm-6 col-lg-7">
            <input type="submit" name="import" class="btn btn-info" value="Import" style="padding:2px 20px;"/>
            <a href="format import kelulusan tahap 2 SIMAMI.xlsx" class="btn btn-primary btn-sm"><i class="fa da-download"></i> Download Format</a>
        </div>
        
      </div>
  </div>
   </form>
   <br />
   <br />
   <?php

$kon = mysqli_connect("localhost", "u128202965_sipenmaru", "Bengkulu2024$", "u128202965_sipenmaru");
$output = '';
if(isset($_POST["import"]))
{
    $fileex=$_FILES['excel']['name'];
 $exten = explode(".",$fileex); // For getting Extension of selected file
 $extension=end($exten);
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file

  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
    $no=1;
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $username = mysqli_real_escape_string($kon, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $nama_lengkap = trim(mysqli_real_escape_string($kon, $worksheet->getCellByColumnAndRow(1, $row)->getValue())," ");
    $status_lulus_tahap2 = trim(mysqli_real_escape_string($kon, $worksheet->getCellByColumnAndRow(2, $row)->getValue())," ");

    if(!empty($username)) // if none of the data are empty
    {
      $getmhs=mysqli_fetch_array(mysqli_query($kon,"select * from tb_formulir4 where username='$username'"));
      if(!empty($getmhs['username']))
      {
        mysqli_query($kon,"update tb_formulir4 set status_kelulusan_2='$status_lulus_tahap2' where username='$username'");  
        ?>
        <div class="alert alert-success">Status Mandiri berhasil diubah untuk username : <?php echo $username.' Nama : '.$nama_lengkap.' dengan status <b>'.$status_lulus_tahap2.'</b>';?>
        </div>
        <?php
      }
      else
      {
        ?>
        <div class="alert alert-danger">Status Mandiri gagal diubah untuk username : <?php echo $username.' Nama : '.$nama.' dengan status <b>'.$status_lulus_tahap2.'</b>. Data tidak ditemukan';?>
        </div>
        <?php
      }
      
    }
    $no++;

   }

  }

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>


   <?php
      echo @$fileUploadMsg;
      echo "<hr/>
			<p style='float:left'>* Supported Formats: .xls | .xlsx | .csv</p>";
      mysqli_close($kon);
   ?>
  </div>
 </body>
</html>



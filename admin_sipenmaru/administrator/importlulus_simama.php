<?php
/*
* Supported File Formats: .XLS | .XLS | .CSV  (Excel 1997-2007)
* 
* Table structure:
* +---------+-----------+------------+
* |   id    |   name    |    email   |
* +---------+-----------+------------+
* | int(11) | char(250) | char(300)  |
* +----+----+-----------+------------+
* #3c763d
* #0cb313b3
*/

$connect = mysqli_connect("localhost", "root", "", "db_sipenmaru_2023");
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

  $output .= "<div id='copy'><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
    $no=1;
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $username = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $nama_lengkap= trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue())," ");
    $level= trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue())," ");
    $pilihan_prodi = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue())," ");
    $status= trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue())," ");
    $status_kelulusan = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue())," ");
    
    if(!empty($username)) // if none of the data are empty
    {
      $query = mysqli_query($connect,"insert into tb_formulir2
        (username, nama_lengkap,
        level,
        pilihan_prodi,
        status,
        status_kelulusan
        ) values 
        ('$username',
        '$nama_lengkap',
        '$level',
        '$pilihan_prodi',
        '$status',
        '$status_kelulusan')");
      
        if($query)
        {
          $output .= '<tr style="background-color:green;color:white"><td>'.$nama_lengkap."</td><td>".$username."</td><td>Berhasil".'</td></tr>';  
        }
        else
        {
          $output .= '<tr style="background-color:red;color:white"><td>'.$nama_lengkap."</td><td>".$username."</td><td>Berhasil".'</td></tr>';
        }
        

    }
    $no++;

   }

  }
//      $output.= "<tr><td>Total Soal : ".($no-1)."</td></tr>"; 
  $output .= '</table></div>';
  $target_dir = "upload/"; //file upload folder
  $target_file = $target_dir .time().basename($_FILES["excel"]["name"]); // target file to be uploaded

  //upload the file
  if (move_uploaded_file($_FILES["excel"]["tmp_name"], $target_file)) {
       $fileUploadMsg= "<label class='text-success'>The file has been uploaded Successfully!</label><br>";
    } else {
       $fileUploadMsg= '<label class="text-danger">Sorry, there was an error uploading your file!</label><br>';
    }

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title>PHP Excel Importer</title>
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
      <h3 align="center" class="text-success" style="font-weight:600;">Konversi Soal XLS ke TXT</h3><br />
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
        </div>
        <?php 
        if(isset($_POST['import']))
        {
            ?>
            <button id="button1" class="btn btn-success btn-sm" onclick="CopyToClipboard('copy')">Salin Hasil</button>
            <script type="text/javascript">
                function CopyToClipboard(containerid) {
                  if (document.selection) {
                    var range = document.body.createTextRange();
                    range.moveToElementText(document.getElementById(containerid));
                    range.select().createTextRange();
                    document.execCommand("copy");
                  } else if (window.getSelection) {
                    var range = document.createRange();
                    range.selectNode(document.getElementById(containerid));
                    window.getSelection().addRange(range);
                    document.execCommand("copy");
                    alert("Soal berhasil disalin");
                    history.back();
                  }
                }
            </script>
            <?php
        }
        ?>
      </div>
  </div>
   </form>
   <br />
   <br />
   <?php
      echo $output;
      echo @$fileUploadMsg;
      echo "<hr/>
      <p style='float:left'>* Supported Formats: .xls | .xlsx | .csv</p>
      <p style='float:right'><a href='export.php'>Exporter &#8594;</a></p>";
      mysqli_close($connect);
   ?>
  </div>
 </body>
</html>



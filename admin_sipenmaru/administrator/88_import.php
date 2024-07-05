<!DOCTYPE html>
<html>
<head>
<title>Import tabel</title>
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
<br/><br/>
<?php 
include '../config/koneksi.php';
?>
 
<!-- <form method="post" enctype="multipart/form-data" action="88_import_excel.php">
	Pilih File: 
	<input name="excel" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form> -->
 
<div class="container box">
   <form method="post" enctype="multipart/form-data" action="88_import_excel.php">
    <div class="container-fluid">
      <h3 align="center" class="text-success" style="font-weight:600;">Import Tabel Asesmen</h3><br />
      <a class="btn btn-sm btn-primary" href="88_asesmen.php">Kembali</a>
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-4 col-xs-4 col-sm-4"></div>  <!-- Blank Div -->
        
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <label>Pilih File Excel*</label>
        </div>
        <div class="col-xs-6 col-md-5 col-sm-6 col-lg-5">
            <input type="file" name="excel" required />
        </div>
        <div class="col-xs-7 col-md-7 col-sm-6 col-lg-7">
            <input type="submit" name="import" class="btn btn-info" value="Import" style="padding:2px 20px;"/>
            <a href="format import asesmen.xls" class="btn btn-primary btn-sm"><i class="fa da-download"></i> Download Format</a>
        </div>
        
      </div>
  </div>
   </form>
</div>
 
</body>
</html>
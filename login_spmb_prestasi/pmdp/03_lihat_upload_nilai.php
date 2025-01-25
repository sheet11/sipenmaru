<?php
	include "session.php";
?>

<?php
	include "../config/koneksi.php";
	// include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td width="101" height="102"><img src="../assets/img_app/logo-kemenkes.png" width="150" height="100"/></td>
			<td width="601" align="center"><strong><h4>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2023/2024</h4></strong></td>
			<td width="109" align="center"><img src="../assets/img_app/logo.png" width="100" height="100"/></td>
		  </tr>
		  <tr>
			<td colspan="3"><hr></hr></td>
		  </tr>
		</table>

        <table >
			<tr>
				<td>Semester 1</td><td>Semester 2</td><td>Semester 3</td><td>Semester 4</td><td>Semester 5</td>
			</tr>
		
          <tr>
              <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['photo1'];?>" class="fancy">
              <a href="../assets/img/<?php echo $a['photo1'];?>" alt="" width=150 height=175 border="0">Klik disini</a> </td>
			  
			  <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['photo2'];?>" class="fancy">
              <a href="../assets/img/<?php echo $a['photo2'];?>" alt="" width=150 height=175 border="0">Klik disini</a></td>
			  
			  <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['photo3'];?>" class="fancy">
              <a href="../assets/img/<?php echo $a['photo3'];?>" alt="" width=150 height=175 border="0">Klik disini</a></td>
			  
			  <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['photo4'];?>" class="fancy">
              <a href="../assets/img/<?php echo $a['photo4'];?>" alt="" width=150 height=175 border="0">Klik disini</a></td>
			  
			  <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['photo5'];?>" class="fancy">
              <a href="../assets/img/<?php echo $a['photo5'];?>" alt="" width=150 height=175 border="0">Klik disini</a></td>
          </tr>

         

</body>
</html>
<script>
  window.print();
</script>
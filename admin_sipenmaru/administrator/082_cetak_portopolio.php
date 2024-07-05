<?php
  include "session.php";
?>

<?php
  include"../config/koneksi.php";
  include("bar128.php");
  // include("library.php");
  include("fucnt_tgl.php");
  
    
  $query=mysqli_query($kon,"select * from tb_formulir5 where username='$_GET[username]'");
   $a=mysqli_fetch_array($query);
  $tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
  <body>


        <table width="60%" align="center">
          <tr>
              <td rowspan=14 width=164 valign="top"><a href="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo'];?>" class="fancy">
              <img src="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo'];?>" alt="" width=150 height=175 border="0" /></td>
		<td rowspan=14 width=164 valign="top"><a href="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo2'];?>" class="fancy">
              <img src="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo2'];?>" alt="" width=150 height=175 border="0" /></td>
		<td rowspan=14 width=164 valign="top"><a href="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo3'];?>" class="fancy">
              <img src="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo3'];?>" alt="" width=150 height=175 border="0" /></td>
		<td rowspan=14 width=164 valign="top"><a href="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo4'];?>" class="fancy">
              <img src="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo4'];?>" alt="" width=150 height=175 border="0" /></td>
<td rowspan=14 width=164 valign="top"><a href="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo5'];?>" class="fancy">
              <img src="../../login_sipenmaru/gelombang2/1pilihan//assets/portopolio/<?php echo $a['photo5'];?>" alt="" width=150 height=175 border="0" /></td>

          </tr>

         
      </table>
</body>
</html>



</body>
</html>

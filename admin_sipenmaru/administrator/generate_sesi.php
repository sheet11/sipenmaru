<?php
$gper=mysqli_num_rows(mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar'"));
//echo "Jumlah sudah bayar ".$gper.'<br>';
$jpc=mysqli_num_rows(mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' and not pc=0"));
//$jpc=0; // jumlah pc saat ini
//echo "Jumlah sudah mendapatkan PC ".$jpc.'<br>';

$pc=mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM `tb_formulir4` where hari=2
ORDER BY sesi  DESC, hari desc, pc DESC limit 1"));
$nopc=$pc['pc']; // no pc terakhir
//echo "No PC terakhir ".$nopc.'<br>';

  $id=$_GET['username'];
  //echo $id;
  $gid=mysqli_fetch_array(mysqli_query($kon,"select * from tb_formulir4 where username='$id'"));
  //echo $gid['nama_lengkap'];
    
  //echo $nopc.' // no pc skrg<br>'; // no pc skrg
    $nopc=$nopc+1; // jumlah pc + 1
  //echo $nopc.' // no pc terbaru<br>'; // no pc terbaru
  //echo $jpc.' // jumlah pc skrg<br>'; // jumlah pc skrg
    $jpc=$jpc+1;
  //echo $jpc.' // jumlah pc terbaru<br>';
    if($nopc==121) // jika mencapai maksimal kuota sesi
    {
      $nopc=1;   // no pc kembali ke 1
    }
  //echo $nopc.' // no pc seharusnya<br>'; // no pc terbaru


    //$jse+=1;
    if(($jpc>=0)&&($jpc<=360))
    {
      $hari=1;
      if(($jpc>=0)&&($jpc<=120))
      {
        $sesi = 1;
      }
      elseif(($jpc>120)&&($jpc<=240))
      {
        $sesi = 2;
      }
      elseif(($jpc>240)&&($jpc<=360))
      {
        $sesi = 3;
      }
    }
    elseif(($jpc>360)&&($jpc<=840))
    {
      $hari=2;
     
      if(($jpc>360)&&($jpc<=480))
      {
        $sesi = 1;
      }
      elseif(($jpc>480)&&($jpc<=600))
      {
        $sesi = 2;
      }
      elseif(($jpc>600)&&($jpc<=720))
      {
        $sesi = 3;
      }
    }   
  
  $ruang=1;

if($gid['kartu']=='')
{
  $upd=mysqli_query($kon,"update tb_formulir4 set pc='$nopc', sesi='$sesi',hari='$hari',ruang='$ruang',kartu='v' where username='$id'");
  if($upd)

  {
  $gid=mysqli_fetch_array(mysqli_query($kon,"select * from tb_formulir4 where username='$id'"));
  /*
    echo $gid['username'];
    echo '   -   No. PC : '.$gid['pc'];
    echo '   -   No. Sesi : '.$gid['sesi'];
    echo '   -   No. Hari : '.$gid['hari'];


    echo '<br>';
    */
  }
  else
  {
    echo mysqli_error($kon);
  }
}

?>
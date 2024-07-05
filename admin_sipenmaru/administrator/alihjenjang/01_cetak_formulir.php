<?php
	include "session.php";
?>


<?php
ob_start();
?>
<style>
table{
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<?php
// Memanggil file koneksi
include"../config/koneksi.php";
//include("bar128.php");


 $query=mysqli_query($kon,"select * from tb_formulir1 where username='$_SESSION[username]' ");
$mhs = mysqli_fetch_array($query);

     $strhtml .= "<table width='75%' border='0'  align='center'>
        <tr>
          <td width='150' height='100'><img src='../assets/img/logo-kemenkes.png' width='150' height='100'/></td>
          <td width='600' align='center'><h2>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu T.A 2019/2020</h2></td>
          <td width='100' align='center'><img src='../assets/img/logo.png' width='100' height='100'/></td>
        </tr>
        <tr>
          <td colspan='3'><hr></hr></td>
        </tr>
    </table>";

  $strhtml .= "<table border='0'  align='top'  width='100%'>
        <tr>
            <td>Identitas Diri (ID)</td><td width='5' align='top'>:</td><td align='top'> $mhs[username]</td>
        </tr>

        <tr>
            <td>Nama Lengkap </td><td width='5' align='top'>:</td><td align='top'> $mhs[nama_lengkap]</td>
        </tr>

        <tr>
            <td>No Handphone </td><td width='5' align='top'>:</td><td align='top'> $mhs[no_hp]</td>
        </tr>

        <tr>
            <td>Jalur </td><td width='5' align='top'>:</td><td align='top'> $mhs[level]</td>
        </tr>

        <tr>
            <td>Pilihan Program Studi </td><td width='5' align='top'>:</td><td align='top'> $mhs[pilihan_prodi]</td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td><td width='5' align='top'>:</td><td align='top'> $mhs[jenis_kelamin]</td>
        </tr>

        <tr>
            <td>Agama</td><td width='5' align='top'>:</td><td align='top'> $mhs[agama]</td>
        </tr>

        <tr>
            <td>No Handphone</td><td width='5' align='top'>:</td><td align='top'> $mhs[no_hp]</td>
        </tr>

        <tr>
            <td>Tempat Lahir</td><td width='5' align='top'>:</td><td align='top'> $mhs[tempat_lahir]</td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td><td align='top'>:</td><td align='top'> $mhs[tanggal_lahir]</td>
        </tr>

        <tr>
            <td>Nama Sekolah</td><td align='top'>:</td><td align='top'> $mhs[nama_sekolah]</td>
        </tr>

        <tr>
            <td>Daerah Asal Sekolah</td><td  align='top'>:</td><td align='top'> $mhs[daerah_asal]</td>
        </tr>

        <tr>
            <td>Tempat Kuliah</td><td width='5' align='top'>:</td><td align='top'> $mhs[tempat_kuliah]</td>
        </tr>

        <tr>
            <td colspan='2'>&nbsp;</td><td><img src='../assets/img/$mhs[nama_foto]' alt='' width='150' height='175' border='0' /></td>
        </tr>


  
  </table>";
  
$strhtml .= "<br/><table border=0 align=left width=100% style='border: 1px solid black;'>
          <tr>
            <td align=left><h4>Hal- hal yang Harus diperhatikan</h4></td>
          </tr>
          <tr>
            <td>
              <ul>Jangan percaya pada pihak manapun yang menawarkan kelulusan dengan memberikan sejumlah uang atau imbalan
                
              </ul>
            </td>
          </tr>
      </table>";
  
// Panggil mPdf
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/style.css');
$fileName = 'sipenmaru--'.$mhs['username']. '-' . date('d-m-Y');

$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output($fileName. '.pdf','D');
$mpdf->debug = true;
?>

+
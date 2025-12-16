<?php
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Daftar_seleksi_calon_siswa'; //Beri nama file PDF hasil.
define('_MPDF_PATH','mpdf60/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();
?>

<?php
  include "session.php";
?>

<?php
  include"../config/koneksi.php";
  include("bar128.php");
  //include("library.php");
  include("fucnt_tgl.php");
  
    
  $query=mysqli_query($kon,"select * from tb_formulir1 where username='$_GET[username]'");
   $a=mysqli_fetch_array($query);
  $tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
  <body>

  <table width="60%" border="0"  align="center">
  <tr>
    <td width="101" height="102"><img src="../assets/img/baktihusada.jpg" width="100" height="100"/></td>
    <td width="601" align="center"><strong><h2>Seleksi Penerimaan Mahasiswa Baru (SPMB)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu T.A 2019/2020</h2></strong></td>
    <td width="109" align="center"><img src="../assets/img/logorevisi.png" width="100" height="100"/></td>
  </tr>
  <tr><td colspan="3"><hr></hr></td>
  </tr>
</table>

        <table width="60%" align="center">
          
          <tr>
              <td valign="top"  width="200">Identitas Diri (ID)</td>
              <td valign="top">:</td>
              <td><?php echo $a['username']; ?></td>
          </tr>

          <tr>
            <td valign="top">Nama Lengkap</td>
            <td valign="top">:</td>
            <td><?php echo $a['nama_lengkap']; ?></td>
          </tr>

          <tr>
            <td valign="top">No Handphone</td>
            <td valign="top">:</td><td><?php echo $a['no_hp']; ?></td>
          </tr>

          
          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td><?php echo $a['level']; ?></td>
          </tr>
          
          <tr>
            <td valign="top">Pilihan Program Studi</td><td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
          </tr>

          <tr>
            <td valign="top">Jenis Kelamin</td>
            <td valign="top">:</td>
            <td><?php echo $a['jenis_kelamin']; ?></td>
          </tr>

          <tr>
            <td valign="top">Agama</td>
            <td valign="top">:</td valign="top">
            <td><?php echo $a['agama']; ?></td>
          </tr>

          <tr>
            <td valign="top">Tempat Lahir</td>
            <td valign="top">:</td>
            <td><?php echo $a['tempat_lahir']; ?></td>
          </tr>

          <tr>
            <td valign="top">Tanggal Lahir</td>
            <td valign="top">:</td>
            <td><?php echo "$tanggal" ?></td>
          </tr>
        
          <tr>
            <td valign="top">Nama Sekolah</td>
            <td valign="top">:</td>
            <td><?php echo $a['nama_sekolah']; ?></td>
          </tr>
          <tr>
            <td valign="top">Daerah Asal</td>
            <td valign="top">:</td>
            <td><?php echo $a['daerah_asal']; ?></td>
          </tr>

          <tr>
            <td valign="top">Tempat Ujian</td>
            <td valign="top">:</td>
            <td><?php echo $a['Tempat Ujian']; ?></td>
          </tr>

          <tr>
            <td colspan='2'>&nbsp;</td>
            <td><img src="../../login/umum/1pilihan-alihjenjangcurup//assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>
          </tr>

    </table>
 
       <table width='100%' border='0' align='center'>
                    <tr>
                        <td colspan=2>Hal- hal yang Harus diperhatikan</td><td rowspan=3 colspan=2><img src='../../../../assets/img/code.png' width='100' height=100/></td>
                    </tr>

                    <tr>
                        <td width=21 align='justify' valign='top'>1.</td>
                        <td width=404 align='justify'>Ruang Ujian Diumumkan Seminggu Sebelum Pelaksanaan Ujian Tertulis</td>
                    </tr>

                    <tr>
                        <td width=21 align='justify' valign='top'>2.</td>
                        <td width=404 align='justify'>Peserta Harus mengisi absen 30 Menit sebelum ujian dimulai</td><td align='center'></td>
                    </tr>

                    <tr>
                        <td align='justify' valign='top'>3.</td>
                        <td align='justify'>Peserta membawa kartu ujian, kelengkapan alat tulis (Pensil 2B, Penghapus dan Papan Ujian)</td>
                    </tr>

                    <tr>
                        <td align='justify' valign='top'>4. </td>
                        <td align='justify'>Menandatangani Kartu Ujian di Meja Ujian, disaksikan Pengawas Ujian</td>
                    </tr>

                    <tr>
                        <td align='justify' valign='top'><strong>5. </strong></td>
                        <td align='justify'><strong>Jangan percaya pada pihak manapun yang menawarkan kelulusan dengan memberikan sejumlah uang atau imbalan</strong></td>
                    </tr>
                    </table>
</body>
</html>


<?php
 
$mpdf->setFooter('{PAGENO}');
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
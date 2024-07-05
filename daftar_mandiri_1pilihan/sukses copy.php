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
include ("koneksi.php");
//include("bar128.php");


 $query=mysqli_query($kon,"SELECT * from tb_formulir5 WHERE username='$_GET[id]'");
$mhs = mysqli_fetch_array($query);

$strhtml = "<table width='75%' border='0'  align='center'>
            <tr>
                <td width='150' height='100'></td>
                <td width='600' align='center'><h2>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2023/2024</h2></td>
                <td width='100' align='center'></td>
            </tr>
            <tr>
                <td colspan=3><hr></hr></td>
            </tr>
            </table>";

  $strhtml .= "<table border='0' align='center' width='100%'>
                <tr>
                    <td> Identitas Diri (ID) </td><td width='5' align='top'>:</td><td align='top'> $mhs[username]</td>
                </tr>

                <tr>
                    <td> Nama Lengkap </td><td width='5' align='top'>:</td><td align='top'> $mhs[nama_lengkap]</td>
                </tr>
				
                <tr>
                    <td> No Handphone </td><td width='5' align='top'>:</td><td align='top'> $mhs[no_hp]</td>
                </tr>

                <tr>
                    <td> Jalur </td><td width='5' align='top'>:</td><td align='top'> $mhs[level]</td>
                </tr>

                <tr>
                    <td> Pilihan Program Studi </td><td width='5' align='top'>:</td><td align='top'> $mhs[pilihan_prodi]</td>
                </tr>

                <tr>
                    <td>Tanggal Daftar </td><td>:<td> $mhs[tanggal_daftar] </td>
                </tr>
                
                <tr>
                    <td> Jumlah Setoran </td><td width='5' align='top'>:</td><td align='top'> Rp. 500.000,-</td>
                </tr>     
        </table>";
  
$strhtml .= "<br/><table align=center width=100% style='border: 1px solid black;'>
					<tr>
						<td align=center ><h4>Tata cara Pembayaran </h4></td>
					</tr>
                    <tr>
						<td>
							<ul>
								<br/><li><b>Via Teller Mandiri</b> <br/>Mengisi Slip Setor (Sertakan Nama Pendaftar, id Peserta, Pilihan Prodi dan Jumlah Pembayaran) -> <b>yang perlu diperhatikan No ID Peserta dijadikan sebagai No Rekening</b></li>
                                <li><b>Pastikan Anda Mendapatkan Password Pada Saat Pembayaran Ke Bank Mandiri</b></li>
								<li><b>Setelah Anda Membayar Silahkan Login http://sipenmaru.poltekkesbengkulu.ac.id</li>
								
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
//$mpdf->Output($fileName. '.pdf','D');
$mpdf->Output($fileName.'.pdf', 'I');
$mpdf->debug = true;
?>
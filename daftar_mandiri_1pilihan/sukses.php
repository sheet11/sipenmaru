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
?>
            <table width='100%' style="border: none;" align='center'>
            <tr>
                <td width='150' height='80'></td>
                <td width='600' align='center'><h2>Seleksi Penerimaan Mahasiswa Baru (SPMB)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2025/2026</h2></td>
                <td width='100' align='center'></td>
            </tr>
            <tr>
                <td colspan=3><hr></hr></td>
            </tr>
            </table>

            <table style="border: none;" align='center' width='100%'>
                <tr>
                    <td> Identitas Diri (ID) </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['username']?></td>
                </tr>

                <tr>
                    <td> Nama Lengkap </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['nama_lengkap']?></td>
                </tr>
				
                <tr>
                    <td> No Handphone </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['no_hp']?></td>
                </tr>

                <tr>
                    <td> Jalur </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['level']?></td>
                </tr>

                <tr>
                    <td> Pilihan Program Studi </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['pilihan_prodi']?></td>
                </tr>

                <tr>
                    <td>Tanggal Daftar </td><td>:<td> <?=date('d-m-Y', strtotime($mhs['tanggal_daftar']))?> </td>
                </tr>
                
                <tr>
                    <td> Jumlah Setoran </td><td width='5' align='top'>:</td><td align='top'> Rp. 500.000,-</td>
                </tr>     
        </table>
  
        <br/><table align=center width=100% style='border: 1px solid black;'>
					<tr>
						<td align=center ><h4>Tata cara Pembayaran </h4></td>
					</tr>
                    <tr>
						<td>
							<ul><li><b>Via Livin/ Mobile Banking Mandiri</b><br>1.Pilih menu Pembayaran/bayar <br>2.Menu Pendidikan <br>3.Cari poltekkes kemenkes BKL <br>4.Masukkan Identitas diri/ID kemudian bayar<br>Simpan bukti pembayaran dan jangan lupa catat PIN nya</li>
								<br/><li><b>Via Teller Mandiri</b> <br/>Mengisi Slip Setor (Sertakan Nama Pendaftar, id Peserta, Pilihan Prodi dan Jumlah Pembayaran) -> <b>yang perlu diperhatikan No ID Peserta dijadikan sebagai No Rekening</b>
                                <b>Pastikan Anda Mendapatkan PIN Pada Saat Pembayaran Ke Bank Mandiri</b></li> <br>
								<li><b>Setelah Anda Membayar Silahkan Login https://sipenmaru-polkeslu.cloud/login_mandiri_1pilihan/ <br>dengan memasukkan Identitas Diri/ID dan PIN yang didapat saat Pembayaran</li>					
							</ul>
                        </td>
					</tr>
			</table>
            <script>
		window.print();
            </script>
<?php
  // Panggil mPdf
// require ("mpdf/mpdf.php");

// $stylesheet = file_get_contents('css/style.css');
// $fileName = 'sipenmaru--'.$mhs['username']. '-' . date('d-m-Y');

// $mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
// //$mpdf->SetDisplayMode('fullpage');
// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($strhtml);
// $mpdf->Output($fileName. '.pdf','I');
// $mpdf->debug = true;
?>
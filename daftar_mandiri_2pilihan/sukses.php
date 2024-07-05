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


 $query=mysqli_query($kon,"SELECT * from tb_formulir4 WHERE username='$_GET[id]'");
$mhs = mysqli_fetch_array($query);
?>

<table width='75%' border='0'  align='center'>
            <tr>
                <td width='150' height='100'></td>
                <td width='600' align='center'><h2>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2024/2025</h2></td>
                <td width='100' align='center'></td>
            </tr>
            <tr>
                <td colspan=3><hr></hr></td>
            </tr>
            </table>
            <table border='0' align='center' width='100%'>
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
                    <td> Pilihan Program Studi 1</td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['pilihan_prodi']?></td>
                </tr>

                <tr>
                    <td> Pilihan Program Studi 2 </td><td width='5' align='top'>:</td><td align='top'> <?=$mhs['pilihan_prodi2']?></td>
                </tr>

                <tr>
                    <td>Tanggal Daftar </td><td>:<td> <?=$mhs['tanggal_daftar']?> </td>
                </tr>
                
                <tr>
                    <td> Jumlah Setoran </td><td width='5' align='top'>:</td><td align='top'> Rp. 300.000,-</td>
                </tr>     
        </table>
<br/><table align=center width=100% style='border: 1px solid black;'>
					<tr>
						<td align=center ><h4>Tata cara Pembayaran </h4></td>
					</tr>
                    <tr>
						<td>
							<ul>
								<br/><li><b>Via Teller Mandiri</b> <br/>Mengisi Slip Setor (Sertakan Nama Pendaftar, id Peserta, Pilihan Prodi dan Jumlah Pembayaran) -> <b>yang perlu diperhatikan No ID Peserta dijadikan sebagai No Rekening</b></li>
                                <li><b>Pastikan Anda Mendapatkan Password Pada Saat Pembayaran Ke Bank Mandiri</b></li>
								<li><b>Setelah Anda Membayar Silahkan Login http://sipenmaru-v1.poltekkesbengkulu.ac.id</li>
								
							</ul>
                        </td>
					</tr>
			</table>
            <script>
                window.print();
            </script>
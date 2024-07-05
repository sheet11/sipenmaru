<?php
include "../config/koneksi.php";
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
 
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Kode Matkul');
$sheet->setCellValue('C1', 'Matkul');
$sheet->setCellValue('D1', 'SKS');
$sheet->setCellValue('E1', 'Nilai');
 
$data = mysqli_query($koneksi,"select tb_rpl.sks_asal, tb_rpl.nilai_asal, tb_rpl.idasesmen, tb_rpl.kode_asal, tb_rpl.matkul_asal, tb_rpl.status_sks, tb_rpl.status_rpl, tb_asesmen.idasesmen, tb_asesmen.kode_polkes, tb_asesmen.sks_polkes, tb_asesmen.matkul_polkes from tb_asesmen join tb_rpl on tb_asesmen.idasesmen=tb_rpl.idasesmen where tb_asesmen.nama_jurusan='kebidanan' and tb_rpl.username='$_GET[username]'");
$i = 2;
$no = 1;
while($d = mysqli_fetch_array($data))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $d['kode_asal']);
    $sheet->setCellValue('C'.$i, $d['matkul_asal']);
    $sheet->setCellValue('D'.$i, $d['sks_asal']);
    $sheet->setCellValue('E'.$i, $d['nilai_asal']);      
    $i++;
}
 
$writer = new Xlsx($spreadsheet);
$writer->save('Data karyawan.xlsx');
echo "<script>window.location = 'Data karyawan.xlsx'</script>";
 
?>
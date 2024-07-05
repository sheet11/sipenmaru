<?php
include "../config/koneksi.php";
error_reporting(0);
require_once '../assets/Classes/PHPExcel.php';
$excel = new PHPExcel();

$excel->getProperties()->setCreator('Arif')
             ->setLastModifiedBy('Arif')
             ->setTitle("Data Calon Mahasiswa")
             ->setSubject("Data Calon Mahasiswa")
             ->setDescription("Data Calon Mahasiswa")
             ->setKeywords("Data Calon Mahasiswa");

$style_col = array(
	'font' => array('bold' => true),
	'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
	)
);

$style_row = array(
	'alignment' => array(
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
	)
);
			 
if(!empty($_GET['username']) AND empty($_GET['cariid']))
{
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR CALON MAHASISWA");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Lengkap");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "Prodi");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "Alamat");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "Jenis Kelamin");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "Agama");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "No HP");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "Tempat Lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "Tanggal lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "Golongan Darah");
	$excel->setActiveSheetIndex(0)->setCellValue('L3', "NIK");
	$excel->setActiveSheetIndex(0)->setCellValue('M3', "Nama Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('N3', "Pekerjaan Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('O3', "Tempat Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('P3', "Ruang Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('Q3', "Nama Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('R3', "Asal Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('S3', "Keterangan Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('T3', "Daerah Asal Sekolah");

	
	$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);


	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$query=mysqli_query($kon,"select * from tb_formulir5  where status='Sudah Membayar' and username='$_GET[username]'");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '6'"));
					
		
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['alamat']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $a['jenis_kelamin']);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $a['agama']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('H'.$numrow, $a['no_hp'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $a['tempat_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $a['tanggal_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $a['golongan_darah']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('L'.$numrow, $a['nik'],PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $a['nama_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $a['pekerjaan_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $a['tempat_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $a['ruang_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $a['nama_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $a['asal_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $a['keterangan_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $a['daerah_asal']);
		
		
		$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
	

	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Daftar Calon Mahasiswa");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="DaftarCalonMahasiswa.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
elseif(!empty($_GET['cariid']) AND empty($_GET['username']))
{
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR CALON MAHASISWA");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Lengkap");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "Prodi");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "Alamat");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "Jenis Kelamin");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "Agama");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "No HP");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "Tempat Lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "Tanggal lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "Golongan Darah");
	$excel->setActiveSheetIndex(0)->setCellValue('L3', "NIK");
	$excel->setActiveSheetIndex(0)->setCellValue('M3', "Nama Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('N3', "Pekerjaan Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('O3', "Tempat Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('P3', "Ruang Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('Q3', "Nama Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('R3', "Asal Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('S3', "Keterangan Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('T3', "Daerah Asal Sekolah");

	
	$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
	
	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$cariid = $_GET['cariid'];
	$cari = $_GET['cari'];
	$query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar' and $cariid = '$cari' or $cariid = '0' ");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '6'"));
					
		
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['alamat']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $a['jenis_kelamin']);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $a['agama']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('H'.$numrow, $a['no_hp'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $a['tempat_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $a['tanggal_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $a['golongan_darah']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('L'.$numrow, $a['nik'],PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $a['nama_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $a['pekerjaan_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $a['tempat_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $a['ruang_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $a['nama_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $a['asal_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $a['keterangan_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $a['daerah_asal']);
		
		
		$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);

		
		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('T')->setWidth(20);

	

	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Daftar Calon Mahasiswa");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="DaftarCalonMahasiswa.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
elseif(empty($_GET['username']) AND empty($_GET['cariid']))
{
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR CALON MAHASISWA");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Lengkap");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "Prodi");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "Alamat");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "Jenis Kelamin");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "Agama");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "No HP");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "Tempat Lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "Tanggal lahir");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "Golongan Darah");
	$excel->setActiveSheetIndex(0)->setCellValue('L3', "NIK");
	$excel->setActiveSheetIndex(0)->setCellValue('M3', "Nama Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('N3', "Pekerjaan Orang Tua");
	$excel->setActiveSheetIndex(0)->setCellValue('O3', "Tempat Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('P3', "Ruang Ujian");
	$excel->setActiveSheetIndex(0)->setCellValue('Q3', "Nama Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('R3', "Asal Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('S3', "Keterangan Sekolah");
	$excel->setActiveSheetIndex(0)->setCellValue('T3', "Daerah Asal Sekolah");

	
	$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar' order by username ASC");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai1 where username='$a[username]' AND semester = '6'"));
					
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['alamat']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $a['jenis_kelamin']);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $a['agama']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('H'.$numrow, $a['no_hp'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $a['tempat_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $a['tanggal_lahir']);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $a['golongan_darah']);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('L'.$numrow, $a['nik'],PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $a['nama_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $a['pekerjaan_orang_tua']);
		$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $a['tempat_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $a['ruang_ujian']);
		$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $a['nama_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $a['asal_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $a['keterangan_sekolah']);
		$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $a['daerah_asal']);
		
		
		$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);

		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
	
	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Daftar Calon Mahasiswa");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="DaftarCalonMahasiswa.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
?>

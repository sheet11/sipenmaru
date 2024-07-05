<?php
include "../config/koneksi.php";
error_reporting(0);
require_once '../assets/Classes/PHPExcel.php';
$excel = new PHPExcel();

$excel->getProperties()->setCreator('Arif')
             ->setLastModifiedBy('Arif')
             ->setTitle("Data Calon Mahasiswa PMDP")
             ->setSubject("Data Calon Mahasiswa PMDP")
             ->setDescription("Data Calon Mahasiswa PMDP")
             ->setKeywords("Data Calon Mahasiswa PMDP");

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
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR CALON MAHASISWA PMDP");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "PASSWORD");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "PRODI");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "I");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "II");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "III");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "IV");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "V");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "JUMLAH");
	$excel->setActiveSheetIndex(0)->setCellValue('L3', "RERATA");
	$excel->setActiveSheetIndex(0)->setCellValue('M3', "AKADEMIK");
	$excel->setActiveSheetIndex(0)->setCellValue('N3', "TINGKAT");
	$excel->setActiveSheetIndex(0)->setCellValue('O3', "TAHUN");
	$excel->setActiveSheetIndex(0)->setCellValue('P3', "NONAKADEMIK");
	$excel->setActiveSheetIndex(0)->setCellValue('Q3', "TINGKAT");
	
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
	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$query=mysqli_query($kon,"select * from tb_formulir6  where status='Sudah Membayar' and username='$_GET[username]'");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
					
		                    // Bahasa Indodesia
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		    // Bahasa Inggris
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

		// Matematika
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		// Rata Rata
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('C'.$numrow, $a['password'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $rerata);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $rerata2);
		$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $rerata3);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $rerata4);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $rerata5);
		
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

		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(5);


	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Daftar Calon Mahasiswa PMDP");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="DaftarCalonMahasiswaPMDP.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
elseif(!empty($_GET['cariid']) AND empty($_GET['username']))
{
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR CALON MAHASISWA PMDP");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "PASSWORD");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "PRODI");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "I");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "II");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "III");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "IV");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "V");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "V");

	
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

	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$cariid = $_GET['cariid'];
	$cari = $_GET['cari'];
	$query=mysqli_query($kon,"select * from tb_formulir6 where status='Sudah Membayar' and $cariid = '$cari' or $cariid = '0' ");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
					
		                    // Bahasa Indodesia
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		    // Bahasa Inggris
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

	
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['pilihan_prodi']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $rerata);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $rerata2);
		$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $rerata3);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $rerata4);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $rerata5);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $rerata5);
		
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

		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(5);



	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Daftar Calon Mahasiswa PMDP");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Mandiri.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
elseif(empty($_GET['username']) AND empty($_GET['cariid']))
{
	$excel->setActiveSheetIndex(0)->setCellValue('A1', "MANDIRI");
	$excel->getActiveSheet()->mergeCells('A1:Q1');
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

	$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID");
	$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA");
	$excel->setActiveSheetIndex(0)->setCellValue('D3', "PRODI 1");
	$excel->setActiveSheetIndex(0)->setCellValue('E3', "PRODI 2");
	$excel->setActiveSheetIndex(0)->setCellValue('F3', "BI I");
	$excel->setActiveSheetIndex(0)->setCellValue('G3', "BI II");
	$excel->setActiveSheetIndex(0)->setCellValue('H3', "BI III");
	$excel->setActiveSheetIndex(0)->setCellValue('I3', "BI IV");
	$excel->setActiveSheetIndex(0)->setCellValue('J3', "BI V");
	$excel->setActiveSheetIndex(0)->setCellValue('K3', "RT BI");
	$excel->setActiveSheetIndex(0)->setCellValue('L3', "BG I");
	$excel->setActiveSheetIndex(0)->setCellValue('M3', "BG II");
	$excel->setActiveSheetIndex(0)->setCellValue('N3', "BG III");
	$excel->setActiveSheetIndex(0)->setCellValue('O3', "BG IV");
	$excel->setActiveSheetIndex(0)->setCellValue('P3', "BG V");
	$excel->setActiveSheetIndex(0)->setCellValue('Q3', "RT BG");
	$excel->setActiveSheetIndex(0)->setCellValue('R3', "M I");
	$excel->setActiveSheetIndex(0)->setCellValue('S3', "M II");
	$excel->setActiveSheetIndex(0)->setCellValue('T3', "M III");
	$excel->setActiveSheetIndex(0)->setCellValue('U3', "M IV");
	$excel->setActiveSheetIndex(0)->setCellValue('V3', "M V");
	$excel->setActiveSheetIndex(0)->setCellValue('W3', "RT M");
	$excel->setActiveSheetIndex(0)->setCellValue('X3', "R I");
	$excel->setActiveSheetIndex(0)->setCellValue('Y3', "R II");
	$excel->setActiveSheetIndex(0)->setCellValue('Z3', "R III");
	$excel->setActiveSheetIndex(0)->setCellValue('AA3', "R IV");
	$excel->setActiveSheetIndex(0)->setCellValue('AB3', "R V");
	$excel->setActiveSheetIndex(0)->setCellValue('AC3', "RT R");


	
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
	$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
	$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);

	
	$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
	$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
	
	$query=mysqli_query($kon,"select * from tb_formulir6 where status='Sudah Membayar' order by username ASC");
	$i = 1;
	$numrow = 4;
	while($a=mysqli_fetch_array($query)){
		$satu	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '1'"));
		$dua	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '2'"));
		$tiga	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '3'"));
		$empat	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '4'"));
		$lima	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '5'"));
		$enam	= mysqli_fetch_array(mysqli_query($kon,"select * from tb_nilai2 where username='$a[username]' AND semester = '6'"));
					
	
                                      
                    if(!empty($satu['peng_bahasa_indonesia'])){ $peng1c = 1;}else{ $peng1c = 0;}                      
                    $totalpeng1 = $satu['peng_bahasa_indonesia'] ;              
                    $totalrata1  = number_format(($totalpeng1), 1, '.', '');

                    if(!empty($dua['peng_bahasa_indonesia'])){ $peng2c = 1;}else{ $peng2c = 0;}                      
                    $totalpeng2 = $dua['peng_bahasa_indonesia'] ;              
                    $totalrata2  = number_format(($totalpeng2), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_indonesia'])){ $peng3c = 1;}else{ $peng3c = 0;}                      
                    $totalpeng3 = $tiga['peng_bahasa_indonesia'] ;              
                    $totalrata3  = number_format(($totalpeng3), 1, '.', '');

		    if(!empty($empat['peng_bahasa_indonesia'])){ $peng4c = 1;}else{ $peng4c = 0;}                      
                    $totalpeng4 = $empat['peng_bahasa_indonesia'] ;              
                    $totalrata4  = number_format(($totalpeng4), 1, '.', '');

		    if(!empty($lima['peng_bahasa_indonesia'])){ $peng5c = 1;}else{ $peng5c = 0;}                      
                    $totalpeng5 = $lima['peng_bahasa_indonesia'] ;              
                    $totalrata5  = number_format(($totalpeng5), 1, '.', '');


                    $jumlah = $totalrata1 + $totalrata2 + $totalrata3 + $totalrata4 + $totalrata5;
                    $rerata = $jumlah/5;

		
                                      
                    if(!empty($satu['peng_bahasa_inggris'])){ $peng1d = 1;}else{ $peng1d = 0;}                      
                    $totalpeng11 = $satu['peng_bahasa_inggris'] ;              
                    $totalrata11  = number_format(($totalpeng11), 1, '.', '');

                    if(!empty($dua['peng_bahasa_inggris'])){ $peng2d = 1;}else{ $peng2d = 0;}                      
                    $totalpeng22 = $dua['peng_bahasa_inggris'] ;              
                    $totalrata22  = number_format(($totalpeng22), 1, '.', '');

		    if(!empty($tiga['peng_bahasa_inggris'])){ $peng3d = 1;}else{ $peng3d = 0;}                      
                    $totalpeng33 = $tiga['peng_bahasa_inggris'] ;              
                    $totalrata33  = number_format(($totalpeng33), 1, '.', '');

		    if(!empty($empat['peng_bahasa_inggris'])){ $peng4d = 1;}else{ $peng4d = 0;}                      
                    $totalpeng44 = $empat['peng_bahasa_inggris'] ;              
                    $totalrata44  = number_format(($totalpeng44), 1, '.', '');

		    if(!empty($lima['peng_bahasa_inggris'])){ $peng5d = 1;}else{ $peng5d = 0;}                      
                    $totalpeng55 = $lima['peng_bahasa_inggris'] ;              
                    $totalrata55  = number_format(($totalpeng55), 1, '.', '');


                    $jumlah2 = $totalrata11 + $totalrata22 + $totalrata33 + $totalrata44 + $totalrata55;
                    $rerata2 = $jumlah2/5;

	
                                      
                    if(!empty($satu['peng_matematika'])){ $peng1e = 1;}else{ $peng1e = 0;}                      
                    $totalpeng111 = $satu['peng_matematika'] ;              
                    $totalrata111  = number_format(($totalpeng111), 1, '.', '');

                    if(!empty($dua['peng_matematika'])){ $peng2e = 1;}else{ $peng2e = 0;}                      
                    $totalpeng222 = $dua['peng_matematika'] ;              
                    $totalrata222  = number_format(($totalpeng222), 1, '.', '');

		    if(!empty($tiga['peng_matematika'])){ $peng3e = 1;}else{ $peng3e = 0;}                      
                    $totalpeng333 = $tiga['peng_matematika'] ;              
                    $totalrata333  = number_format(($totalpeng333), 1, '.', '');

		    if(!empty($empat['peng_matematika'])){ $peng4e = 1;}else{ $peng4e = 0;}                      
                    $totalpeng444 = $empat['peng_matematika'] ;              
                    $totalrata444  = number_format(($totalpeng444), 1, '.', '');

		    if(!empty($lima['peng_matematika'])){ $peng5e = 1;}else{ $peng5e = 0;}                      
                    $totalpeng555 = $lima['peng_matematika'] ;              
                    $totalrata555  = number_format(($totalpeng555), 1, '.', '');


                    $jumlah3 = $totalrata111 + $totalrata222 + $totalrata333 + $totalrata444 + $totalrata555;
                    $rerata3 = $jumlah3/5;

		// Rata Rata
                                      
                    if(!empty($satu['nilai_rata_rata'])){ $peng1r = 1;}else{ $peng1r = 0;}                      
                    $totalpeng1111 = $satu['nilai_rata_rata'] ;              
                    $totalrata1111  = number_format(($totalpeng1111), 1, '.', '');

                    if(!empty($dua['nilai_rata_rata'])){ $peng2r = 1;}else{ $peng2r = 0;}                      
                    $totalpeng2222 = $dua['nilai_rata_rata'] ;              
                    $totalrata2222  = number_format(($totalpeng2222), 1, '.', '');

		    if(!empty($tiga['nilai_rata_rata'])){ $peng3r = 1;}else{ $peng3r = 0;}                      
                    $totalpeng3333 = $tiga['nilai_rata_rata'] ;              
                    $totalrata3333  = number_format(($totalpeng3333), 1, '.', '');

		    if(!empty($empat['nilai_rata_rata'])){ $peng4r = 1;}else{ $peng4r = 0;}                      
                    $totalpeng4444 = $empat['nilai_rata_rata'] ;              
                    $totalrata4444  = number_format(($totalpeng4444), 1, '.', '');

		    if(!empty($lima['nilai_rata_rata'])){ $peng5r = 1;}else{ $peng5r = 0;}                      
                    $totalpeng5555 = $lima['nilai_rata_rata'] ;              
                    $totalrata5555  = number_format(($totalpeng5555), 1, '.', '');


                    $jumlah4 = $totalrata1111 + $totalrata2222 + $totalrata3333 + $totalrata4444 + $totalrata5555;
                    $rerata4 = $jumlah4/5;
		
		$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $i);
		$excel->setActiveSheetIndex(0)->setCellValueExplicit('B'.$numrow, $a['username'], PHPExcel_Cell_DataType::TYPE_STRING);
		$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $a['nama_lengkap']);
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a['pilihan_prodi1']);
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a['pilihan_prodi2']);
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $totalrata1);
		$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $totalrata2);
		$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $totalrata3);
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $totalrata4);
		$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $totalrata5);
		$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $rerata);
		$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $totalrata11);
		$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $totalrata22);
		$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $totalrata33);
		$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $totalrata44);
		$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $totalrata55);
		$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $rerata2);
		$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $totalrata111);
		$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $totalrata222);
		$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $totalrata333);
		$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $totalrata444);
		$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $totalrata555);
		$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $rerata3);
		$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $totalrata1111);
		$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $totalrata2222);
		$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $totalrata3333);
		$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $totalrata4444);
		$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $totalrata5555);
		$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $rerata4);


		
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
		$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);

		
		$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
		$i++;
		$numrow++;
	}
	
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(5);



	$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

	$excel->getActiveSheet(0)->setTitle("Mandiri 2 Pilihan");
	$excel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Mandiri.xlsx"');
	header('Cache-Control: max-age=0');
	$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$write->save('php://output');
}
?>

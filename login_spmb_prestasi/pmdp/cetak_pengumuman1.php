<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
	include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
    // echo date('h:i:s a'); // menampilkan jam sekarang
    // echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td><img src="../assets/img_app/logobaru.png" width="100%"/></td>

		  </tr>
		</table>

        <table align="center">
          <!--<tr>-->
          <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">-->
          <!--    <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>-->
          <!--</tr>-->

          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td>SPMB Prestasi</td>
          </tr>

          <tr>
              <td valign="top"  width="200">ID/Nomor Kartu Ujian</td>
              <td valign="top">:</td>
              <td><?php echo $a['username']; ?></td>
          </tr>

          <tr>
            <td valign="top">Nama</td>
            <td valign="top">:</td>
            <td><?php echo $a['nama_lengkap']; ?></td>
          </tr>

          <tr>
            <td valign="top">Prodi</td>
            <td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
          </tr>
          
          <tr>
            <td colspan="4"><?php echo bar128 (stripslashes($a['username'])); ?></td>
          </tr>
          
          <!--  <tr>-->
          <!--  <td colspan="4"><?php echo date('l, d-m-Y  H:i:s'); ?></td>-->
          <!--</tr>-->
</table>
<br>
<br>
<?php if($a['status_pmdp'] == "Lulus") {?>
<table align="center">
    <tr>
        <td>
            <h3 align="center">Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS SPMB Prestasi TAHAP I</h1>
        </td>
    </tr>
</table>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List
href="PENGUMUMAN%20SPMB%20PRESTASI%20TAHAP%20I_files/filelist.xml">

<link rel=themeData
href="PENGUMUMAN%20SPMB%20PRESTASI%20TAHAP%20I_files/themedata.thmx">
<link rel=colorSchemeMapping
href="PENGUMUMAN%20SPMB%20PRESTASI%20TAHAP%20I_files/colorschememapping.xml">

<style>
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:"Arial MT";
	mso-font-alt:Arial;
	mso-font-charset:1;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:5.1pt;
	mso-pagination:none;
	mso-outline-level:1;
	text-autospace:none;
	font-size:11.5pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-font-kerning:0pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:3.55pt;
	margin-right:.85pt;
	margin-bottom:0cm;
	margin-left:0cm;
	text-align:center;
	mso-pagination:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	font-weight:bold;
	text-underline:black;
	text-decoration:underline;
	text-underline:single;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Body Text Indent Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:14.15pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	mso-style-qformat:yes;
	color:blue;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:26.4pt;
	text-indent:-21.3pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;}
span.BodyTextIndentChar
	{mso-style-name:"Body Text Indent Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Body Text Indent";
	font-family:"Arial MT",sans-serif;
	mso-ascii-font-family:"Arial MT";
	mso-fareast-font-family:"Arial MT";
	mso-hansi-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	mso-ansi-language:#0021;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:0pt;
	mso-ligatures:none;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	mso-pagination:none;
	text-autospace:none;}
@page WordSection1
	{size:612.5pt 936.5pt;
	margin:67.0pt 65.0pt 14.0pt 80.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:936.5pt 612.5pt;
	mso-page-orientation:landscape;
	margin:3.0pt 69.0pt 0cm 65.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
 /* List Definitions */
 @list l0
	{mso-list-id:205236;
	mso-list-template-ids:205236;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1
	{mso-list-id:52432255;
	mso-list-template-ids:205236;}
@list l1:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l1:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l1:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l2
	{mso-list-id:166596294;
	mso-list-type:hybrid;
	mso-list-template-ids:43958580 -262895782 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l2:level1
	{mso-level-start-at:11;
	mso-level-text:%1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l2:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l2:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l2:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3
	{mso-list-id:173813319;
	mso-list-type:hybrid;
	mso-list-template-ids:390862544 -1583056578 -1588051452 -35493448 1087272314 1566373598 889384614 -496473096 1980511872 1284696032;}
@list l3:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:25.4pt;
	text-indent:-14.2pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l3:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.9pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:86.85pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.8pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.7pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:179.65pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:210.6pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:241.5pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l3:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:272.45pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l4
	{mso-list-id:441875665;
	mso-list-type:hybrid;
	mso-list-template-ids:1299111002 390868006 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l4:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:67.65pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l4:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:103.65pt;
	text-indent:-18.0pt;}
@list l4:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:139.65pt;
	text-indent:-9.0pt;}
@list l4:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:175.65pt;
	text-indent:-18.0pt;}
@list l4:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:211.65pt;
	text-indent:-18.0pt;}
@list l4:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:247.65pt;
	text-indent:-9.0pt;}
@list l4:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:283.65pt;
	text-indent:-18.0pt;}
@list l4:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:319.65pt;
	text-indent:-18.0pt;}
@list l4:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:355.65pt;
	text-indent:-9.0pt;}
@list l5
	{mso-list-id:509956046;
	mso-list-template-ids:205236;}
@list l5:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l5:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l6
	{mso-list-id:670134969;
	mso-list-type:hybrid;
	mso-list-template-ids:-362661560 8179996 -1101387972 -1676239698 1274836964 -716170354 2099384220 1428854028 1390080362 926171492;}
@list l6:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:75.3pt;
	text-indent:-18.05pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l6:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:147.7pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:220.4pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:293.1pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:365.8pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:438.55pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:511.25pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:583.95pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l6:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:656.65pt;
	text-indent:-18.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l7
	{mso-list-id:697466188;
	mso-list-template-ids:205236;}
@list l7:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l7:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l7:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l7:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8
	{mso-list-id:867445576;
	mso-list-type:hybrid;
	mso-list-template-ids:920695966 -2016365006 281948840 -1577174118 -867665580 -250476932 1054906262 -102874952 1105774248 -1238079196;}
@list l8:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:25.4pt;
	text-indent:-14.2pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l8:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.9pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:86.85pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.8pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.7pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:179.65pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:210.6pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:241.5pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l8:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:272.45pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9
	{mso-list-id:1443066094;
	mso-list-type:hybrid;
	mso-list-template-ids:972570232 -245325012 1562922680 1347457422 2048327528 -56221822 -18449702 1568318134 -1676626898 -199308156;}
@list l9:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:26.4pt;
	text-indent:-21.3pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l9:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:62.4pt;
	text-indent:-36.05pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l9:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:107.0pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:152.0pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:197.0pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:242.0pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:287.05pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:332.05pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l9:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:377.05pt;
	text-indent:-36.05pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l10
	{mso-list-id:1589391079;
	mso-list-template-ids:205236;}
@list l10:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l10:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l11
	{mso-list-id:1909419487;
	mso-list-type:hybrid;
	mso-list-template-ids:1808282530 1024065924 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l11:level1
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:57.3pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:bold;}
@list l11:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:93.3pt;
	text-indent:-18.0pt;}
@list l11:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:129.3pt;
	text-indent:-9.0pt;}
@list l11:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:165.3pt;
	text-indent:-18.0pt;}
@list l11:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:201.3pt;
	text-indent:-18.0pt;}
@list l11:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:237.3pt;
	text-indent:-9.0pt;}
@list l11:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:273.3pt;
	text-indent:-18.0pt;}
@list l11:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:309.3pt;
	text-indent:-18.0pt;}
@list l11:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:345.3pt;
	text-indent:-9.0pt;}
@list l12
	{mso-list-id:1929582316;
	mso-list-type:hybrid;
	mso-list-template-ids:246850558 -208473362 947291310 -2077334584 1692579398 751319360 -1095706574 -1914288448 -2115882788 -171165022;}
@list l12:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:25.4pt;
	text-indent:-14.2pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l12:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.9pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:86.85pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.8pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.7pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:179.65pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:210.6pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:241.5pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l12:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:272.45pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l13
	{mso-list-id:2081437189;
	mso-list-template-ids:2081437189;}
@list l13:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l14
	{mso-list-id:2110347217;
	mso-list-type:hybrid;
	mso-list-template-ids:1333183404 559681862 260587318 1254250408 1392694974 -676028838 -2014656650 1952220476 -1355107164 -2106550448;}
@list l14:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:25.4pt;
	text-indent:-14.2pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Arial MT",sans-serif;
	mso-fareast-font-family:"Arial MT";
	mso-bidi-font-family:"Arial MT";
	letter-spacing:0pt;
	mso-font-width:100%;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;
	mso-ansi-font-style:normal;
	mso-bidi-font-style:normal;}
@list l14:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.9pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:86.85pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:117.8pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.7pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:179.65pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:210.6pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:241.5pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l14:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:272.45pt;
	text-indent:-14.2pt;
	mso-ansi-language:#0021;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
</style>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-ID link=blue vlink=purple style='tab-interval:36.0pt;word-wrap:
break-word'>

<div class=WordSection1>

<p class=MsoTitle><span lang=id style='letter-spacing:-.1pt'>PENGUMUMAN<o:p></o:p></span></p>

<p class=MsoTitle><span lang=id style='text-decoration:none;text-underline:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:1.45pt'><b style='mso-bidi-font-weight:
normal'><span lang=id style='font-family:"Arial",sans-serif;mso-hansi-font-family:
"Arial MT";mso-bidi-font-family:"Arial MT"'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Peserta yang dinyatakan LULUS Seleksi Administrasi SPMB Jalur
Prestasi </span></b><b style='mso-bidi-font-weight:normal'><span lang=id
style='font-size:12.0pt;font-family:"Arial",sans-serif'>Tahap I </span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
font-family:"Arial",sans-serif;mso-ansi-language:IN'>diwajibkan mengikuti
tahapan :<sub><o:p></o:p></sub></span></b></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
12.0pt;margin-left:21.3pt;mso-add-space:auto;text-align:justify;line-height:
115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold'>Peserta </span><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>WAJIB</span></b><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold'> </span><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>melaksanakan</span></b><span lang=IN style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold'> </span><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Uji Kesehatan</span></b><span lang=IN style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold'> di Rumah Sakit Pemerintah dengan pemeriksaan sesuai
Form Uji Kesehatan (terlampir) <o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-indent:0cm;line-height:115%;mso-pagination:widow-orphan;
text-autospace:ideograph-numeric ideograph-other'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;line-height:115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;
text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold'>Pelaksanaan wawancara, verifikasi berkas dan uji
prestasi/bakat akan dilaksanakan di Poltekkes Kemenkes Bengkulu Gedung
Auditorium Jl. Indragiri No.03 Padang Harapan Bengkulu pada tanggal 10-12 Maret
2026<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-indent:0cm;line-height:115%;mso-pagination:widow-orphan;
text-autospace:ideograph-numeric ideograph-other'><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;line-height:115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;
text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Pada
saat pelaksanaan kegiatan point (2) dua, peserta wajib membawa berkas yang akan
dikumpulkan meliputi :</span><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold'>Form Uji Kesehatan yang telah
ditandatangani oleh Kepala Rumah Sakit Pemerintah (tanda tangan dan stampel
basah)<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Kartu
Nomor Pendaftaran SPMB Jalur Prestasi</span><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>Bukti cetak nilai raport
semester I-V dari aplikasi SPMB Jalur Prestasi</span><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Raport
asli semester I-V</span><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>e.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Fotocopy
Akreditasi Sekolah </span><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:-14.15pt;line-height:115%;mso-pagination:widow-orphan;
mso-list:l11 level1 lfo9;text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>f.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>Sertifikat/Piagam Penghargaan
asli dan fotocopy</span><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-align:justify;text-indent:0cm;line-height:115%;mso-pagination:widow-orphan;
text-autospace:ideograph-numeric ideograph-other'><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;line-height:115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;
text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>Wawancara
WAJIB</span></b><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'> </span></b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>dihadiri oleh calon mahasiswa yang</span><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'> </span><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>didampingi oleh</span><span lang=id style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'> salah <b
style='mso-bidi-font-weight:normal'>satu </b></span><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'>Orang Tua/Wali</span></b><b
style='mso-bidi-font-weight:normal'><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>. </span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-indent:0cm;line-height:115%;mso-pagination:widow-orphan;
text-autospace:ideograph-numeric ideograph-other'><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif;mso-ansi-language:IN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;line-height:115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;
text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Apabila sampai dengan tanggal </span><b style='mso-bidi-font-weight:
normal'><span lang=id style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>12 Maret 2026 </span></b><span lang=IN style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>calon
mahasiswa<b style='mso-bidi-font-weight:normal'> tidak </b></span><b
style='mso-bidi-font-weight:normal'><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>mengikuti tahapan Uji
Kesehatan, Wawancara, Verifikasi Berkas serta Uji Prestasi dan Bakat </span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>maka
peserta dinyatakan <u>GUGUR</u>.<o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-indent:0cm;line-height:115%;mso-pagination:widow-orphan;
text-autospace:ideograph-numeric ideograph-other'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:21.3pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
justify;line-height:115%;mso-pagination:widow-orphan;mso-list:l0 level1 lfo8;
text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>Pengumumuman KELULUSAN </span></b><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-bidi-font-weight:bold'>dapat dilihat di website </span><span lang=id><a
href="https://bit.ly/Kelulusan_Tahap1"><span style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;color:#EE0000'>https://bit.ly/Kelulusan_Tahap1</span></a></span><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:#EE0000'> </span><span lang=id style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif;mso-bidi-font-weight:bold'>pada tanggal</span><b
style='mso-bidi-font-weight:normal'><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'> 17 Maret 2026.</span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-right:5.75pt;text-align:justify;line-height:
115%;tab-stops:26.4pt 152.65pt 256.6pt 318.0pt 380.8pt 422.35pt'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Bagi peserta yang <b style='mso-bidi-font-weight:normal'>TIDAK
LULUS</b></span><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'> </span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>melalui Jalur
SPMB Prestasi</span></b><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif;mso-ansi-language:IN'> dapat mengikuti </span><b
style='mso-bidi-font-weight:normal'><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>SPMB<span
style='mso-spacerun:yes'>� </span>Bersama</span></b><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'> melalui <b style='mso-bidi-font-weight:normal'>website</b>
: </span><span lang=id><a href="https://spmb-polkeslu.cloud/"><b><span
style='font-size:12.0pt;line-height:115%;color:windowtext'>https://spmb-polkeslu.cloud/</span></b></a>
(Klik Menu Pendaftaran,</span><span lang=id style='font-size:12.0pt;line-height:
115%;font-family:"Arial",sans-serif'> Pilih SPMB Bersama)<span
style='color:#EE0000'> </span>atau </span><b><span lang=id style='font-size:
12.0pt;line-height:115%'>https://spmb-poltekkes.kemkes.go.id/</span></b><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>
yang dimulai tanggal <span style='mso-spacerun:yes'></span><b>23
Februari 2026 - April 2026</b> (dibuka 24 jam).<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:5.75pt;text-align:justify;line-height:
115%;tab-stops:26.4pt 152.65pt 256.6pt 318.0pt 380.8pt 422.35pt'><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

</div>

<div class=WordSection2>

<p class=MsoBodyText><span lang=id><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=id><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=id><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=id><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=1049
 style='width:786.75pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.95pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>JADWAL PELAKSANAAN </span></b><b
  style='mso-bidi-font-weight:normal'><span lang=id style='font-family:"Arial",sans-serif'>WAWANCARA,
  VERIFIKASI BERKAS, PRESTASI DAN BAKAT<span style='mso-bidi-font-weight:bold'><o:p></o:p></span></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>SELEKSI PENERIMAAN MAHASISWA BARU
  (SPMB) JALUR PRESTASI <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:6.55pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:6.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>POLITEKNIK KESEHATAN BENGKULU<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.95pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:8.0pt;text-align:center'><b><span
  lang=id style='font-family:"Arial",sans-serif'>TAHUN AKADEMIK 2026/2027<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.4pt'>
  <td width=36 nowrap style='width:27.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black;mso-color-alt:windowtext'>NO</span></b><b><span
  lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></b></p>
  </td>
  <td width=127 nowrap style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black;mso-color-alt:windowtext'>HARI/TANGGAL</span></b><b><span
  lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></b></p>
  </td>
  <td width=548 nowrap style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black;mso-color-alt:windowtext'>PROGRAM
  STUDI (PRODI)</span></b><b><span lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></b></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black;mso-color-alt:windowtext'>WAKTU</span></b><b><span
  lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></b></p>
  </td>
  <td width=189 nowrap colspan=3 style='width:5.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black;mso-color-alt:windowtext'>TEMPAT</span></b><b><span
  lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:48.6pt'>
  <td width=36 nowrap style='width:27.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>1<o:p></o:p></span></p>
  </td>
  <td width=127 nowrap style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Selasa/<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>10 Maret 2026<o:p></o:p></span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:-14.15pt;mso-pagination:widow-orphan;mso-list:l7 level1 lfo10;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEPERAWATAN DAN PROFESI NERS <o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:-14.15pt;mso-pagination:widow-orphan;mso-list:l7 level1 lfo10;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEPERAWATAN DAN PROFESI NERS KELAS INTERNASIONAL (KI)<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:-14.15pt;mso-pagination:widow-orphan;mso-list:l7 level1 lfo10;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEPERAWATAN BENGKULU<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:-14.15pt;mso-pagination:widow-orphan;mso-list:l7 level1 lfo10;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEPERAWATAN CURUP<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:-14.15pt;mso-pagination:widow-orphan;mso-list:l7 level1 lfo10;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III SANITASI<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;mso-add-space:auto;
  text-indent:0cm;mso-pagination:widow-orphan;text-autospace:ideograph-numeric ideograph-other'><span
  lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 nowrap colspan=3 rowspan=3 style='width:5.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>AUDITORIUM POLTEKKES BENGKULU<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:55.0pt'>
  <td width=36 style='width:27.3pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>2<o:p></o:p></span></p>
  </td>
  <td width=127 style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Rabu/<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>11 Maret 2026<o:p></o:p></span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l10 level1 lfo12;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEBIDANAN &amp; PENDIDIKAN PROFESI BIDAN<span
  style='mso-spacerun:yes'>� </span><o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l10 level1 lfo12;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEBIDANAN BENGKULU<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l10 level1 lfo12;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEBIDANAN CURUP<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l10 level1 lfo12;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN PROMOSI KESEHATAN<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:36.0pt;mso-add-space:auto;
  text-indent:0cm;mso-pagination:widow-orphan;text-autospace:ideograph-numeric ideograph-other'><span
  lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:48.7pt'>
  <td width=36 style='width:27.3pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>3<o:p></o:p></span></p>
  </td>
  <td width=127 style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Kamis/<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>12 Maret 2026<o:p></o:p></span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l5 level1 lfo13;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III TEKNOLOGI LABORATORIUM MEDIS <o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l5 level1 lfo13;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III FARMASI<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l5 level1 lfo13;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN GIZI DAN DIETETIKA<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l5 level1 lfo13;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III GIZI<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:0cm;mso-pagination:widow-orphan;text-autospace:ideograph-numeric ideograph-other'><span
  lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:15.0pt;mso-row-margin-right:9.45pt'>
  <td width=163 nowrap colspan=2 valign=bottom style='width:122.45pt;
  border:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal style='text-indent:24.45pt'><span lang=id
  style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='text-indent:24.45pt'><span lang=id
  style='font-family:"Arial",sans-serif'>Catatan :<o:p></o:p></span></p>
  </td>
  <td width=548 nowrap valign=bottom style='width:410.8pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=149 nowrap valign=bottom style='width:111.75pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=16 nowrap valign=bottom style='width:11.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 nowrap valign=bottom style='width:120.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=13><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:15.0pt'>
  <td width=36 nowrap valign=top style='width:27.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=right style='text-align:right'><span lang=id
  style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=1013 nowrap colspan=6 valign=bottom style='width:759.45pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l13 level1 lfo11;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>Peserta
  berpakaian sopan (celana berbahan dasar, kemeja berkancing depan) <o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l13 level1 lfo11;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>Memakai
  sepatu dan rambut rapi (untuk yang laki-laki dan perempuan yang tidak
  mengenakan hijab)<o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l13 level1 lfo11;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>Peserta
  hadir sesuai dengan jadwal yang telah ditentukan <o:p></o:p></span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
  text-indent:-18.0pt;mso-pagination:widow-orphan;mso-list:l13 level1 lfo11;
  text-autospace:ideograph-numeric ideograph-other'><![if !supportLists]><span
  lang=id style='font-family:"Arial",sans-serif;mso-fareast-font-family:Arial'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=id style='font-family:"Arial",sans-serif'>Informasi
  selanjutnya akan diumumkan pada website <u>http://</u></span><span lang=id><a
  href="http://www.poltekkesbengkulu.ac.id"><span lang=IN style='font-family:
  "Arial",sans-serif;color:windowtext;mso-ansi-language:IN'>www.poltekkesbengkulu.ac.id</span></a></span><span
  lang=id style='font-family:"Arial",sans-serif'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:1.5pt'><span lang=id><o:p>&nbsp;</o:p></span></p>

</div>

</body>
</html>
<script>
  window.print();
</script>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
.page-break {
    page-break-before: always; /* Untuk browser lama */
    break-before: page; /* Untuk browser modern */
}

</style>

<?php } elseif ($a['status_pmdp'] == "Tidak Lulus" || $a['status_pmdp'] == "") { ?>
<table align="center">
    <tr>
        <td>
            <!--<h3>&emsp;&emsp;Selamat anda dinyatakan:</h3>-->
        </td>
    </tr>
    <tr>
        <td>
            <h1>Maaf Anda dinyatakan Belum lulus</h1>
            <p align="center">Silahkan mencoba SPMB Jalur Bersama di link ini <a href="https://spmb-poltekkes.kemkes.go.id/" class="btn btn-md btn-success"> SPMB Bersama</a></p>
        </td>
    </tr>
</table>
<?php }else { ?>
    <a href="index.php" class="btn btn-md btn-success">Kembali</a>
<?php } ?>
<div style="break-after:page"></div>
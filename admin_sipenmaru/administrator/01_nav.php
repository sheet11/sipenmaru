<!DOCTYPE html>
<?php
    include "session.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Poltekkes Kemenkes Bengkulu</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                SPMB
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
          
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">                                
                                <span>Seleksi Pendaftaran Mahasiswa Baru Poltekkes Kemenkes Bengkulu</span>
                            </a>
                            
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <li class="image-center">
                        <img src="../assets/img/ptk-bkl.png" class="user-image img-responsive" />
                    </li>
                        
                    </div>
                    <!-- search form -->
                    
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li>

				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-circle-o"></i>
				            <span>Gelombang 1</span>
				            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				          </a>
				          <ul class="treeview-menu">
				            <li class="treeview"><a href="09_daftar_calon_mahasiswa_pmdp.php"><i class="fa fa-circle-o"></i>SPMB Prestasi<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="09_daftar_calon_mahasiswa_pmdp.php"><i class="fa fa-circle-o"></i>Sudah Membayar</a></li>
                                    <li><a href="09_daftar_calon_mahasiswa_pmdp_ambil_id.php"><i class="fa fa-circle-o"></i>Belum Membayar</a></li>
                                    <li><a href="09_daftar_calon_mahasiswa_pmdp_belum_mendaftar.php"><i class="fa fa-circle-o"></i>Belum Mendaftar</a></li>

                                     <li><a href="09_daftar_calon_mahasiswa_pmdp_cetak_raport.php"><i class="fa fa-circle-o"></i>Cetak Raport</a></li>

                                     <li><a href="09_daftar_calon_mahasiswa_pmdp_cetak_sertifikat.php"><i class="fa fa-circle-o"></i>Cetak Sertifikat</a></li>

                                    <li><a href="importlulus.php"><i class="fa fa-upload"></i> Import Tahap 1</a></li>

                                    <li><a href="importlulus2.php"><i class="fa fa-upload"></i> Import Tahap 2</a></li>


                                </ul>
                            </li>
				          </ul>
				        </li>


				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-circle-o"></i>
				            <span>Laporan Gelombang 1</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">

				            <li class="treeview">
                                <a href="01_laporan_pmdp.php"><i class="fa fa-circle-o"></i>Laporan SPMB Prestasi<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                <ul class="treeview-menu">
                                    <li><a href="09_laporan_pmdp_seluruh.php"><i class="fa fa-circle-o"></i>Keseluruhan</a></li>
                                    
                                    <li><a href="09_laporan_pmdp.php"><i class="fa fa-circle-o"></i>Umum</a></li>

                                    <li><a href="09_laporan_tingkatpoltekkes.php"><i class="fa fa-circle-o"></i>Tingkat Poltekkes</a></li>

                                    <li><a href="09_tingkat_prodi.php"><i class="fa fa-circle-o"></i>Tingkat Prodi</a></li>

                                    <li><a href="09_laporan_jenis_kelamin.php"><i class="fa fa-circle-o"></i>Jenis Kelamin</a></li>

                                    <li><a href="09_laporan_asal_sekolah.php"><i class="fa fa-circle-o"></i>Asal Sekolah</a></li>

                                    <li><a href="09_laporan_keterangan_sekolah.php"><i class="fa fa-circle-o"></i>Keterangan Sekolah</a></li>

                                    <li><a href="09_golongan_darah.php"><i class="fa fa-circle-o"></i>Golongan Darah</a></li>

                                    <li><a href="09_penghasilan_orangtua.php"><i class="fa fa-circle-o"></i>Penghasilan Ortu</a></li>

                                     <li><a href="09_pekerjaan_orangtua.php"><i class="fa fa-circle-o"></i>Pekerjaan Ortu</a></li>

                                    <li><a href="09_daftar_nilai_pmdp.php"><i class="fa fa-circle-o"></i>Daftar Nilai PMDP</a></li>
                                </ul>
                            </li>          
				          </ul>
				        </li>

                <li class="treeview">
				          <a href="#">
				            <i class="fa fa-circle-o"></i>
				            <span>Jalur Mandiri</span>
				            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				          </a>
				          <ul class="treeview-menu">
				            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>1 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="082_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Sudah Membayar</a></li>
                                    <li><a href="082_daftar_calon_mahasiswa_ambil_id.php"><i class="fa fa-circle-o"></i>Belum Membayar</a></li>
                                    <li><a href="082_daftar_calon_mahasiswa_belum_mendaftar.php"><i class="fa fa-circle-o"></i>Belum Mendaftar</a></li>
                                    <li><a href="09_daftar_nilai_assesment.php"><i class="fa fa-circle-o"></i>Daftar Nilai Assesment</a></li>
                                    <li><a href="91_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>L.Bahasa 1</a></li>
                                    <li><a href="92_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>L.Bahasa 2</a></li>
                                    <li><a href="93_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>L.Bahasa 3</a></li>
                                    <li><a href="94_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>L.Bahasa 4</a></li>
                                    <li><a href="95_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>L.Bahasa 5</a></li>

                                </ul>
                    </li>

                    <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>2 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="081_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Sudah Membayar</a></li>
                                    <li><a href="081_daftar_calon_mahasiswa_ambil_id.php"><i class="fa fa-circle-o"></i>Belum Membayar</a></li>
                                    <li><a href="081_daftar_calon_mahasiswa_belum_mendaftar.php"><i class="fa fa-circle-o"></i>Belum Mendaftar</a></li>
                                    <li><a href="081_sesi.php"><i class="fa fa-circle-o"></i>Sesi Ujian</a></li>
                                    <li><a href="82_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 1</a></li>
                                    <li><a href="83_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 2</a></li>
                                    <li><a href="84_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 3</a></li>
                                    <li><a href="85_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 4</a></li>
                                    <li><a href="86_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 5</a></li>
                                    <li><a href="87_daftar_calon_mahasiswa.php"><i class="fa fa-circle-o"></i>Labkom 6</a></li>                                  
                                </ul>
                    </li>

				          </ul>
				        </li>


                <li class="treeview">
				          <a href="#">
				            <i class="fa fa-circle-o"></i>
				            <span>Laporan Jalur Mandiri</span>
				            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				          </a>
				          <ul class="treeview-menu">
				            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>1 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="01_laporan_1pilihan_gelombang2.php"><i class="fa fa-circle-o"></i>Umum</a></li>
                                    <li><a href="01_laporan_tingkatpoltekkes_1pil_mandiri.php"><i class="fa fa-circle-o"></i>Tingkat Poltekkes</a></li>
                                    <li><a href="01_tingkat_prodi_1pil_mandiri.php"><i class="fa fa-circle-o"></i>Tingkat Prodi</a></li>
                                     <li><a href="01_jenis_kelamin_1pil_mandiri.php"><i class="fa fa-circle-o"></i>Jenis Kelamin</a></li>

                                    <li><a href="01_laporan_asal_sekolah_1pil_mandiri.php"><i class="fa fa-circle-o"></i>Asal Sekolah</a></li>
                                    <li><a href="01_laporan_keterangan_sekolah_1pil_mandiri.php"><i class="fa fa-circle-o"></i>Keterangan Sekolah</a></li>

                                     <li><a href="importmandiri.php"><i class="fa fa-upload"></i> Import Tahap 1</a></li>
                                     <li><a href="importmandiri_tahap2.php"><i class="fa fa-upload"></i> Import Tahap 2</a></li>
                                    
                                </ul>
                    </li>

                    <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>2 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="01_laporan_2pilihan_gelombang2.php"><i class="fa fa-circle-o"></i>Umum</a></li>
                                    <li><a href="01_laporan_tingkatpoltekkes_2pil_mandiri.php"><i class="fa fa-circle-o"></i>Tingkat Poltekkes</a></li>
                                    <li><a href="01_tingkat_prodi_2pil_mandiri.php"><i class="fa fa-circle-o"></i>Tingkat Prodi</a></li>
                                    <li><a href="01_jenis_kelamin_2pil_mandiri.php"><i class="fa fa-circle-o"></i>Jenis Kelamin</a></li>
                                    <li><a href="01_laporan_asal_sekolah_2pil_mandiri.php"><i class="fa fa-circle-o"></i>Asal Sekolah</a></li>
                                    <li><a href="01_laporan_keterangan_sekolah_2pil_mandiri.php"><i class="fa fa-circle-o"></i>Keterangan Sekolah</a></li>
                                    <li><a href="cetak_lulus_tahap2.php"><i class="fa fa-circle-o"></i>Cetak Excel kelulusan tahap II</a></li>

                                    <li><a href="importmandiri2pilihan.php"><i class="fa fa-upload"></i> Import Tahap 1</a></li>

                                    <li><a href="importmandiri_2pilihan_tahap2.php"><i class="fa fa-upload"></i> Import Tahap 2</a></li>
                                    
                                </ul>
                    </li>

				          </ul>
				        </li>

                
<!--

				       


						<li class="treeview">
				          	<a href="#">
					            <i class="fa fa-circle-o"></i>
					            <span>Pengaturan Gel 1</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
					        </a>
					        <ul class="treeview-menu">
					          	
                                <li class="treeview"><a href=""><i class="fa fa-circle-o"></i>PMDP<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
						          <ul class="treeview-menu">
							          	<li><a href="kehadiran_PMDP.php"><i class="fa fa-circle-o"></i>Kehadiran</a></li>
			                            <li><a href="kelulusan_PMDP.php"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						          </ul>
					       		 </li>
                                  
                                  
					       		 </li>
					       	</ul>
				       		
				       </li>






				        <li class="treeview">
				          	<a href="#">
					            <i class="fa fa-circle-o"></i>
					            <span>Pengaturan Gel 2</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
					        </a>
					        <ul class="treeview-menu">
					          	<li class="treeview"><a href=""><i class="fa fa-circle-o"></i>1 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
						          <ul class="treeview-menu">
							          	<li><a href="kehadiran.php"><i class="fa fa-circle-o"></i>Kehadiran</a></li>
			                            <li><a href="kelulusan.php"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						          </ul>
					       		 </li>

					       		 <li class="treeview"><a href=""><i class="fa fa-circle-o"></i>2 Pilihan<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
						          <ul class="treeview-menu">
							          	<li><a href="kehadiran2pilihan.php"><i class="fa fa-circle-o"></i>Kehadiran</a></li>
			                            <li><a href="kelulusan2pilihan.php"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						          </ul>
					       		 </li>
					       	</ul>
				       </li>

                       <li class="treeview">
				          	<a href="#">
					            <i class="fa fa-circle-o"></i>
					            <span>Pengumuman Kelulusan</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
					        </a>
					        <ul class="treeview-menu">
					          	<li><a href="500_daftar_pengumuman_kelulusan_jalur_umum.php"><i class="fa fa-circle-o"></i>Jalur Umum</a></li>
					       	</ul>
				       		
				       </li>
          -->

                       <li class="treeview">
				          	<a href="#">
					            <i class="fa fa-circle-o"></i>
					            <span>Data Master</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
					        </a>
					        <ul class="treeview-menu">
                                <li><a href="88_asesmen.php"><i class="fa fa-circle-o"></i>List Asesmen</a></li>
                                <li><a href="88_daftar_asesmen.php"><i class="fa fa-circle-o"></i>Daftar Asesmen</a></li>
					          	<li><a href="03_daftar_agama.php"><i class="fa fa-circle-o"></i>Agama</a></li>
                                <li><a href="05_daftar_prodi.php"><i class="fa fa-circle-o"></i>Prodi</a></li>
					       		<li><a href="07_daftar_tempat_ujian.php"><i class="fa fa-circle-o"></i>Tempat Ujian</a></li>
                                <li><a href="12_daftar_jenis_kelamin.php"><i class="fa fa-circle-o"></i>Jenis Kelamin</a></li>
                                <li><a href="04_daftar_user.php"><i class="fa fa-circle-o"></i>User</a></li>
                                <li><a href="04_daftar_tanggal_ujian.php"><i class="fa fa-circle-o"></i>Tanggal Ujian</a></li>
                                <li><a href="04_daftar_tempat_ujian.php"><i class="fa fa-circle-o"></i>Tempat Ujian</a></li>
                                <li><a href="04_daftar_ruang_ujian.php"><i class="fa fa-circle-o"></i>Ruang Ujian</a></li>
                                <li><a href="04_daftar_sesi_ujian.php"><i class="fa fa-circle-o"></i>Sesi Ujian</a></li>
					       	</ul>
				       		
				       </li>

                 <li class="treeview">
                      <a href="periode.php">
                      <i class="fa fa-calendar"></i>
                      <span>Periode Pendaftaran</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                      </a>
                      <ul class="treeview-menu">
                      <li><a href="periode.php"><i class="fa fa-list"></i> Daftar Periode</a></li>
                      </ul>
                 </li>

                </section>
                <!-- /.sidebar -->
            </aside>

    


        <!-- jQuery 2.0.2 -->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="../assets///cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="../assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../assets/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>

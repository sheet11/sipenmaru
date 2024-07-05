<?php
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Daftar_seleksi_calon_siswa'; //Beri nama file PDF hasil.
define('_MPDF_PATH','mpdf60/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();
?>
 
<h1>Laporan PMDP</h1>

                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2"><b>Jumlah Pendaftar</b></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b> Pilihan Prodi</b></td>
                        </tr>

                       <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Kebidanan Curup</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                         <tr>
                            <td> Jumlah Pendaftar Prodi D3 Teknologi Laboratorium Medis</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Sanitasi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Gizi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Bengkulu</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu'and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Keperawatan Curup</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi D3 Farmasi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Gizi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Promosi Kesehatan</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jumlah Pendaftar Prodi Sarjana Terapan Keperawatan dan Ners</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>



                        <tr>
                            <td colspan="3"><strong>Jenis Kelamin</strong></td>
                        </tr>

                        <tr>
                            <td> Laki- Laki </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Teknologi Laboratorium Medis</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Sanitasi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Gizi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Bengkulu </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Keperawatan Curup </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi D3 Farmasi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Gizi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Promosi Kesehatan </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Laki-laki Prodi Sarjana Terapan Keperawatan dan Ners</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Laki-Laki' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr class="btn btn-warning">
                            <td>Perempuan </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Bengkulu </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Bengkulu' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Kebidanan Curup </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Kebidanan Curup' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Teknologi Laboratorium Medis</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Teknologi Laboratorium Medis' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Sanitasi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Sanitasi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Gizi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Gizi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Bengkulu </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Bengkulu' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Keperawatan Curup </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Keperawatan Curup' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi D3 Farmasi </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='D3 Farmasi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Gizi</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Gizi' and jenis_kelamin='Perempuan' and status='Sudah Membayar'");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Promosi Kesehatan </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Promosi Kesehatan' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan</td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>

                        <tr>
                            <td> Jenis Kelamin Perempuan Prodi Sarjana Terapan Keperawatan dan Ners </td> 
                            <td> :</td> 
                            <td><?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='Sarjana Terapan Keperawatan dan Ners' and jenis_kelamin='Perempuan' and status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?></td>
                        </tr>


   
</table>
 
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

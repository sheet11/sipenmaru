<?php 
    include"01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");
    include "js/date.php";
    $query=mysqli_query($kon,"select * from tb_formulir5 where username='$_GET[username]'");
    $a=mysqli_fetch_array($query);
?>
    
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;"> 
            <form method="post" action="03_prosesedit_calon_mahasiswa_lintasprovinsi2pilihan.php" enctype="multipart/form-data">  
                <table width="100%" class="table table-hover">
                    <input type="hidden" name="id_formulir" value="<?php echo "$a[id_formulir]"; ?>">
                    <input type="hidden" name="username" value="<?php echo "$a[username]"; ?>">
                    <input type="hidden" name="halaman" value="<?php if(!empty($_GET['halaman'])){ echo "$_GET[halaman]";}else{ echo "0";} ?>">
                    <tr>
                        <td colspan="3"><h2>Selamat Datang</h2>   
                                        <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
                                        <hr></hr></td> 
                    </tr>

                    <tr>
                        <td width="15%">ID/Nomor Kartu Ujian</td>
                        <td width="2%">:</td>
                        <td><input type="text" maxlength="20"  value="<?php echo $a['username']; ?>" disabled class="form-control"></td>
                    </tr>

            
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" value="<?php echo $a['nama_lengkap']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Pilihan Prodi 1 </td>
                        <td>:</td>
                        <td><input type="text" name="pilihan_prodi1" value="<?php echo $a['pilihan_prodi1']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Pilihan Prodi 2</td>
                        <td>:</td>
                        <td><input type="text" name="pilihan_prodi2" value="<?php echo $a['pilihan_prodi2']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" class="form-control"><?php echo $a['alamat']; ?></textarea></td>
                    </tr>
                    
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name='jenis_kelamin' class='form-control' >";
                            <option value="<?php echo $a['jenis_kelamin']; ?>"><?php echo $a['jenis_kelamin']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_jenis_kelamin ");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[nama_jenis_kelamin]'>$row[nama_jenis_kelamin]</option>
                            ";
                             }
                            ?>
                            echo"</select>
                        </td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select name='agama' class='form-control' >";
                            <option value="<?php echo $a['agama']; ?>"><?php echo $a['agama']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_agama");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[nama_agama]'>$row[nama_agama]</option>
                            ";
                             }
                            ?>
                            echo"</select></td>
                    </tr>
            
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td><input type="text" name="no_hp"  value="<?php echo $a['no_hp']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir"  value="<?php echo $a['tempat_lahir']; ?>" class="form-control"></td>
                    </tr>   

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tanggal_lahir" id="tgls" value="<?php echo $a['tanggal_lahir']; ?>" class="form-control"></td>
                    </tr>
            
                    <tr>
                        <td>Golongan Darah</td>
                        <td>:</td>
                        <td><input type="text" name="golongan_darah" value="<?php echo $a['golongan_darah']; ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Kependudukan (NIK)</td>
                        <td>:</td>
                        <td><input type="text" name="nik" value="<?php echo $a['nik']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Nama Orang Tua</td>
                        <td>:</td>
                        <td><input type="text" name="nama_orang_tua" value="<?php echo $a['nama_orang_tua']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Pekerjaan Orang Tua</td>
                        <td>:</td>
                        <td><input type="text" name="pekerjaan_orang_tua" value="<?php echo $a['pekerjaan_orang_tua']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Nama Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="nama_sekolah" value="<?php echo $a['nama_sekolah']; ?>" class="form-control"></td>
                    </tr>
            
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><select name='asal_sekolah' class='form-control' >";
                            <option value="<?php echo $a['asal_sekolah']; ?>"><?php echo $a['asal_sekolah']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_asal_sekolah");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[asal_sekolah]'>$row[asal_sekolah]</option>
                            ";
                             }
                            ?>
                            echo"</select></td>
                    </tr>

                    <tr>
                        <td>Keterangan Sekolah</td>
                        <td>:</td>
                        <td><select name='keterangan_sekolah' class='form-control' >";
                            <option value="<?php echo $a['keterangan_sekolah']; ?>"><?php echo $a['keterangan_sekolah']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_keterangan_sekolah");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[keterangan_sekolah]'>$row[keterangan_sekolah]</option>
                            ";
                             }
                            ?>
                            echo"</select></td>
                    </tr>

                    <tr>
                        <td>Daerah Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="daerah_asal" value="<?php echo $a['daerah_asal']; ?>" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Tempat Ujian</td>
                        <td>:</td>
                        <td><select name='tempat_ujian' class='form-control' >";
                            <option value="<?php echo $a['tempat_ujian']; ?>"><?php echo $a['tempat_ujian']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_tempat_ujian");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[tempat_ujian]'>$row[tempat_ujian]</option>
                            ";
                             }
                            ?>
                            echo"</select></td>
                    </tr>

                    <tr>
                        <td>Ruang Ujian</td>
                        <td>:</td>
                        <td><select name='ruang_ujian' class='form-control' >";
                            <option value="<?php echo $a['ruang_ujian']; ?>"><?php echo $a['ruang_ujian']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_ruang_ujian");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[nama_ruang_ujian]'>$row[nama_ruang_ujian]</option>
                            ";
                             }
                            ?>
                            echo"</select> </td>
                    </tr>

                    <tr>
                        <td>Foto</td>
                        <td>: </td>
                        <td><input type="file" name="gambar" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Ikut Tes Tertulis</td>
                        <td>:</td>
                        <td><select name='ikut_tes_tertulis' class='form-control' >";
                            <option value="<?php echo $a['ikut_tes_tertulis']; ?>"><?php echo $a['ikut_tes_tertulis']; ?></option>
                            <?php include "../config/koneksi.php";
                            $query = mysqli_query($kon,"SELECT * FROM tb_ikut_tes_tertulis");
                            while ($row = mysqli_fetch_array($query)) {
                             echo"
                            <option value='$row[keterangan_ujian]'>$row[keterangan_ujian]</option>
                            ";
                             }
                            ?>
                            echo"</select></td>
                    </tr>


                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td >
                            <input type="submit" name="submit" value="Simpan" class="btn btn-danger">
                            <input type="reset" name="submit" value="Hapus" class="btn btn-success">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>


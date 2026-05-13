<?php
$page = "calon internasional";
include "01_nav.php";
error_reporting(0);
?>

<?php
include "../config/koneksi.php";
$query = mysqli_query($kon, "select * from tb_interstudent where username='$_GET[username]'");
$a = mysqli_fetch_array($query);
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <table style="width:100%;">
                <tr class="info">
                    <td align="left" colspan="6"><b><h4>Edit Data Calon Mahasiswa Baru Jalur Internasional</b></h4></td>
                </tr>
                <tr>
                    <td>
                        <a href="10_daftar_calon_mahasiswa_internasional.php?halaman=<?php echo $_GET['halaman']; ?>" class="btn btn-primary">Kembali</a>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <form method="post" action="10_prosesedit_calon_mahasiswa_internasional.php" enctype="multipart/form-data">
                <input type="hidden" name="halaman" value="<?php echo $_GET['halaman']; ?>">
                <table style="width:100%;" class="table table-bordered">
                    <tr>
                        <td width="20%">ID (Username)</td>
                        <td><input type="text" name="username" class="form-control" value="<?php echo $a['username']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" class="form-control" value="<?php echo $a['password']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Depan</td>
                        <td><input type="text" name="first_name" class="form-control" value="<?php echo $a['first_name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Belakang</td>
                        <td><input type="text" name="last_name" class="form-control" value="<?php echo $a['last_name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="dob" class="form-control" value="<?php echo $a['dob']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="gender" class="form-control">
                                <option value="Male" <?php if($a['gender'] == 'Male'){echo "selected";} ?>>Male</option>
                                <option value="Female" <?php if($a['gender'] == 'Female'){echo "selected";} ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Negara Asal (Nationality)</td>
                        <td><input type="text" name="nationality" class="form-control" value="<?php echo $a['nationality']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nomor Passport</td>
                        <td><input type="text" name="passport" class="form-control" value="<?php echo $a['passport']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" class="form-control" value="<?php echo $a['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td><input type="text" name="phone" class="form-control" value="<?php echo $a['phone']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Lokasi Saat Ini</td>
                        <td><input type="text" name="current_location" class="form-control" value="<?php echo $a['current_location']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tingkat Pendidikan</td>
                        <td><input type="text" name="education_level" class="form-control" value="<?php echo $a['education_level']; ?>"></td>
                    </tr>
                    <tr>
                        <td>GPA / Nilai Rata-rata</td>
                        <td><input type="text" name="gpa" class="form-control" value="<?php echo $a['gpa']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Sekolah / Universitas Sebelumnya</td>
                        <td><input type="text" name="previous_school" class="form-control" value="<?php echo $a['previous_school']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Program Pilihan 1</td>
                        <td><input type="text" name="program1" class="form-control" value="<?php echo $a['program1']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Program Pilihan 2</td>
                        <td><input type="text" name="program2" class="form-control" value="<?php echo $a['program2']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Pendaftaran Beasiswa</td>
                        <td><input type="text" name="scholarship" class="form-control" value="<?php echo $a['scholarship']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Sertifikat Bahasa Inggris</td>
                        <td><input type="text" name="english_proficiency" class="form-control" value="<?php echo $a['english_proficiency']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Statement of Purpose (SOP)</td>
                        <td><textarea name="sop" class="form-control" rows="5"><?php echo $a['sop']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Referensi (Referral)</td>
                        <td><input type="text" name="referral" class="form-control" value="<?php echo $a['referral']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" name="submit">Simpan Perubahan</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</aside>

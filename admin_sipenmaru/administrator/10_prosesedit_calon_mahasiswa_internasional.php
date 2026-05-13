<?php
include "../config/koneksi.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $passport = $_POST['passport'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $current_location = $_POST['current_location'];
    $education_level = $_POST['education_level'];
    $gpa = $_POST['gpa'];
    $previous_school = $_POST['previous_school'];
    $program1 = $_POST['program1'];
    $program2 = $_POST['program2'];
    $scholarship = $_POST['scholarship'];
    $english_proficiency = $_POST['english_proficiency'];
    $sop = $_POST['sop'];
    $referral = $_POST['referral'];
    
    $halaman = $_POST['halaman'];

    $query = "UPDATE tb_interstudent SET 
                password = '$password',
                first_name = '$first_name',
                last_name = '$last_name',
                dob = '$dob',
                gender = '$gender',
                nationality = '$nationality',
                passport = '$passport',
                email = '$email',
                phone = '$phone',
                current_location = '$current_location',
                education_level = '$education_level',
                gpa = '$gpa',
                previous_school = '$previous_school',
                program1 = '$program1',
                program2 = '$program2',
                scholarship = '$scholarship',
                english_proficiency = '$english_proficiency',
                sop = '$sop',
                referral = '$referral'
              WHERE username = '$username'";

    if(mysqli_query($kon, $query)){
        echo "<script>alert('Data berhasil diubah');window.location='10_daftar_calon_mahasiswa_internasional.php?halaman=$halaman'</script>";
    } else {
        echo "<script>alert('Gagal mengubah data: " . mysqli_error($kon) . "');window.history.back();</script>";
    }
} else {
    header("Location: 10_daftar_calon_mahasiswa_internasional.php");
}
?>

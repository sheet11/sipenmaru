<?php
include "../config/koneksi.php";

if(isset($_GET['username'])){
    $username = $_GET['username'];
    $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : '';
    
    if(mysqli_query($kon,"delete from tb_interstudent where username ='$username'")){
        if($halaman == '' || $halaman == '0'){
            echo "<script>alert('Data berhasil di hapus');window.location='10_daftar_calon_mahasiswa_internasional.php'</script>";
        } else {
            echo "<script>alert('Data berhasil di hapus');window.location='10_daftar_calon_mahasiswa_internasional.php?halaman=$halaman'</script>";
        }
    } else {
        echo "<script>alert('Data gagal di hapus');window.location='10_daftar_calon_mahasiswa_internasional.php?halaman=$halaman'</script>";
    }
} else {
    header("Location: 10_daftar_calon_mahasiswa_internasional.php");
}
?>

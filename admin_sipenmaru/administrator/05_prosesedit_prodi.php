<?php 
    error_reporting(0); 
    include "session.php"; 
    require_once("../config/koneksi.php");

    // Escape user inputs to prevent SQL injection
    $id_prodi = mysqli_real_escape_string($kon, $_POST['id_prodi']);
    $nama_prodi = mysqli_real_escape_string($kon, $_POST['nama_prodi']);
    $aktif = mysqli_real_escape_string($kon, $_POST['aktif']);

    // Correct the SQL query syntax
    $query = mysqli_query($kon, "UPDATE tb_prodi 
                                 SET nama_prodi = '$nama_prodi', 
                                     aktif = '$aktif' 
                                 WHERE id_prodi = '$id_prodi'");

    // Check if the query was successful
    if ($query) { 
        echo "<script>alert('Data Berhasil di Update');window.location='05_daftar_prodi.php'</script>";
    } else {
        echo "<script>alert('Data Gagal di Update: " . mysqli_error($kon) . "');window.location='05_daftar_prodi.php'</script>";
    }
?>
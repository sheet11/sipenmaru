<?php

/**
 * @author aggha
 * @copyright 2013
 */
 include "koneksi.php";
$id = $_POST['id'];
$jawab = $_POST['jawaban'];
$cek = mysqli_query($kon,"select * from hasil where jawab='$jawab';");
if (mysqli_num_rows($cek)>0) {
    $query = mysqli_query($kon,"update hasil set nilai=nilai+1 where jawab='$jawab';");
}
else {
    $query = mysqli_query($kon,"insert into hasil values('$id','$jawab',1);");
}

if ($query) {
    echo "<script>alert('Terima kasih telah memberikan suara anda');
    window.location=('daftar_surat_masuk.php');</script>";
}
else {
    echo "<script>alert('Gagal memasukan data');
    window.location=('index.php');</script>";
}

?>
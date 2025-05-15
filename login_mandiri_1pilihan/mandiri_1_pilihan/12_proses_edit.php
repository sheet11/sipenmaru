<?php   
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
    $id_formulir = $_POST['id_formulir'];
    $link = $_POST['link'];

    $query = mysqli_query($kon, "UPDATE tb_formulir5 SET link='$link' WHERE id_formulir='$id_formulir'");

    if ($query) {
        echo "<script>alert('Link berhasil diperbarui!'); window.location.href='12_tpmb.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui link!'); window.location.href='12_edit.php';</script>";
    }
}
?>

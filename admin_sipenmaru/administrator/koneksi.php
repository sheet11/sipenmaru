<?php

/**
 * @author aggha
 * @copyright 2013
 */
$host = "localhost";
$user = "root";
$password = "root";
$db = "pertanyaan";

$koneksi = mysqli_connect($host,$user,$password);
if (!$koneksi) {
    echo "koneksi mysqli gagal.";
    echo mysqli_error();
}

$pilihdb = mysqli_select_db($db);
if (!$pilihdb) {
    echo "gagal memilih database";
    echo mysqli_error();
}
?>
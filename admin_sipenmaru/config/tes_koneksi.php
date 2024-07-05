<?php
$servername = "103.219.248.60";
$database 	= "db_sipenmaru_2021";
$username 	= "revinoviansa";
$password 	= "085273351990";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

?>
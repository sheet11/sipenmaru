<?php
session_start(); // memulai session
session_destroy(); // menghapus session
header("location:../indexkelulusantahap2.php"); // mengambalikan ke form_login.php
?>
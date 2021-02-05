<?php
//session_start();
// Pengaturan Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pmb";

// Connect Ke Mysql
$connect = mysqli_connect($server,$user,$password) or die ("Koneksi Mysql Gagal");
mysqli_select_db($connect,$database) or die ("Pilih Database Gagal");
?>

<?php
// Koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['pass'];

//Menginput data ke database
mysqli_query($koneksi,"insert into admin values(NULL,'$username','$pass')");

//Mengembalikan ke halaman awal
header("location:./index.php");

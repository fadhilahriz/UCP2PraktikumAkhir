<?php
include './config.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$username = stripcslashes($username);  
$pass = stripcslashes($pass);  
$username = mysqli_real_escape_string($koneksi, $username);  
$pass = mysqli_real_escape_string($koneksi, $pass);  

$result = mysqli_query($koneksi,"select * from admin where username = '$username' and pass = '$pass'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  
    header("location:home.php");
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     

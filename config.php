<?php
$koneksi = mysqli_connect("localhost", "ucp2pkw_fadhilahrizky", "fadhil@004", "ucp2pkw_DeBookStore");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}
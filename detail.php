<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>DeBookStore</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-brand">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="https://image.flaticon.com/icons/png/512/4483/4483022.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        DeBookStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active navbar-brand" aria-current="page" href="#">
            <img src="https://image.flaticon.com/icons/png/512/3208/3208668.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Home</a>
            <a class="navbar-brand" href="index.php">
            <img src="https://image.flaticon.com/icons/png/512/1828/1828490.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Logout
            </a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $tokobuku = mysqli_query($koneksi, "select * from tokobuku where id='$id'");
    while ($data = mysqli_fetch_assoc($tokobuku)) {
    ?>
        <div class="container mt-5">
            <p><a href="home.php">Home</a> / Detail Buku / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama Buku : <?php echo $data['nama'] ?></p>
                    <p>Kategori Buku : <?php echo $data['kategori'] ?></p>
                    <p>Penerbit : <?php echo $data['penerbit'] ?></p>
                    <p>Harga : <?php echo $data['harga'] ?></p>
                    <p>Diskon : <?php echo $data['diskon'] ?></p>
                    <a href="print.php?id=<?php echo $data['id'] ?>" class="btn btn-brand">Cetak</a>
                </div>
            </div>
        </div>
    <?php
    }    
    ?>
    <footer>
        <div class="footer container-fluid">
           <p class="position-absolute top-100 start-50 translate-middle text-center text-grey mt-5">© “20190140004 – Fadhilah Rizky Setiawan”. All Right Reserved</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>           
  </body>
</html>
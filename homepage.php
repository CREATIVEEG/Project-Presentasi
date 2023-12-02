<?php

session_start();

if(!isset($_SESSION["login"])){
  header("Location: index.php");
  exit;

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KJ Frozen</title>

    <link rel="stylesheet" href="css/stylehome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <body class="utama">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="assets/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <strong>Kj Frozen</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari barang disini!" aria-label="Search">
            <button class="btn btn-outline-success btn-light" type="submit">Search</button>
          </form>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
            <li><a class="dropdown-item" href="setting.php">Pengaturan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->
    
    <!-- Carousel -->
    <div>
      <p p-5>
      </p>
    </div>
    <div id="carousel" class="container img-fluid pt-5">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/carousel1.jpeg" class="d-block w-100" alt="cr1">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/carousel2.jpeg" class="d-block w-100" alt="cr2">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/carousel3.jpeg" class="d-block w-100" alt="cr3">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/carousel4.jpg" class="d-block w-100" alt="cr4">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel end -->

    <!-- Kategori -->

    <div class="container mt-4">
      <div class="row text-center row-container">
        <div class="judul-kategori mt-4">
          <h5 class="text-center">KATEGORI</h5>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="katnugget.php"><img src="assets/kategori/nugget.png" class="img-categori mt-3" alt="nugget"></a>
            <p>nugget</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/sosis.png" class="img-categori mt-3" alt="sosis"></a>
            <p>sosis</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/bakso.png" class="img-categori mt-3" alt="bakso"></a>
            <p>bakso</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/daging.png" class="img-categori mt-3" alt="daging"></a>
            <p>daging</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/ikan.png" class="img-categori mt-3" alt="ikan"></a>
            <p>ikan</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/sembako.png" class="img-categori mt-3" alt="sembako"></a>
            <p>sembako</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/korean.png" class="img-categori mt-3" alt="korean"></a>
            <p>korean food</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/saus.png" class="img-categori mt-3" alt="saus"></a>
            <p>saus</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/bumbu.png" class="img-categori mt-3" alt="bumbu"></a>
            <p>bumbu dapur</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/fast.png" class="img-categori mt-3" alt="fast"></a>
            <p>fast food</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/sayur.png" class="img-categori mt-3" alt="sayuran"></a>
            <p>sayuran</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="assets/kategori/jajanan.png" class="img-categori mt-3" alt="jajanan"></a>
            <p>jajanan</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Kategori end -->

    <!-- Produk -->
    <div class="container mt-4 pb-3">
      <div class="row">
        <h5 class="text-center">Produk Rekomendasi</h5>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Kanzler Chicken Nugget 450g</p>
              <h5 class="card-title text-start">Rp40.000</h5>
              <a href="singleproduk.php" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">El Primo Beef Cheese Sosis 500g</p>
              <h5 class="card-title text-start">Rp64.500</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">CEDEA Bakso Ikan 500g</p>
              <h5 class="card-title text-start">Rp27.100</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Kimchi - Hana Mat Premium</p>
              <h5 class="card-title text-start">Rp24.900</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Bango Kecap Manis 520Ml</p>
              <h5 class="card-title text-start">Rp19.500</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Sembako Hemat Paket Smart</p>
              <h5 class="card-title text-start">Rp99.000</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Daging Sapi Lapis 250gr</p>
              <h5 class="card-title text-start">Rp29.900</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">fillet ikan beku / kakap fillet</p>
              <h5 class="card-title text-start">Rp39.000</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start"> Atlantic Salmon Frozen 200g</p>
              <h5 class="card-title text-start">Rp61.800</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Twist Jagung Balado(250g)</p>
              <h5 class="card-title text-start">Rp17.000</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Royco Saus Tiram Twinpack</p>
              <h5 class="card-title text-start">Rp35.100</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="assets/produk/produk12.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-start">Sunco Minyak Goreng 2L</p>
              <h5 class="card-title text-start">Rp34.100</h5>
              <a href="#" class="btn btn-primary d-grid">Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Produk end -->

    <!-- Footer -->
    <footer class="bg-light pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <span id="copyright">&copy;Copyright 2023 Kj Frozen Foods</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->
  </body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
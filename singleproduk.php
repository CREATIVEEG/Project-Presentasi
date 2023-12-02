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

    <link rel="stylesheet" href="css/singleproduk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <body class="utama">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepage.php">
        <img src="assets/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <strong>Kj Frozen</strong>
        </a>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->
    <div class="pb-4">

    </div>
    <!-- Produk Page -->
    <!-- Breadcrumb -->
 <div class="container pt-4">
   <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="homepage.php" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
  </ol>
</nav>
 </div>
 <!-- Breadcrumb -->
 
 <!-- single product -->
 <div class="container">
   <div class="row row-product">
     <div class="col-lg-5">
       <figure class="figure">
        <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
        <figcaption class="figure-caption d-flex justify-content-evenly">
          <a href="#">
            <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
        </figcaption>
      </figure>
     </div>

     <div class="col-lg-7">
       <h4>Kanzler Chicken Nugget 450g</h4>
       <div class="garis-product"></div>
       <h3 class="text-muted mb-2">Rp.40.000</h3>

       <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
       <span class="mx-2">1</span>
       <button class="button btn-warning btn-sm"><i class="fas fa-plus text-white"></i></button>
       <span class="mx-2">Tersisa 28</span>

       <div class="btn-produk mt-4">
         <a href="#" class="btn btn-dark btn-lg" style="font-size: 14px"><i class="fas fa-shopping-cart fs-6 me-2"></i>Masukkan Keranjang</a>
         <a href="#" class="btn btn-warning btn-lg" style="font-size: 14px">Beli Sekarang</a>
       </div>
     </div>
   </div>

   <!-- review-->
   <div class="row row-product">
           <divv class="col-12">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi Produk</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review Produk</button>
        </li>
      </ul>
      <div class="tab-content p-3" id="myTabContent">
        <div class="tab-pane fade show active deskripsi" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
          <p>
            Kanzler Chicken Nugget 450g </br>

            Spesifikasi:</br>
            Berat bersih : 450g</br>
            Rasa : Daging Ayam</br>
            Note: -</br>
          </p>
        </div>
        <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="row">
            <div class="col-1">
              <img src="assets/profil/profil01.jpg" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Ferdy Sambo</h5>
              <p class="review-des">Produk Original, Packing rapi, dan enak.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="assets/profil/profil02.jpg" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Ihsan Susanto</h5>
              <p class="review-des">Isi banyak, berat pas, ramah dikantong.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="assets/profil/profil03.jpg" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Abdul Bedul</h5>
              <p class="review-des">Rasa enak, tekstur yang crispy.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="assets/profil/profil04.jpg" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Danang  Academy</h5>
              <p class="review-des">Kualitas yang premium namun ramah dikantong.</p>
            </div>
          </div>
        </div>
      </div>
     </divv>
   </div>
   <!-- review-->

    </div>
    <!-- Produk end -->

    <!-- Footer -->
    <footer class="bg-light pb-3 pt-3 fixed">
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
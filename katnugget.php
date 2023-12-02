<?php

session_start();

if (!isset($_SESSION["login"])) {
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

  <link rel="stylesheet" href="css/katnugget.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
  <div class="container mt-100 pt-5 pb-5">
    <h1 class="h3 mb-3">Kategori / Nugget</h1>




    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
            <div class="inner">
              <div class="main-img"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/22/681e717b-06fe-4587-b68d-b8ce407322ba.jpg"
                  alt="Category"></div>
              <div class="thumblist"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2022/11/4/2cfa5cf7-038e-4c36-8c0e-fd9abc001183.jpg"
                  alt="Category"><img src="https://img.ws.mms.shopee.co.id/9df8bba66f5231d84a233f25e6f9ee0f"
                  alt="Category"></div>
            </div>
          </a>
          <div class="card-body text-center">
            <h4 class="card-title">Kanzler Chicken Nugget</h4>
            <p class="text-muted">Rp.40.000</p><a class="btn btn-outline-primary btn-sm" href="singleproduk.php"
              data-abc="true">Lihat Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
            <div class="inner">
              <div class="main-img"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/19/0dfac6a5-779d-43c0-ad83-734fbc678753.jpg"
                  alt="Category"></div>
              <div class="thumblist"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/19/9dfe8fa5-4389-41b8-9ba3-98ea1269e581.jpg"
                  alt="Category"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/19/7815ddf3-0f3d-43b5-9ea5-4b6e733f7224.jpg"
                  alt="Category"></div>
            </div>
          </a>
          <div class="card-body text-center">
            <h4 class="card-title">CHAMP Crunchy Nugget</h4>
            <p class="text-muted">Rp.19.000</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">Lihat
              Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
            <div class="inner">
              <div class="main-img"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/2/2/47c2486c-4578-4eb9-91a5-9353e375d7f9.jpg"
                  alt="Category"></div>
              <div class="thumblist"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/11/22/2f7086c7-7502-4515-b9d4-87fa7e3872a3.jpg"
                  alt="Category"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/11/22/d86bb275-bb79-4970-b69b-803c0fedb6c5.jpg"
                  alt="Category"></div>
            </div>
          </a>
          <div class="card-body text-center">
            <h4 class="card-title">CHICKEN NUGGET SO NICE </h4>
            <p class="text-muted">Rp.11.400</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">Lihat
              Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
            <div class="inner">
              <div class="main-img"><img
                  src="https://images.tokopedia.net/img/cache/900/product-1/2020/6/15/24591211/24591211_c968e090-665a-4e49-91bb-3e1ed29d76f4_640_640"
                  alt="Category"></div>
              <div class="thumblist"><img
                  src="https://images.tokopedia.net/img/cache/900/product-1/2020/6/15/24591211/24591211_c968e090-665a-4e49-91bb-3e1ed29d76f4_640_640"
                  alt="Category"><img
                  src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/19/7815ddf3-0f3d-43b5-9ea5-4b6e733f7224.jpg"
                  alt="Category"></div>
            </div>
          </a>
          <div class="card-body text-center">
            <h4 class="card-title">CHICKEN NUGGET FIESTA</h4>
            <p class="text-muted">Rp.26.000</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">Lihat
              Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Produk end -->

  <!-- Footer -->
  <footer class="bg-light pb-3 pt-3 fixed-bottom">
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>
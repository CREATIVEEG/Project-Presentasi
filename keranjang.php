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

    <link rel="stylesheet" href="css/keranjang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->
    <div class="pb-5">

    </div>
    <!-- Keranjang Page -->
    <div class="container pb-5 mb-2">
    <!-- Alert-->
    <div class="alert alert-info alert-dismissible fade show text-center mb-30"><span class="alert-close" data-dismiss="alert"></span><i class="fe-icon-award"></i>&nbsp;&nbsp;Dengan pembelian ini kamu mendapatkan <strong>1.633</strong> Reward Points.</div>
    <!-- Cart Item-->
    <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="assets/produk/produk1.jpg" alt="Product"></div>
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">Kanzler Chicken Nugget</h4><span><strong>Berat:</strong> 450g</span><span><strong>Exp:</strong> 09-07-2024</span>
                </div>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium">Rp.40.000</span>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">—</span>
        </div>
    </div>
    <!-- Cart Item-->
    <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="assets/produk/produk2.jpg" alt="Product"></div>
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">El Primo Sosis</h4><span><strong>Berat:</strong> 500g</span><span><strong>Exp:</strong> 10-11-2024</span>
                </div>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium">Rp.64.500</span>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">—</span>
        </div>
    </div>
    <!-- Cart Item-->
    <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="assets/produk/produk9.jpg" alt="Product"></div>
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">Atlantic Salmon Frozen</h4><span><strong>Berat:</strong> 200g</span><span><strong>Exp:</strong> 01-06-2024</span>
                </div>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium">Rp.61.800</span>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">—</span>
        </div>
    </div>
    <!-- Coupon + Subtotal-->
    <div class="d-sm-flex justify-content-between align-items-center text-center text-sm-left">
        <form class="form-inline py-2">
            <label class="sr-only">Kode Voucher</label>
            <input class="form-control form-control-sm my-2 mr-3" type="text" placeholder="Coupon code" required="">
            <button class="btn btn-style-1 btn-secondary btn-sm my-2 mx-auto mx-sm-0" type="submit">Apply Voucher</button>
        </form>
        <div class="py-2"><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Total:</span><span class="d-inline-block align-middle text-xl font-weight-medium">Rp.166.300</span></div>
    </div>
    <!-- Buttons-->
    <hr class="my-2">
    <div class="row pt-3 pb-5 mb-2">
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-secondary btn-block" href="#"><i class="fe-icon-refresh-ccw"></i>&nbsp;Update Keranjang</a></div>
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-primary btn-block" href="checkout.php"><i class="fe-icon-credit-card"></i>&nbsp;Checkout Semua</a></div>
    </div>

       
    </div>
    <!-- Keranjang end -->

    <!-- Footer -->
    <footer class="bg-light pb-3 pt-3 fixed">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <span id="copyright">&copy;2023, Kj Frozen Foods</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer end -->
  </body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
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

    <link rel="stylesheet" href="css/checkout.css">
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
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="pb-3">

    </div>
    <!-- Setting Page -->
    <div class="container pt-5 pb-3">
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="checkout__block">

                            <h3 class="headline">
                                <span>Keranjang</span>
                            </h3>

                            <div class="checkout-cart__item">

                                <div class="checkout-cart-item__img">
                                    <img src="assets/produk/produk1.jpg" style="width: 80px;"
                                        class="img-responsive" alt="...">
                                </div>

                                <div class="checkout-cart-item__content">

                                    <h5 class="checkout-cart-item__heading">
                                        Kanzler Chicken Nugget 
                                    </h5>

                                    <div class="checkout-cart-item__footer">

                                        <div class="input_qty input_qty_sm pull-right">
                                            <input type="text" id="checkout-cart-item_1">
                                            <label for="checkout-cart-item_1">
                                                <span class="minus">-</span>
                                                <span class="output">1</span>
                                                <span class="plus">+</span>
                                            </label>
                                        </div>

                                        <div class="checkout-cart-item__price pull-left">Rp.40.000</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </div> <!-- / .checkout-cart__item -->

                            <div class="checkout-cart__item">

                                <div class="checkout-cart-item__img">
                                    <img src="assets/produk/produk2.jpg" style="width: 80px;"
                                        class="img-responsive" alt="...">
                                </div>

                                <div class="checkout-cart-item__content">

                                    <h5 class="checkout-cart-item__heading">
                                        El Primo Sosis
                                    </h5>

                                    <div class="checkout-cart-item__footer">

                                        <div class="input_qty input_qty_sm pull-right">
                                            <input type="text" id="checkout-cart-item_2">
                                            <label for="checkout-cart-item_2">
                                                <span class="minus">-</span>
                                                <span class="output">1</span>
                                                <span class="plus">+</span>
                                            </label>
                                        </div>

                                        <div class="checkout-cart-item__price pull-left">Rp.64.500</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </div> <!-- / .checkout-cart__item -->

                            <div class="checkout-cart__item">

                                <div class="checkout-cart-item__img">
                                    <img src="assets/produk/produk9.jpg" style="width: 80px;"
                                        class="img-responsive" alt="...">
                                </div>

                                <div class="checkout-cart-item__content">

                                    <h5 class="checkout-cart-item__heading">
                                        Atlantic Salmon Frozen
                                    </h5>

                                    <div class="checkout-cart-item__footer">

                                        <div class="input_qty input_qty_sm pull-right">
                                            <input type="text" id="checkout-cart-item_3">
                                            <label for="checkout-cart-item_3">
                                                <span class="minus">-</span>
                                                <span class="output">1</span>
                                                <span class="plus">+</span>
                                            </label>
                                        </div>

                                        <div class="checkout-cart-item__price pull-left">Rp.61.800</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </div> <!-- / .checkout-cart__item -->

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkout__block">

                            <h3 class="headline">
                                <span>Pengiriman</span>
                            </h3>

                            <div class="form-group">
                                <select name="checkout-shipping__country" id="checkout-shipping__country"
                                    class="form-control">
                                    <option value="jne" selected="">JNE</option>
                                    <option value="jnt">J&T</option>
                                    <option value="wahana">Wahana</option>
                                    <option value="kjir">Kjir</option>
                                </select>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__delivery" id="checkout-delivery__standart"
                                    checked="">
                                <label for="checkout-delivery__standart">Standart 2-3 hari Rp.10.000</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__delivery" id="checkout-delivery__express">
                                <label for="checkout-delivery__express">Express 1-2 hari Rp.20.000</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__delivery" id="checkout-delivery__sameday">
                                <label for="checkout-delivery__sameday">Sameday 3-5 jam Rp.50.000</label>
                            </div>

                        </div>
                        <div class="checkout__block">

                            <h3 class="headline">
                                <span>Pembayaran</span>
                            </h3>

                            <div class="radio">
                                <input type="radio" name="checkout__payment" id="checkout-payment__credit-card"
                                    checked="">
                                <label for="checkout-payment__credit-card">Credit card</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__payment" id="checkout-payment__debit">
                                <label for="checkout-payment__debit">Debit</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__payment" id="checkout-payment__paypal">
                                <label for="checkout-payment__paypal">Paypal</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="checkout__payment" id="checkout-payment__cod">
                                <label for="checkout-payment__cod">Cash On Delivery</label>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkout__block">

                            <h3 class="headline">
                                <span>Account</span>
                            </h3>

                            <div class="form-group">
                                <input type="text" id="checkout-account__first-name" placeholder="First name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkout-account__last-name" placeholder="Last name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="tel" id="checkout-account__phone" placeholder="Phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkout-account__city" placeholder="City" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkout-account__street-address" placeholder="Street Address"
                                    class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="checkout-account__zip" placeholder="ZIP Code"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="checkout-account__state" placeholder="State"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- / .row -->
                <div class="checkout-total__block">
                    <div class="row">
                        <div class="col-sm-4">

                            <h4 class="checkout-total__heading">Product Total:</h4>
                            <div class="checkout-total__price">Rp.166.300</div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="col-sm-4">

                            <h4 class="checkout-total__heading">Biaya Pengiriman:</h4>
                            <div class="checkout-total__price">Rp.10.000</div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="col-sm-4">

                            <h4 class="checkout-total__heading">Total:</h4>
                            <div class="checkout-total__price">Rp.176.300</div>
                            <div class="clearfix"></div>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .checkout-total__block -->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="#" class="btn btn-secondary checkout__submit">Checkout</a>
                    </div>
                </div>
            </div> <!-- / .container -->
        </form>
    </div>
    <!-- Setting end -->

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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

</html>
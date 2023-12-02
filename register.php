<?php

require 'functions.php';

if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo "<script>alert('user baru berhasil ditambahkan!'); window.location.href='index.php';</script>";
}else{
    mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KJ Frozen</title>

    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <body class="utama">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <strong>Kj Frozen</strong>
        </a>
        <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Kembali</a>
            </li>
          </ul>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Register -->
    <div>
        <p p-5>
        </p>
      </div>
    <section class="container" id="registpage">
        <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
        <!----------------------- Login Container -------------------------->
           <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2047bd;">
               <div class="featured-image mb-3">
                <img src="assets/login1.svg" class="img-fluid" style="width: 250px;">
               </div>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Bergabung, untuk mendapatkan kemudahan berbelanja.</small>
           </div> 
        <!-------------------- ------ Right Box ---------------------------->
            
           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                         <h2>Daftar Akun</h2>
                         <p>Selamat datang, Silahkan lengkapi data dibawah.</p>
                    </div>
                    <form action="" method="post">
                      <div class="input-group mb-3">
                          <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                      </div>
                      <div class="input-group mb-3">
                          <input type="text" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                      </div>
                      <div class="input-group mb-1 pb-3">
                          <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                      </div>
                      <div class="input-group mb-3">
                          <button type="submit" name="register" class="btn btn-lg btn-primary w-100 fs-6">Daftar</button>
                      </div>
                    </form>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-lg btn-light w-100 fs-6"" data-bs-toggle="modal" data-bs-target="#ModalForm">
                          <small>Sudah ada akun? Login disini</small>
                        </button>
                        <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="myform bg-dark">
                                        <h1 class="text-center">Masuk</h1>
                                        <form action="login.php" method="post">
                                            <div class="mb-3 mt-4">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="username" name="username" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <button type="submit" name="login" class="btn btn-light mt-3">LOGIN</button>
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
              </div>
           </div> 
          </div>
        </div>
    </section>
    <!-- Register end -->

    <!-- Footer -->
    <footer class="bg-dark pb-3 pt-3">
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
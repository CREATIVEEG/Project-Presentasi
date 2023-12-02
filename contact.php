<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KJ Frozen</title>

  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
  <div class="pb-5">

  </div>
  <!-- Contact -->
  <div class="container bootstrap snippets bootdeys pb-3">
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fa fa-th fa-3x text-colored"></i>
          <h4>Tetap Terhubung</h4>
          <abbr title="Phone"><i class="bi bi-telephone-fill"></i> :</abbr> (+62) 857-1045-4356<br>
          <i class="bi bi-envelope-at-fill"></i> <a href="mailto:email@email.com"
            class="text-muted">kjfrozenfoods@gmail.com</a>
        </div>
      </div><!-- end col -->

      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fa fa-map-marker fa-3x text-colored"></i>
          <h4>Lokasi Kami</h4>

          <address>
            Perumahan Mutiara Bekasi Jaya<br>
            Cibarusah, Bekasi 17340<br>
          </address>
        </div>
      </div><!-- end col -->

      <div class="col-sm-4">
        <div class="contact-detail-box">
          <i class="fa fa-book fa-3x text-colored"></i>
          <h4>24x7 Support</h4>

          <p>Siap Melayani selama 24 jam.</p>
        </div>
      </div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
      <div class="col-sm-6">
        <div class="contact-map">
          <iframe
            src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8633097648726!2d107.09341277423569!3d-6.411602262703257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6997d113cb0ae7%3A0xa5e5d4f2538f130e!2sKJ.Frozen%20Fish!5e0!3m2!1sid!2sid!4v1701160988470!5m2!1sid!2sid"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            style="width: 100%; height: 360px;"></iframe>
        </div>
      </div><!-- end col -->

      <!-- Contact form -->
      <div class="col-sm-6">
        <form role="form" name="ajax-form" id="ajax-form" action="https://formsubmit.io/send/coderthemes@gmail.com"
          method="post" class="form-main">

          <div class="form-group">
            <label for="name2">Nama</label>
            <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'"
              onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
            <div class="error" id="err-name" style="display: none;">masukkan nama anda</div>
          </div> <!-- /Form-name -->

          <div class="form-group">
            <label for="email2">Email</label>
            <input class="form-control" id="email2" name="email" type="text"
              onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';"
              value="E-mail">
            <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div>
          </div> <!-- /Form-email -->

          <div class="form-group">
            <label for="message2">Pesan</label>
            <textarea class="form-control" id="message2" name="message" rows="5"
              onblur="if(this.value == '') this.value='Message'"
              onfocus="if(this.value == 'Message') this.value=''">Message</textarea>

            <div class="error" id="err-message" style="display: none;">Masukkan pesan anda</div>
          </div> <!-- /col -->

          <div class="row">
            <div class="col-xs-12">
              <div id="ajaxsuccess" class="text-success">E-mail was successfully sent.</div>
              <div class="error" id="err-form" style="display: none;">There was a problem validating the form please
                check!</div>
              <div class="error" id="err-timedout">The connection to the server timed out!</div>
              <div class="error" id="err-state"></div>
              <button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Submit</button>
            </div> <!-- /col -->
          </div> <!-- /row -->

        </form> <!-- /form -->
      </div> <!-- end col -->

    </div> <!-- end row -->

  </div>
  <!-- Contact end -->

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
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>
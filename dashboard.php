<?php
session_start();
if (!empty($_SESSION['logged_in'])) {
  header('location:dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AD Publicize</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AD Publicize</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Sign_up.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="photos/Image-1.jpg" alt=" " class="d-block w-100" />
      </div>
      <div class="carousel-item">
        <img src="photos/Image-2.jpg" alt=" " class="d-block w-100" />
      </div>
      <div class="carousel-item">
        <img src="photos/Image-3.jpg" alt=" " class="d-block w-100" />
      </div>
      <div class="carousel-item">
        <img src="photos/Image-4.jpg" alt=" " class="d-block w-100" />
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <section class="about-section-padding">
    <div class="container mt-5">
      <div class="col-12 mt-4 justify-content-center d-flex">
        <h2>About our Services</h2>
      </div>
      <div class="row">
        <div class="col-md-1 col-0"></div>
        <div class="col-md-5 col-12">
          <div class="about-img">
            <img src="photos/Image-5.jpg" alt="" class="img-fluid mt-2" />
          </div>
        </div>
        <div class="col-md-1 col-0"></div>
        <div class="col-md-3 col-12 mt-5">
          <div class="about-text">
            <h4 class="justify-content-center d-flex">
              We provide Quality Services
            </h4>

            <p class="mt-5">
              Our team's main aim is to provide responsive and effective way
              to the users for booking a classified slot for various
              advertisments of their products,brands, various skim
              advertisment and provide those data to be printed in the weekly
              newspaper. We provide different classified slots for
              advertisement and based on the selected slot user has to pay the
              required amount. It will decrease the amount of tedious work
              needed to be done to grab a slot, the users can book the desired
              slot through online mode itself. The Sample Page for booking the
              desired slot is represented below.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 mt-4 justify-content-center d-flex">
          <h2>Sample newspaper</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            25 x 25
          </h3>
        </div>
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            Title of newspaper
          </h3>
        </div>
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            25 x 25
          </h3>
        </div>
      </div>

      <div class="row">
        <div class="col bg-light border" style="height: 500px">
          <h3 class="justify-content-center d-flex mt-5 pt-5">50 x 50</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            25 x 25
          </h3>
        </div>
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            25 x 25
          </h3>
        </div>
        <div class="col-4 bg-light border" style="height: 170px">
          <h3 class="justify-content-center d-flex pt-5 pb-5 mt-3">
            25 x 25
          </h3>
        </div>
      </div>

      <div class="row">
        <div class="col bg-light mb-5 border" style="height: 500px">
          <h3 class="justify-content-center d-flex mt-5 pt-5">50 x 50</h3>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

<!-- https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->

<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Company name</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            Here you can use rows and columns to organize your footer
            content. Lorem ipsum dolor sit amet, consectetur adipisicing
            elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            <a href="#!" class="text-white">MDBootstrap</a>
          </p>
          <p>
            <a href="#!" class="text-white">MDWordPress</a>
          </p>
          <p>
            <a href="#!" class="text-white">BrandFlow</a>
          </p>
          <p>
            <a href="#!" class="text-white">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
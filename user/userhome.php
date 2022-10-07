<?php
  include('session.php');
  if($_SESSION['login'] !== true) header("location:../dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AD Publicize-User Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
            <a class="nav-link" href="bookSlot.php">Book Slot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="History.php">User History</a>
          </li>
          <div class="btn-group">
            <li class="nav-item">
              <a href="#" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $fname . " " . $lname; ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
              </ul>
            </li>
          </div>
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

  <!-- Carousel sample papers -->
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
      </div>
      <div class="carousel-item">
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
                <h3 class="justify-content-center d-flex mt-5 pt-5">500 x 500</h3>
              </div>
            </div>
          </div>
        </section>
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

  


</body>

</html>



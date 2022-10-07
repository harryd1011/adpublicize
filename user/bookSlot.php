<?php
include('../config.php');
include('session.php');
if ($_SESSION['login'] !== true) header("location:../dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize-View Slots</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-success bg-gradient text-dark bg-opacity-25">
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ends -->



    <div class="row">
        <!-- Layout of page 1 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-1</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                        Bazar Group
                    </p>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col bg-light border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col bg-light border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Layout of page 2 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-2</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 3.15 x 3.65<br>
                                Rate: 500/-
                            </p>
                            <div class="d-flex justify-content-center mt-5 pt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-6 bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <div class="d-flex justify-content-center mt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <div class="d-flex justify-content-center mt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>

    <div class="row">
        <!-- Layout of page 3 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-3</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 3.15 x 3.65<br>
                                Rate: 500/-
                            </p>
                            <div class="d-flex justify-content-center mb-5 mt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-6 bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <div class="d-flex justify-content-center mt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 bg-light border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <div class="d-flex justify-content-center mb-5 mt-5">
                                <a type="button" class="btn btn-primary" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Layout of page 4 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-4</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col bg-light border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col bg-light border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <div class="d-flex justify-content-center mb-3">
                        <a type="button" class="btn btn-primary" href="#">Book Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>
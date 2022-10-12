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
    <title>AD Publicize- Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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

    <section>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-9 col-lg-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            Booking Details
                                        </h4>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary" name="submit_details">Submit</button>
                                    </div>
                                </div>
                                <hr>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Name: </p>
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" value="<?php echo $id;  ?>" name="regid">
                                        <input name="name" id="" value="<?php echo $fname . " " . $lname; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Email: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="email" id="" value="<?php echo $emailid; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Name of Organization: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="organization" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Contact Number: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="contact" id="" value="<?php echo $contactno; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Office Contact Number: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="office_contact" id="" value="<?php echo $officeCno; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Address: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="address" id="" value="<?php echo $resiadd; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Office Address: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="address" id="" value="<?php echo $officeadd; ?>" class="form-control">
                                    </div>
                                </div>

                                <!-- Fetching left -->

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Page No: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="page" id="" value="<?php echo $Page_No; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Size: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="page" id="" value="<?php echo $Size; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Position: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="page" id="" value="<?php echo $Position; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Prize: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="page" id="" value="<?php echo $Price; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Image: </p>
                                    </div>
                                    <div class="col-6">
                                        <input name="page" id="" value="" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php
include('session.php');
if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}

// $result = mysqli_query($conn,"SELECT * FROM communication WHERE regid='$id'");

// $check = mysqli_fetch_object($result);

?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize- User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- REGISTRATION DETAILS -->
    <section>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-9 col-lg-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4>
                                        Registration Details
                                    </h4>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a type="button" class="btn btn-primary" href="changePassword.php">Change password</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <p>First Name: </p>
                                </div>
                                <div class="col-6">
                                    <p><?php echo $fname; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Last Name: </p>
                                </div>
                                <div class="col-6">
                                    <p><?php echo $lname; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>E-mail Id: </p>
                                </div>
                                <div class="col-6">
                                    <p><?php echo $emailid; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Contact Number: </p>
                                </div>
                                <div class="col-6">
                                    <p><?php echo $contactno; ?></p>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- COMMUNICATION DETAILS -->
                    <div class="card mt-5" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4>Communication Details</h4>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <?php if (!$row2) : ?>
                                        <a type="button" class="btn btn-primary" href="communication.php">Add</a>
                                    <?php endif; ?>
                                    <?php if ($row2) : ?>
                                        <a type="button" class="btn btn-primary" href="editform.php">Edit</a>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <hr>

                            <?php if ($row2) : ?>
                                <div class="row">
                                    <div class="col-6">
                                        Residential Address:
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $resiadd; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Office Address:
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $officeadd; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Office Contact No. :
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $officeCno; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Area:
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $area; ?></p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        City:
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $city; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Pin-code:
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo $pincode; ?></p>

                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



</body>

</html>
<?php
include('session.php');

// $result = mysqli_query($conn,"SELECT * FROM communication WHERE regid='$id'");



if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}

include('../config.php');
$resiadd = $officeadd = $officeCno = $area = $city = $pincode = "";
if (isset($_POST["resp_submit"])) {
    $regid = $_POST["regid"];
    $resiadd = $_POST["resi_add"];
    $officeadd = $_POST["off_add"];
    $officeCno = $_POST["off_contact"];
    $area = $_POST["area"];
    $city = $_POST["city"];
    $pincode = $_POST["pin"];

    $insert = mysqli_query($conn, "INSERT INTO communication_1(regid,resiadd,officeadd,officeCno,area,city,pincode) VALUES('$regid','$resiadd','$officeadd','$officeCno','$area','$city','$pincode')");

    if ($insert) {
        echo "<script>alert('Register Successfully');
        window.location.href= 'profile.php';
        </script>";
        
    } else {
        echo "<script>alert('Error in Register Data, Try Again')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize- Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-image: url('photos/User_background.jpg'); background-size:cover;">
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

    <section>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <h4>
                                Communication Details Form
                            </h4>
                            <hr>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <h5>Residential Address:</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="hidden" value="<?php echo $id;  ?>" name="regid">
                                        <input name="resi_add" id="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Office Address:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input name="off_add" id="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Office Contact No.:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="off_contact" class="form-control" pattern="^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Area:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="area" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>City:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="city" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Pincode :</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="pin" class="form-control" pattern="^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$" required>
                                    </div>
                                </div>

                                <div class="row ">

                                    <div class="col-3 mt-5 mb-3">
                                        <button type="submit" class="btn btn-dark btn-block w-75" name="resp_submit">Save</button>

                                    </div>
                                    <div class="col-3 mt-5 mb-3">
                                        <button type="reset" class="btn btn-secondary w-75">Clear</button>
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
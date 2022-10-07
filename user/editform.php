<?php
include('../config.php');
include('session.php');

$update = "";

if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}

if(isset($_POST["update"])){
    $resiadd = $_POST['resi_add'];
    $officeadd =  $_POST['off_add'];
    $officeCno = $_POST['off_contact']; 
    $area = $_POST['area'];
    $city = $_POST['city'];
    $pincode = $_POST['pin'];

    $update = "UPDATE communication SET resiadd='$resiadd', officeadd='$officeadd', officeCno='$officeCno', area='$area', city='$city', pincode='$pincode' where regid='$id'";

    if(mysqli_query($conn,$update)){
        echo "<script>alert('Updated Successfully');
            window.location.href='profile.php';
            </script>";
            
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize- Edit</title>
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

    <section>
        <div class="container mt-3">
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
                                        <input name="resi_add" id="" value="<?php echo $resiadd; ?>" class="form-control">

                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Office Address:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input name="off_add" id="" value="<?php echo $officeadd; ?>" class="form-control">
                    
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Office Contact No.:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <input name="off_contact" id="" value="<?php echo $officeCno; ?>" class="form-control" pattern="^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Area:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <input name="area" id="" value="<?php echo $area; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>City:</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <input name="city" id="" value="<?php echo $city; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-3 col-12">
                                        <h5>Pincode :</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <input name="pin" id="" value="<?php echo $pincode; ?>" class="form-control" pattern="^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$">
                                    </div>
                                </div>

                                <div class="row ">

                                    <div class="col-3 mt-5 mb-3">
                                        <button type="submit" class="btn btn-dark btn-block w-75" name="update">Update</button>

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
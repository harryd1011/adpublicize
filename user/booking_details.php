<?php
include('session.php');
if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}



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

<body style="background-image: url('photos/BookSlot.jpg'); background-size:cover;">
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
                <div class="col col-md-9 col-lg-10">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form action="razorpay-api/pay.php" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            Booking Details
                                        </h4>
                                    </div>

                                </div>
                                <hr>

                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Name: </p>
                                        <input type="hidden" value="<?php echo $id;  ?>" name="regid">
                                        <input name="name" id="" value="<?php echo $fname . " " . $lname; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Email: </p>
                                        <input name="email" id="" value="<?php echo $emailid; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Name of Organization: </p>
                                        <input name="organization" id="" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Contact Number: </p>
                                        <input name="contact" id="" value="<?php echo $contactno; ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Office Contact Number: </p>
                                        <input name="office_contact" id="" value="<?php echo $officeCno; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Address: </p>
                                        <input type="hidden" value="<?php echo $pincode; ?>" name= "pincode">
                                        <input name="address" id="" value="<?php echo $resiadd; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Office Address: </p>
                                        <input type="hidden" value="<?php echo $area?>" name="area">
                                        <input type="hidden" value="<?php echo $city?>" name="city">
                                        <input name="office_address" id="" value="<?php echo $officeadd; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Page No: </p>
                                        <input type="hidden" value="<?php echo $page_id;  ?>" name="page_id">
                                        <input name="Page_No" id="" value="<?php echo $Page_No; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Size: </p>
                                        <input name="Size" id="" value="<?php echo $Size; ?> (in inch)" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Position: </p>
                                        <input name="Position" id="" value="<?php echo $Position; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-md-6">
                                        <p>Price: </p>
                                        <input name="Price" id="" value="Rs. <?php echo number_format($Price); ?> /-" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Date of Publish: </p>
                                        <input name="Publish_Date" id="" value="<?php echo $Publish_Date; ?>" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Fetching left -->

                                <div class="row mt-4">
                                    <div class="col-12 col-md-10">
                                        <p>Enter the Content of advertisement: </p>
                                        <input name="Ad_Content" id="" value="" class="form-control" required>
                                    </div>

                                </div>

                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        <b>You agree to the Terms & Condition that once the booking is done it won't be cancelled and the payment done will be non-refundable. For further inquiry you may contact the authorities.</b>
                                    </label>
                                </div>

                                <div class="form group mt-5">
                                    <input type="hidden" value="<?php echo $Price/2;  ?>" name="advance_Payment">
                                    <input type="hidden" value="<?php echo $Price;  ?>" name="Product_price">
                                    <input type="submit" class="btn btn-primary" name="payment" value="Click to pay: Rs. <?= $Price/2; ?>/-">
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
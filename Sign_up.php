<?php
include('config.php');

// $fname = $lname = $emailid = $password = $confirm_passwd = $contactno = "";
if (isset($_POST["btnsubmit"])) {
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    $fname = $_POST["FirstName"];
    $lname = $_POST["LastName"];
    $emailid = $_POST["Email"];
    $confirm_passwd = $_POST["confirm_password"];
    $contactno = $_POST["contact"];


    $result = mysqli_query($conn, "SELECT * FROM registration WHERE emailid='$emailid' or contactno='$contactno' ");

    $row = mysqli_num_rows($result);
    if ($row >= 1) {
        echo "<script>alert('Email Id or Phone number is Already Registered. Please login directly.');
        window.location.href='login.php';
        </script>";
    } else {

        $insert = mysqli_query($conn, "INSERT INTO registration(fname,lname,emailid,password,contactno) VALUES('$fname','$lname','$emailid','$encrypt_password','$contactno')");

        if ($insert) {
            echo "<script>alert('Registered Successfully');
            window.location.href='login.php';
            </script>";
        } else {
            echo "<script>alert('Error in Register Data, Try Again')</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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

    <!-- SIGN-UP FORM -->
    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-sm-12 px-0">
                    <img src="photos/Signup_image.jpg" class="img-fluid d-block w-100" alt="">
                </div>
                <div class="col-md-1 col-sm-0">

                </div>
                <div class="col-md-4 col-sm-12 mt-0 mt-md-5 pt-md-5">

                    <h1 class="font-weight-bold py-3">Sign Up</h1>
                    <h4>Already have an account? <a href="login.php">Login Here.</a></h4>
                    <form method="post" class="mt-5">
                        <div class="row">
                            <div class="col-6 my-3">
                                <input type="text" placeholder="First Name" class="form-control" name="FirstName" pattern="^[a-zA-Z]{1,20}$" title="Please Enter Only Alphabet. Max-length= 20" required>
                            </div>
                            <div class="col-6 my-3">
                                <input type="text" placeholder="Last Name" class="form-control" name="LastName" pattern="^[a-zA-Z]{1,20}$" title="Please Enter Only Alphabet. Max-length= 20" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-3">
                                <input type="email" placeholder="Enter your email" class="form-control" name="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 my-3">
                                <input id="password" type="password" placeholder="Enter password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password length should  be min 8 characters and must contain Uppercase,Lowercase,Number/SpecialChar" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Password length should  be min 8 characters and must contain Uppercase,Lowercase,Number/SpecialChar' : ''); 
                                if(this.checkValidity()) form.conf_password.pattern = this.value;" required>
                            </div>
                            <div class="col-6 my-3">
                                <input id="conf_password" type="password" placeholder="Confirm password" class="form-control" name="confirm_password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password length should  be min 8 characters and must contain Uppercase,Lowercase,Number/SpecialChar" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" required>
                            </div>
                            <?php

                            ?>
                        </div>
                        <div class="row">
                            <div class="col my-3">
                                <input type="text" placeholder="Enter your contact number" class="form-control" name="contact" pattern="^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$" title="The phone number should be 10 digits long and should start with 7,8 or 9" required>
                                <!-- For phone number validation -->
                                <!-- https://www.regextester.com/93470 -->
                            </div>
                        </div>

                        <div class="form-check mt-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                            <label class="form-check-label" for="flexCheckChecked">
                                By Signing up you agree to receive updates.
                            </label>
                        </div>

                        <div class="row ">

                            <div class="col-7 mt-5">
                                <button type="submit" class="btn btn-dark btn-block w-75" name="btnsubmit">Sign Up</button>

                            </div>
                            <div class="col-5 mt-5">
                                <button type="reset" class="btn btn-secondary w-75">Clear</button>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-1 col-sm-0">

                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>


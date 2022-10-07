<?php
include('config.php');

session_start();
// $Email = $password = "";

if (isset($_POST["login_btn"])) {

    $Email = $_POST["Email"];
    $password = md5($_POST["password"]);


    $result = mysqli_query($conn, "SELECT * FROM registration WHERE emailid='$Email'");

    $num = mysqli_num_rows($result);

    if ($num == 1) {

        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['loguser'] = $Email;
            echo "<script>alert('Logged in Successfully');
            window.location.href='user/userhome.php';
            </script>";
        } else {
            echo "<script>alert('Wrong password')</script>";
        }
    } else {
        echo "<script>alert('Incorrect creadentials, Try Again')</script>";
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
                        <a class="nav-link" href="login.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sign_up.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- LOGIN FORM -->

    <section class="Form my-4 mx-5 mt-md-4">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-sm-12 px-0">
                    <img src="photos/Image-6.jpg" class="d-block w-100" alt="">
                </div>
                <div class="col-md-1 col-sm-0">

                </div>
                <div class="col-md-4 col-sm-12 mt-0 mt-md-5 pt-md-5">
                    <h1 class="font-weight-bold py-3 mt-5">Login</h1>
                    <h4>Sign in to your account</h4>
                    <form class="mt-5" method="post">
                        <div class="row">
                            <div class="col my-4">
                                <input type="email" placeholder="Enter your email" class="form-control" name="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-4">
                                <input type="password" placeholder="Enter your password" class="form-control" name="password" title="Password length should  be min 8 characters and must contain Uppercase,Lowercase,Number/SpecialChar" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-4">
                                <button type="submit" class="btn btn-dark w-100 mt-3 mb-5" style="height: 50px;" name="login_btn">Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot password?</a>
                        <p>Don't have an account? <a href="Sign_up.php">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
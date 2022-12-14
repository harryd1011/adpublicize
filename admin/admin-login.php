<?php
include("../DB_config.php");

session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $encrypt_password= md5($password);

    $result = mysqli_query($conn, "SELECT * FROM admin_1 WHERE username= '$username'");

    $num = mysqli_num_rows($result);

    if ($num == 1) {

        $row = mysqli_fetch_assoc($result);
        if ($encrypt_password == $row['password']) {
            $_SESSION['admin_login'] = true;
            $_SESSION['logadmin'] = $username;

            echo "<script>alert('Logged in Successfully');
            window.location.href='admin-index.php';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD-Publicize</title>
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
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Admin Panel</a>
                    </li>
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
                                            AD Publicize Admin
                                        </h4>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-6">
                                        <p>Username </p>
                                    </div>
                                    <div class="col-6">
                                        <input id="" type="text" placeholder="Enter username" class="form-control" name="username" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Password </p>
                                    </div>
                                    <div class="col-6">
                                        <input id="" type="password" placeholder="Password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                    </div>
                                </div>

                                <div class="col mt-4">
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
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
<?php
include('admin-session.php');

if ($_SESSION['admin_login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='admin-login.php';
        </script>";
}
if (isset($_POST["update"])) {
    $current_password = $_POST['current_password'];
    $old_password = $_POST['old_password'];
    $encrypt_old_password = md5($old_password);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($current_password == $encrypt_old_password) {
        if ($password == $confirm_password) {
            $password = $_POST["password"];
            $encrypt_password = md5($password);

            $update = "UPDATE admin SET password='$encrypt_password' where username= '$admin'";

            if (mysqli_query($conn, $update)) {
                echo "<script>alert('Updated Successfully');
                window.location.href='admin-index.php';
                </script>";
            }
        } else {
            echo "<script>alert('Check the entered password again.')</script>";
        }
    } else {
        echo "<script>alert('old password entered in wrong. Check again.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- NAVBAR STARTS -->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AD Publicize</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end pe-4" id="collapsibleNavbar">
                <div class="btn-group">
                    <li class="nav-item">
                        <a href="#" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="admin-logout.php">Log out</a></li>
                            <li><a class="dropdown-item" href="change_admin_password.php">Change password</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR ENDS -->

    <!-- SIDEBAR STARTS -->
    <div class="row ">
        <section class="bg-dark col-md-2 col-4" style="height:100vh;">
            <div class=" navbar navbar-dark">
                <div class="container-fluid sticky-top">
                    <a class="navbar-brand">Admin Panel</a>
                </div>
            </div>
            <div id="accordian">
                <div class="card bg-dark">
                    <div class="card-header">
                        <a class="btn text-white" data-bs-toggle="collapse" href="#collapseOne">
                            Form
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse text-white border" data-bs-parent="#accordion">
                        <div class="container mt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="page_form.php">Page Allotment form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="page_update_form.php">Page Update form</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card bg-dark">
                    <div class="card-header">
                        <a class="btn text-white" data-bs-toggle="collapse" href="#collapseTwo">
                            Table
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse text-white border" data-bs-parent="#accordion">
                        <div class="container mt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="#">Request acceptance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Page Allotted to users</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- SIDEBAR ENDS -->

        <!-- CONTENT OF THE PAGE -->
        <div class="col-md-10 col-7" style="background-image: url('https://lh3.googleusercontent.com/p/AF1QipPFzk0ub4K9u449cA2uUsEZCgSp-WnVl2CrDkmQ=w1080-h608-p-no-v0'); background-size:cover;">
            <section>
                <div class="container mt-5 pt-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col col-md-9 col-lg-7">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col">
                                                <h4>
                                                    Change password
                                                </h4>
                                            </div>
                                            <div class="col d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary" name="update">Submit</button>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row mt-4">
                                            <div class="col-6">
                                                <p>Old Password: </p>
                                            </div>
                                            <div class="col-6">
                                                <input type="hidden" value="<?php echo $admin_password;  ?>" name="current_password">
                                                <input id="" type="password" placeholder="Enter old password" class="form-control" name="old_password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-6">
                                                <p>New Password: </p>
                                            </div>
                                            <div class="col-6">
                                                <input id="" type="password" placeholder="Enter new password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-6">
                                                <p>Confirm password: </p>
                                            </div>
                                            <div class="col-6">
                                                <input id="" type="password" placeholder="Confirm password" class="form-control" name="confirm_password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


</body>

</html>
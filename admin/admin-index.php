<?php
include('admin-session.php');

if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='admin-login.php';
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD- Publicize</title>
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
                <div class="btn-group">
                    <li class="nav-item">
                        <a href="#" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="admin-logout.php">Log out</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

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
                                    <a class="nav-link text-white" href="page_form.php">Page form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Link</a>
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
                                    <a class="nav-link text-white" href="#">Table 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="col-md-10 col-8">
            <h4>This is admin Index.</h4>

        </div>


    </div>



</body>

</html>
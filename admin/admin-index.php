<?php
include('admin-session.php');

if ($_SESSION['admin_login'] !== true) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin-index.css" />

</head>

<body>
    <!-- NAVBAR STARTS -->

    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
                            <li><a class="dropdown-item" href="change_admin_password.php">Update Details</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- NAVBAR ENDS -->

    <!-- SIDEBAR STARTS -->
    <!-- <div class="wrapper">
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
            </section> -->

    <!-- SIDEBAR ENDS -->

    <!-- <div class="col-md-10 col-8">
                <h4>This is admin Index.</h4>

            </div>


        </div>
    </div> -->

    <div class="d-flex" id="wrapper">
        <!-- Sidebar starts here -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-3 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>ad-publicize
            </div>

            <div class="list-group list-group-flush my-3" id="accordian">
                <a href="#" class="list-group-item list-group-item-action second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <!-- Form section -->
                <a class="list-group-item list-group-item-action second-text" data-bs-toggle="collapse" href="#collapseOne">
                    <i class="fas fa-paperclip me-2"></i>Form
                </a>
                <div id="collapseOne" class="collapse list-group-item list-group-item-action second-text border" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link second-text text-dark" href="page_form.php">Page Allotment form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="page_update_form.php">Page Update form</a>
                        </li>
                    </ul>
                </div>
                <!-- Form section ends -->

                <!-- Table section -->
                <a class="list-group-item list-group-item-action second-text" data-bs-toggle="collapse" href="#collapseTwo">
                    <i class="fas fa-chart-line me-2"></i>Table
                </a>
                <div id="collapseTwo" class="collapse list-group-item list-group-item-action second-text border" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link second-text text-dark" href="registered-users.php">Users Registered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="confirmed-bookings.php">Confirmed bookings</a>
                        </li>
                    </ul>
                </div>

                <!-- Table section ends -->
                <!-- Settings section starts -->
                <a class="list-group-item list-group-item-action second-text" data-bs-toggle="collapse" href="#collapseThree">
                    <i class="fas fa-cog me-2"></i>Settings
                </a>
                <div id="collapseThree" class="collapse list-group-item list-group-item-action second-text border" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link second-text text-dark" href="change_admin_password.php">Change credentials</a>
                        </li>
                    </ul>
                </div>
                <!-- Settings section ends -->
                <a class="list-group-item list-group-item-action second-text text-danger" href="admin-logout.php">
                    <i class="fas fa-hourglass-half me-2"></i>Logout
                </a>


            </div>
        </div>

        <!-- Sidebar ends here -->

        <div id="page-content-wrapper" style="background-image: url('photos/scott-rodgerson-lRtzEExP0H8-unsplash.jpg'); background-size:cover;">
            <nav class="navbar navbar-expand-lg py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-left fs-4 me-3 text-light" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-light">Dashboard</h2>
                </div>

            </nav>

            <div class="container-fluid">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $num_bookings; ?></h3>
                                <p class="fs-5">Total booking</p>
                            </div>
                            <i class="fas fa-check-to-slot fs-1 primary-text border rounded-full secondary-bg p-3">
                            </i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $slot_available; ?></h3>
                                <p class="fs-5">Available Slots</p>
                            </div>
                            <i class="fas fa-cart-shopping fs-1 primary-text border rounded-full secondary-bg p-3">
                            </i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $num_bookings; ?></h3>
                                <p class="fs-5">Payment received</p>
                            </div>
                            <i class="fas fa-money-check fs-1 primary-text border rounded-full secondary-bg p-3">
                            </i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $num_users; ?></h3>
                                <p class="fs-5">Customers</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3">
                            </i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3 text-light">Recent Bookings</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>

</body>

</html>
<?php
include('admin-session.php');

if ($_SESSION['admin_login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='admin-login.php';
        </script>";
}
if (isset($_POST["submit"])) {
    $Page_No = $_POST["Page_No"];
    $Position = $_POST["Position"];
    $Size = $_POST["Size"];
    $Price = $_POST["Price"];
    $Status = $_POST["Status"];
    $Publish_Date = $_POST["Publish_Date"];

    $slot_result = mysqli_query($conn, "SELECT * from slot_details_1 WHERE Page_No='$Page_No' and Position='$Position' and Publish_Date='$Publish_Date' ");

    $slot_row = mysqli_num_rows($slot_result);
    if ($slot_row >= 1) {
        echo "<script>alert('Slot details of this Position at the page number is already alloted. Please go to update form to update the details.')</script>";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO slot_details_1(Page_No,Position,Size,Price,Status,Publish_Date) VALUES('$Page_No','$Position','$Size','$Price','$Status','$Publish_Date')");

        if ($insert) {
            echo "<script>alert('Information updated successfully');
        window.location.href='page_form.php';
        </script>";
        } else {
            echo "<script>alert('Error in Registering Data, Try Again')</script>";
        }
    }
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
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-3 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>ad-publicize
            </div>

            <div class="list-group list-group-flush my-3" id="accordian">
                <a href="admin-index.php" class="list-group-item list-group-item-action second-text">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <!-- Form section -->
                <a class="list-group-item list-group-item-action second-text active" data-bs-toggle="collapse" href="#collapseOne">
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

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Slot Allotment Form</h2>
                </div>

            </nav>

            <div class="col-md-10 col-7" >
                <section>
                    <div class="container mt-5 pt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col col-md-9 col-lg-7">
                                <div class="card shadow-lg" style="border-radius: 15px;">
                                    <div class="card-body opacity-100">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>
                                                        Page allotment details
                                                    </h4>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Page No.: </p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect02" name="Page_No" required>
                                                            <option selected>Choose...</option>
                                                            <option value="Page-1_Side-1">Page-1_Side-1</option>
                                                            <option value="Page-1_Side-2">Page-1_Side-2</option>
                                                            <option value="Page-2_Side-1">Page-2_Side-1</option>
                                                            <option value="Page-2_Side-2">Page-2_Side-2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Position </p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect02" name="Position" required>
                                                            <option selected>Choose...</option>
                                                            <option value="Top-left_corner">Top-left_corner</option>
                                                            <option value="Top-right_corner">Top-right_corner</option>
                                                            <option value="Top-center">Top-center</option>
                                                            <option value="Banner-1">Banner-1</option>
                                                            <option value="center-right_corner">center-right_corner</option>
                                                            <option value="center-mid">center-mid </option>
                                                            <option value="center-left_corner">center-left_corner </option>
                                                            <option value="Banner-2">Banner-2</option>
                                                            <option value="Top_Banner">Top_Banner</option>
                                                            <option value="Bottom-left_A4">Bottom-left_A4</option>
                                                            <option value="Bottom-right_A4">Bottom-right_A4</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Size: </p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect02" name="Size" required>
                                                            <option selected>Choose...</option>
                                                            <option value="12.7 x 7.35">12.7 x 7.35</option>
                                                            <option value="6.3 x 7.35">6.3 x 7.35</option>
                                                            <option value="6.3 x 3.35">6.3 x 3.35</option>
                                                            <option value="3.15 x 3.65">3.15 x 3.65</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Prize: </p>
                                                </div>
                                                <div class="col-6">
                                                    <input id="" type="number" placeholder="Enter price" class="form-control" name="Price" required>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Status: </p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect02" name="Status" required>
                                                            <option selected>Available</option>
                                                            <option value="Unavailable">Unavailable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <p>Publish date: </p>
                                                </div>
                                                <div class="col-6">
                                                    <input id="" type="date" placeholder="Select a date" class="form-control" name="Publish_Date" required>
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
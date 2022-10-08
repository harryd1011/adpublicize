<?php
include('../config.php');
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
    $Prize = $_POST["Prize"];
    $Status = $_POST["Status"];
    $Publish_Date = $_POST["Publish_Date"];

    $insert = mysqli_query($conn, "INSERT INTO slot_details(Page_No,Position,Size,Prize,Status,Publish_Date) VALUES('$Page_No','$Position','$Size','$Prize','$Status','$Publish_Date')");

    if ($insert) {
        echo "<script>alert('Information updated successfully');
        window.location.href='page_form.php';
        </script>";
    } else {
        echo "<script>alert('Error in Registering Data, Try Again')</script>";
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
                        <a class="nav-link" href="#">Welcome,admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row ">
        <section class="bg-dark col-md-2 col-4" style="height:100vh;">
            <div class=" navbar navbar-dark">
                <div class="container-fluid sticky-top">
                    <a class="navbar-brand">Admin</a>
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

        <div class="col-md-10 col-7">
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
                                                        <option value="1">Page-1 Side-1</option>
                                                        <option value="2">Page-1 Side-2</option>
                                                        <option value="3">Page-2 Side-1</option>
                                                        <option value="4">Page-2 Side-2</option>
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
                                                        <option value="1">Top-left corner</option>
                                                        <option value="2">Top-right corner</option>
                                                        <option value="3">Banner-1</option>
                                                        <option value="4">center-right corner</option>
                                                        <option value="5">center-mid </option>
                                                        <option value="6">center-left corner </option>
                                                        <option value="7">Banner-2</option>
                                                        <option value="8">Top Banner</option>
                                                        <option value="9">Bottom left A4</option>
                                                        <option value="10">Bottom right A4</option>

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
                                                        <option value="1">12.7 x 7.35</option>
                                                        <option value="2">6.3 x 7.35</option>
                                                        <option value="3">6.3 x 3.35</option>
                                                        <option value="4">3.15 x 3.65</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-6">
                                                <p>Prize: </p>
                                            </div>
                                            <div class="col-6">
                                                <input id="" type="number" placeholder="Enter prize" class="form-control" name="Prize" required>
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
                                                        <option value="1">Unavailabel</option>
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



</body>

</html>
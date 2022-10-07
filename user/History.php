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
    <title>AD Publicize- Book Slot</title>
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
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- sr.no,name,title,name of organization,date of booking,prize,payment status -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="border">Sr.no</th>
                <th scope="col" class="border">Name</th>
                <th scope="col" class="border">Title</th>
                <th scope="col" class="border">Name of organization</th>
                <th scope="col" class="border">Date of booking</th>
                <th scope="col" class="border">Rate</th>
                <th scope="col" class="border">Payment status</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            </tr>
        </tbody>

    </table>



</body>

</html>
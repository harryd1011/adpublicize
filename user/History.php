<?php
include('session.php');
if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}
$history = mysqli_query($conn, "SELECT * FROM booking_details WHERE user_id='$id'");

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
                <th scope="col" class="border">Sr. no</th>
                <th scope="col" class="border">Name of organization</th>
                <th scope="col" class="border">Content</th>
                <th scope="col" class="border">Page_No</th>
                <th scope="col" class="border">Size</th>
                <th scope="col" class="border">Position</th>
                <th scope="col" class="border">Payment</th>
                <th scope="col" class="border">Order-Id</th>
                <th scope="col" class="border">Payment-Id</th>
                <th scope="col" class="border">Payment-Date</th>
                <th scope="col" class="border">Payment status</th>
            </tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($history)) {
            ?>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['organization_name']; ?></td>
                <td><?php echo $row['Content']; ?></td>
                <td><?php echo $row['Page_No']; ?></td>
                <td><?php echo $row['Size']; ?></td>
                <td><?php echo $row['Position']; ?></td>
                <td><?php echo $row['Payment']; ?></td>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['razorpay_payment_id']; ?></td>
                <td><?php echo $row['Payment_Date']; ?></td>
                <td><?php echo $row['status']; ?></td>

            </tr>

        <?php $i++;
            } ?>
        </tbody>

    </table>



</body>

</html>
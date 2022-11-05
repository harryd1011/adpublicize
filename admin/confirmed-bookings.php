<?php
include('admin-session.php');

if ($_SESSION['admin_login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='admin-login.php';
        </script>";
}

if(isset($_POST["delete"])){
    $booking_id= $_POST['id'];

    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmed bookings</title>
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
                <a class="list-group-item list-group-item-action second-text active" data-bs-toggle="collapse" href="#collapseTwo">
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
                    <h2 class="fs-2 m-0">Confirmed bookings</h2>
                </div>

            </nav>

            <div class="container-fluid">

                <div class="row">
                    <?php
                    while ($book = mysqli_fetch_array($fetch_bookings)) {
                        //Data about users registered is derived to display to admin.
                        $regid = $book['user_id'];
                        $fetch_registered_details = mysqli_query($conn, "SELECT * FROM registration where regid='$regid'");
                        $registered_row = mysqli_fetch_object($fetch_registered_details);
                    ?>
                        <div class="col-md-4 col-12 mt-5">

                            <div class="card rounded-2">
                                <div class="card-body ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col"><?php echo $book['name']; ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">E-mail</th>
                                                <td><?php echo $registered_row->emailid; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Contact No</th>
                                                <td><?php echo $registered_row->contactno; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Organization name</th>
                                                <td><?php echo $book['organization_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Page No</th>
                                                <td><?php echo $book['Page_No']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Size</th>
                                                <td><?php echo $book['Size']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Position</th>
                                                <td><?php echo $book['Position']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Price</th>
                                                <td><?php echo $book['Product_price']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Payment</th>
                                                <td><?php echo $book['Payment']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Publish Date</th>
                                                <td><?php echo $book['Publish_Date'];; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Payment Id</th>
                                                <td><?php echo $book['razorpay_payment_id']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Order Id</th>
                                                <td><?php echo $book['order_id']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Payment Date</th>
                                                <td><?php echo $book['Payment_Date']; ?></td>
                                            </tr>
                                            <tr>
                                                <form method="post">
                                                    <th scope="row">
                                                        <input type="hidden" value="<?php echo $book['id'];  ?>" name="id">
                                                        <button type="submit" class="btn btn-light" name="delete">
                                                            <i class="fas fa-trash-can align-left text-danger"></i>Delete
                                                        </button>
                                                    </th>
                                                    <td></td>
                                                </form>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>


                        </div>
                    <?php } ?>

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
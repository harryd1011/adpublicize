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
    <title>Users Registered</title>
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

        <div id="page-content-wrapper" style="background-image: url('photos/cassi-josh-lhnOvu72BM8-unsplash.jpg'); background-size:cover;">
            <nav class="navbar navbar-expand-lg py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-left fs-4 me-3 bg-light" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 bg-light">Users Registered</h2>
                </div>

            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col table-responsive">
                        <table class="table bg-white rounded shadow-sm table-hover table-bordered ">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.no</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email-id</th>
                                    <th scope="col">Contact No.</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Office Address</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Pincode</th>
                                    <th scope="col">Account Created</th>

                                </tr>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($fetch_users)) {
                                    $regid= $row['regid']; //fetching user id to get communication data from communication_1 table.
                                    $fetch_comm = mysqli_query($conn, "SELECT * FROM communication_1 where regid='$regid'");
                                    $comm_row = mysqli_fetch_object($fetch_comm);
                                    if($comm_row){
                                        $address = $comm_row->resiadd;
                                        $office_address = $comm_row->officeadd;
                                        $area =  $comm_row->area;
                                        $city = $comm_row->city;
                                        $pincode = $comm_row->pincode;
                                    }else{
                                        $address = 'NA';
                                        $office_address = 'NA';
                                        $area =  'NA';
                                        $city = 'NA';
                                        $pincode = 'NA';
                                    }
                                ?>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $row['fname'] .' '. $row['lname']; ?></td>
                                    <td><?php echo $row['emailid']; ?></td>
                                    <td><?php echo $row['contactno']; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $office_address; ?></td>
                                    <td><?php echo $area; ?></td>
                                    <td><?php echo $city; ?></td>
                                    <td><?php echo $pincode; ?></td>
                                    <td><?php echo $row['Created_at']; ?></td>
                                </tr>
                            <?php $i++;
                                } ?>
                            </tbody>
                            
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
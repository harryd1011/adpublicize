<?php
include('session.php');
$Publish_Date = "";
$date_visibility = 'visible';
$page_visibility = 'invisible';

if ($_SESSION['login'] !== true) {
    echo "<script>alert('Please login to your account to continue');
        window.location.href='../login.php';
        </script>";
}

// To check the slot available for the requested date
//Submit Date selected by user
//If the '
if (isset($_POST["submit_date"])) {
    $Publish_Date = $_POST["Publish_Date"];
    $_SESSION['Publish_Date'] =  $Publish_Date;

    global $Publish_Date;

    $check_date = mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Publish_Date='$Publish_Date'");

    $check_date_row =  mysqli_num_rows($check_date);

    if ($check_date_row >= 20) {
        $date_visibility = 'invisible';
        $page_visibility = 'visible';

        $Page_1_Side_1 = $_POST["Page-1_Side-1"];
        $Top_left_corner = $_POST["Top-left_corner"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$Top_left_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg = 'bg-light';
                $visibility = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg = 'bg-warning';
                $visibility = 'invisible';
            } else {
                $bg = 'bg-danger';
                $visibility = 'invisible';
            }
        }

        $Top_right_corner = $_POST["Top-right_corner"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$Top_right_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_1 = 'bg-light';
                $visibility_1 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_1 = 'bg-warning';
                $visibility_1 = 'invisible';
            } else {
                $bg_1 = 'bg-danger';
                $visibility_1 = 'invisible';
            }
        }

        $Banner_1 = $_POST["Banner-1"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$Banner_1' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_2 = 'bg-light';
                $visibility_2 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_2 = 'bg-warning';
                $visibility_2 = 'invisible';
            } else {
                $bg_2 = 'bg-danger';
                $visibility_2 = 'invisible';
            }
        }


        $center_left_corner = $_POST["center-left_corner"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$center_left_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_3 = 'bg-light';
                $visibility_3 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_3 = 'bg-warning';
                $visibility_3 = 'invisible';
            } else {
                $bg_3 = 'bg-danger';
                $visibility_3 = 'invisible';
            }
        }

        $center_mid = $_POST["center-mid"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$center_mid' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_4 = 'bg-light';
                $visibility_4 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_4 = 'bg-warning';
                $visibility_4 = 'invisible';
            } else {
                $bg_4 = 'bg-danger';
                $visibility_4 = 'invisible';
            }
        }

        $center_right_corner = $_POST["center-right_corner"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$center_right_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_5 = 'bg-light';
                $visibility_5 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_5 = 'bg-warning';
                $visibility_5 = 'invisible';
            } else {
                $bg_5 = 'bg-danger';
                $visibility_5 = 'invisible';
            }
        }

        $Banner_2 = $_POST["Banner-2"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_1' and Position='$Banner_2' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_6 = 'bg-light';
                $visibility_6 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_6 = 'bg-warning';
                $visibility_6 = 'invisible';
            } else {
                $bg_6 = 'bg-danger';
                $visibility_6 = 'invisible';
            }
        }

        $Page_1_Side_2 = $_POST["Page-1_Side-2"];
        $Top_Banner = $_POST["Top_Banner"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_2' and Position='$Top_Banner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_7 = 'bg-light';
                $visibility_7 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_7 = 'bg-warning';
                $visibility_7 = 'invisible';
            } else {
                $bg_7 = 'bg-danger';
                $visibility_7 = 'invisible';
            }
        }

        $Bottom_left_A4 = $_POST["Bottom-left_A4"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_2' and Position='$Bottom_left_A4' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_8 = 'bg-light';
                $visibility_8 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_8 = 'bg-warning';
                $visibility_8 = 'invisible';
            } else {
                $bg_8 = 'bg-danger';
                $visibility_8 = 'invisible';
            }
        }

        $Bottom_right_A4 = $_POST["Bottom-right_A4"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_1_Side_2' and Position='$Bottom_right_A4' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_9 = 'bg-light';
                $visibility_9 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_9 = 'bg-warning';
                $visibility_9 = 'invisible';
            } else {
                $bg_9 = 'bg-danger';
                $visibility_9 = 'invisible';
            }
        }

        $Page_2_Side_1 = $_POST["Page-2_Side-1"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_1' and Position='$Top_Banner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_10 = 'bg-light';
                $visibility_10 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_10 = 'bg-warning';
                $visibility_10 = 'invisible';
            } else {
                $bg_10 = 'bg-danger';
                $visibility_10 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_1' and Position='$Bottom_left_A4' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_11 = 'bg-light';
                $visibility_11 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_11 = 'bg-warning';
                $visibility_11 = 'invisible';
            } else {
                $bg_11 = 'bg-danger';
                $visibility_11 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_1' and Position='$Bottom_right_A4' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_12 = 'bg-light';
                $visibility_12 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_12 = 'bg-warning';
                $visibility_12 = 'invisible';
            } else {
                $bg_12 = 'bg-danger';
                $visibility_12 = 'invisible';
            }
        }

        $Page_2_Side_2 = $_POST["Page-2_Side-2"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$Top_left_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_13 = 'bg-light';
                $visibility_13 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_13 = 'bg-warning';
                $visibility_13 = 'invisible';
            } else {
                $bg_13 = 'bg-danger';
                $visibility_13 = 'invisible';
            }
        }

        $Top_center = $_POST["Top-center"];

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$Top_center' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_14 = 'bg-light';
                $visibility_14 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_14 = 'bg-warning';
                $visibility_14 = 'invisible';
            } else {
                $bg_14 = 'bg-danger';
                $visibility_14 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$Top_right_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_15 = 'bg-light';
                $visibility_15 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_15 = 'bg-warning';
                $visibility_15 = 'invisible';
            } else {
                $bg_15 = 'bg-danger';
                $visibility_15 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$Banner_1' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_16 = 'bg-light';
                $visibility_16 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_16 = 'bg-warning';
                $visibility_16 = 'invisible';
            } else {
                $bg_16 = 'bg-danger';
                $visibility_16 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$center_left_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_17 = 'bg-light';
                $visibility_17 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_17 = 'bg-warning';
                $visibility_17 = 'invisible';
            } else {
                $bg_17 = 'bg-danger';
                $visibility_17 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$center_mid' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_18 = 'bg-light';
                $visibility_18 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_18 = 'bg-warning';
                $visibility_18 = 'invisible';
            } else {
                $bg_18 = 'bg-danger';
                $visibility_18 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$center_right_corner' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_19 = 'bg-light';
                $visibility_19 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_19 = 'bg-warning';
                $visibility_19 = 'invisible';
            } else {
                $bg_19 = 'bg-danger';
                $visibility_19 = 'invisible';
            }
        }

        $check_status =  mysqli_query($conn, "SELECT * FROM slot_details_1 WHERE Page_No='$Page_2_Side_2' and Position='$Banner_2' and Publish_Date='$Publish_Date'");
        $num =  mysqli_num_rows($check_status);
        if ($num) {
            $row = mysqli_fetch_assoc($check_status);
            if ($row['Status'] == 'Available') {
                $bg_20 = 'bg-light';
                $visibility_20 = 'visible';
            } elseif ($row['Status'] == 'In Progress') {
                $bg_20 = 'bg-warning';
                $visibility_20 = 'invisible';
            } else {
                $bg_20 = 'bg-danger';
                $visibility_20 = 'invisible';
            }
        }
    } else {
        echo "<script>alert('No such publish date allotted.Please check again later.')</script>";
    }
}
// Back-end logic to check the slot available for the requested date ends


if (isset($_POST["book_btn"])) {
    if ($regid != "") {
        $Page_No = $_POST["Page_No"];
        $Position = $_POST["Position"];
        $Publish_Date = $_POST["Publish_Date"];

        $_SESSION['Page_No'] = $Page_No;
        $_SESSION['Position'] = $Position;

        echo "<script>alert('Continue your booking');
            window.location.href='booking_details.php';
            </script>";
    } else {
        echo "<script>alert('Communication details are left to fill. Please fill the details to continue your booking.');
        window.location.href='communication.php';
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize-Book Slots</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });

        // $(document).ready(function() {
        //     if (sessionStorage.getItem('#exampleModal') !== 'true') {
        //         $('#exampleModal').modal('show');
        //         sessionStorage.setItem('#exampleModal', true);
        //     }
        // });
    </script>

    <link rel="stylesheet" href="style.css" />
</head>

<body style="background-image: url('photos/BookSlot.jpg'); background-size:cover;">
    <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
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

    <!-- Date Form -->
    <section>
        <div class="container mt-1 <?php echo "$date_visibility"; ?>">
            <div class="row d-flex justify-content-center">
                <div class="col col-md-9 col-lg-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            Select Publish Date
                                        </h4>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary" name="submit_date">Submit</button>
                                    </div>
                                </div>
                                <hr>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p>Select Publish date: </p>
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" value="Page-1_Side-1" name="Page-1_Side-1">
                                        <input type="hidden" value="Top-left_corner" name="Top-left_corner">
                                        <input type="hidden" value="Top-center" name="Top-center">
                                        <input type="hidden" value="Top-right_corner" name="Top-right_corner">
                                        <input type="hidden" value="Banner-1" name="Banner-1">
                                        <input type="hidden" value="center-right_corner" name="center-right_corner">
                                        <input type="hidden" value="center-mid" name="center-mid">
                                        <input type="hidden" value="center-left_corner" name="center-left_corner">
                                        <input type="hidden" value="Banner-2" name="Banner-2">

                                        <input type="hidden" value="Page-1_Side-2" name="Page-1_Side-2">
                                        <input type="hidden" value="Top_Banner" name="Top_Banner">
                                        <input type="hidden" value="Bottom-left_A4" name="Bottom-left_A4">
                                        <input type="hidden" value="Bottom-right_A4" name="Bottom-right_A4">

                                        <input type="hidden" value="Page-2_Side-1" name="Page-2_Side-1">
                                        <input type="hidden" value="Page-2_Side-2" name="Page-2_Side-2">


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
    <!-- Date Form -->



    <div class="row <?php echo "$page_visibility"; ?>">
        <!-- Layout of page 1 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-1</b>
            </h4>

            <div class="row pt-3 mx-5">

                <div class="col-4 <?php echo "$bg"; ?> border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>

                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="Top-left_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>

                <div class="col-4 bg-light border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                    <h3>Bazar Group</h3>
                    </p>
                </div>
                <div class="col-4 <?php echo "$bg_1"; ?> border">
                    <p class="justify-content-center d-flex pt-4 mt-4">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="Top-right_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_1"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col <?php echo "$bg_2"; ?> border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="Banner-1" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_2"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-4 <?php echo "$bg_3"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="center-left_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_3"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_4"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="center-mid" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_4"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_5"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="center-right_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_5"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col <?php echo "$bg_6"; ?> border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-1_Side-1" name="Page_No">
                            <input type="hidden" value="Banner-2" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_6"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- Layout of page 2 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-2</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col <?php echo "$bg_7"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 12.7 x 7.35<br>
                                Rate: 6000/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mt-5 pt-5">
                                    <input type="hidden" value="Page-1_Side-2" name="Page_No">
                                    <input type="hidden" value="Top_Banner" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_7"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-6 <?php echo "$bg_8"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mt-5">
                                    <input type="hidden" value="Page-1_Side-2" name="Page_No">
                                    <input type="hidden" value="Bottom-left_A4" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_8"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 <?php echo "$bg_9"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mt-5">
                                    <input type="hidden" value="Page-1_Side-2" name="Page_No">
                                    <input type="hidden" value="Bottom-right_A4" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_9"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>

    <div class="row <?php echo "$page_visibility"; ?>">
        <!-- Layout of page 3 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-3</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col <?php echo "$bg_10"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 12.7 x 7.35<br>
                                Rate: 6000/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mb-5 mt-5">
                                    <input type="hidden" value="Page-2_Side-1" name="Page_No">
                                    <input type="hidden" value="Top_Banner" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_10"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-6 <?php echo "$bg_11"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mt-5">
                                    <input type="hidden" value="Page-2_Side-1" name="Page_No">
                                    <input type="hidden" value="Bottom-left_A4" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_11"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 <?php echo "$bg_12"; ?> border">
                    <div class="pt-5 mt-5 mb-5 pb-5">
                        <div class="mt-5 pt-5">
                            <p class="justify-content-center d-flex">Size(in inch): 6.3 x 7.35<br>
                                Rate: 3200/-
                            </p>
                            <form method="post">
                                <div class="d-flex justify-content-center mb-5 mt-5">
                                    <input type="hidden" value="Page-2_Side-1" name="Page_No">
                                    <input type="hidden" value="Bottom-right_A4" name="Position">

                                    <button type="submit" class="btn btn-primary <?php echo "$visibility_12"; ?>" name="book_btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Layout of page 4 -->
        <div class="col-md-6 col-12">
            <h4 class="justify-content-center d-flex mt-3">
                <b>Page-4</b>
            </h4>

            <div class="row pt-3 mx-5">
                <div class="col-4 <?php echo "$bg_13"; ?> border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="Top-left_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_13"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_14"; ?> border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="Top-center" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_14"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_15"; ?> border">
                    <p class="justify-content-center d-flex pt-4 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="Top-right_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_15"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col <?php echo "$bg_16"; ?> border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="Banner-1" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_16"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col-4 <?php echo "$bg_17"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="center-left_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_17"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_18"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="center-mid" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_18"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 <?php echo "$bg_19"; ?> border">
                    <p class="justify-content-center d-flex pt-5 mt-5">
                        Size(in inch): 3.15 x 3.65<br>
                        Rate: 500/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="center-right_corner" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_19"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mx-5">
                <div class="col <?php echo "$bg_20"; ?> border ">
                    <p class="justify-content-center d-flex mt-5 pb-5 pt-5">
                        Size(in inch): 6.3 x 3.35<br>
                        Rate: 1700/-
                    </p>
                    <form method="post">
                        <div class="d-flex justify-content-center mb-3">
                            <input type="hidden" value="Page-2_Side-2" name="Page_No">
                            <input type="hidden" value="Banner-2" name="Position">

                            <button type="submit" class="btn btn-primary <?php echo "$visibility_20"; ?>" name="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


</body>

</html>
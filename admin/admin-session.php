<?php
session_start();
$_SESSION['logadmin'] = "";
include("../DB_config.php");
$admin = $_SESSION['logadmin'];

if ($admin) {
    $fetch_admin = mysqli_query($conn, "SELECT * FROM admin_1 where username= '$admin'");

    $row_admin = mysqli_fetch_object($fetch_admin);
    $num_rows = mysqli_num_rows($fetch_admin);

    $admin_username = $row_admin->username;
    $admin_password = $row_admin->password;
}

// To fetch the number of bookings done
$fetch_bookings = mysqli_query($conn, "SELECT * FROM booking_details");
$num_bookings = mysqli_num_rows($fetch_bookings);

// To fetch the number of slots left for booking
$fetch_available = mysqli_query($conn, "SELECT * FROM slot_details_1");
$num_available = mysqli_num_rows($fetch_available);
$slot_available = $num_available - $num_bookings;

// To fetch the number of users registered into website
$fetch_users = mysqli_query($conn, "SELECT * FROM registration");
$num_users = mysqli_num_rows($fetch_users);

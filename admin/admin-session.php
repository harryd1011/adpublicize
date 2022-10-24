<?php
session_start();
include("../DB_config.php");
$admin= $_SESSION['logadmin'];

$fetch_admin = mysqli_query($conn,"SELECT * FROM admin_1 where username= '$admin'");

$row_admin = mysqli_fetch_object($fetch_admin);

$admin_username= $row_admin->username;
$admin_password= $row_admin->password;



?>
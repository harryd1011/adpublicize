<?php
session_start();
session_destroy();
$_SESSION['admin_login'] = false;
unset($_SESSION['admin_login']);
header('location:admin-login.php');
?>
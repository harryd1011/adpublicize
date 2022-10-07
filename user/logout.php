<?php
session_start();
session_destroy();
$_SESSION['login'] = false;
unset($_SESSION['login']);
header('location:../dashboard.php');
?>
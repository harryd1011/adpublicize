<?php

$keyId = 'rzp_test_DLwxHOYDn4ZhUG';
$keySecret = 'eI23DwtFMJHmy6P5z4dhSg5i';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//DATABASE CONNECTION
$conn = mysqli_connect('localhost', 'root', '', 'adpublicizedb');

if ($conn) {
    $db = mysqli_select_db($conn, "adpublicizedb");

    if ($db) {
        // echo "Connect";
    } else {
        //echo "Not Connect";
    }
}

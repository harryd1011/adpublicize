<?php
session_start();
include("config.php");
$user = $_SESSION['user_id'];

// Fetching details from registration

$result = mysqli_query($conn, "SELECT * FROM registration WHERE regid='$user'");

$row = mysqli_fetch_object($result);

if ($row) {
    $id = $row->regid;
    $fname = $row->fname;
    $lname = $row->lname;
    $emailid = $row->emailid;
    $contactno = $row->contactno;
    $password = $row->password;
}
else{
    $id= "";
    $fname="";
    $lname="";
    $emailid="";
    $contactno="";
    $password="";
}


// Fetching details from communication table with reference to id variable in registration table
$req = mysqli_query($conn, "SELECT * FROM communication_1 WHERE regid='$user'");


$row2 = mysqli_fetch_object($req);
if ($row2) {
    $regid = $row2->regid;
    $resiadd = $row2->resiadd;
    $officeadd = $row2->officeadd;
    $officeCno = $row2->officeCno;
    $area = $row2->area;
    $city = $row2->city;
    $pincode = $row2->pincode;
} else {
    $regid = "";
    $resiadd = "";
    $officeadd = "";
    $officeCno = "";
    $area = "";
    $city = "";
    $pincode = "";
}


// Fetching booking  details from booking_details table
$book = mysqli_query($conn, "SELECT * FROM booking_details WHERE user_id='$user'");
$row3 = mysqli_fetch_object($book);

if($row3){
    $Content = $row3->Content;
    $Product_price= $row3->Product_price;
    $razorpay_order_id= $row3->order_id;
    $razorpay_payment_id=  $row3->razorpay_payment_id;
    $Payment_Date= $row3->Payment_Date;
    $advance_Payment= $row3->Payment;
}


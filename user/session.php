<?php
    session_start();
    include("../config.php");
    $user = $_SESSION["loguser"];

    $result = mysqli_query($conn,"SELECT * FROM registration WHERE emailid='$user'");
    
    $row = mysqli_fetch_object($result);

    $id = $row->regid;
    $fname = $row->fname;
    $lname = $row->lname;
    $emailid = $row->emailid;
    $contactno = $row->contactno;
    $password = $row->password;

    // $_SESSION["userdetails"] = $id;
    $resp = $id;
    
    // $resp = $_SESSION["userdetails"];

    $req = mysqli_query($conn,"SELECT * FROM communication WHERE regid='$resp'");

    
    $row2 = mysqli_fetch_object($req);
    if($row2){
    $resiadd = $row2->resiadd;
    $officeadd = $row2->officeadd;
    $officeCno = $row2->officeCno;
    $area = $row2->area;
    $city = $row2->city;
    $pincode = $row2->pincode;

    }
    else{
        $resiadd = "";
        $officeadd = "";
        $officeCno = "";
        $area = "";
        $city = "";
        $pincode = "";
    }
    // $row2 = mysqli_fetch_object($req);

    // $resiadd = $row2->resiadd;
    // $officeadd = $row2->officeadd;
    // $officeCno = $row2->officeCno;
    // $area = $row2->area;
    // $city = $row2->city;
    // $pincode = $row2->pincode;
    

?>

<?php
    session_start();
    include("../config.php");
    $user = $_SESSION["loguser"];

    // Fetching details from registration

    $result = mysqli_query($conn,"SELECT * FROM registration WHERE emailid='$user'");
    
    $row = mysqli_fetch_object($result);

    $id = $row->regid;
    $fname = $row->fname;
    $lname = $row->lname;
    $emailid = $row->emailid;
    $contactno = $row->contactno;
    $password = $row->password;

    // Fetching details from communication table with reference to id variable in registration table
    $resp = $id;
    
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

    // Fetching details from slot_details table

    $Page_No= $_SESSION["Page_No"];
    $Position= $_SESSION["Position"];

    $fetch = mysqli_query($conn, "SELECT * FROM slot_details WHERE Page_No='$Page_No' and Position='$Position'");

    $row3= mysqli_fetch_object($fetch);

    if($row3){
        $page_id= $row3->id;
        $Page_No= $row3->Page_No;
        $Position= $row3->Position;
        $Size= $row3->Size;
        $Status= $row3->Status;
        $Price= $row3->Price;
        $Publish_Date= $row3->Publish_Date;

    }

    

    
    
    

?>

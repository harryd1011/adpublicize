<?php

    $conn = mysqli_connect('localhost','root','','adpublicizedb');

    if($conn){
        $db = mysqli_select_db($conn,"adpublicizedb");

        if($db){
            // echo "Connect";
        }
        else{
            //echo "Not Connect";
        }   
    }

?>
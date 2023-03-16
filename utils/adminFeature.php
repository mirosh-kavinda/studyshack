<?php

include "db_connect.php";
include "functions.php";

if (isset($_POST["classreg"])) {
    $cname = $_POST["c_name"];
    $cteacher = $_POST["c_cordinator"];
    $cdesc = $_POST["c_desc"];
    $classFee = $_POST["c_fee"];
    $classDuration = $_POST["c_duration"];
    $Category = $_POST["c_category"];
    $grade = $_POST["c_category"];


    $data = classExistance($conn, $cname);

    if ($data) {
        $e_message = 'Class Already Exist!';
        $e_icon = 'error';
        $e_text = 'Please Reconsider what you enter ';
    } else {
        $sql1 = "INSERT INTO class(c_name,c_desc,c_cordinator,c_duration,c_fee,c_category,grade) VALUES('$cname','$cdesc','$cteacher','$classDuration','$classFee','$Category','$grade' );";

        if (!mysqli_query($conn, $sql1)) {
            echo " <script>alert('Error Detected')</script >";
        } else {
            $e_message = 'Class Added Succesfully!';
            $e_icon = 'sucess';
            $e_text = 'Please Reconsider what you enter ';
            header('Location:../index.php');
        }
    }
    // class update code goes here
} else if (isset($_POST["classupdate"])) {
    $cname = $_POST["c_name"];
    $cteacher = $_POST["c_cordinator"];
    $cdesc = $_POST["c_desc"];
    $classFee = $_POST["c_fee"];
    $classDuration = $_POST["c_duration"];
    $Category = $_POST["c_category"];


    
} 


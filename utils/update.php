<?php
// Include config file
require_once "../utils/db_connect.php";

// Define variables and initialize with empty values
$name = $address = $phone = $email = $mobile = "";
// update code 
if (isset($_POST['editProfile'])) {
    // Set parameters
    $param_name =  $_POST['name'];
    $param_address = $_POST['address'];
    $param_phone = $_POST['phone'];
    $param_email = $_POST['email'];
    $param_mobile = $_POST['tele'];


    $usertype = $_SESSION['user_type'];
    $userId =  $_SESSION['userId'];


    $sql = "UPDATE $usertype  SET uname=?, address=?,tele=?,email=?,whatsapp=?  WHERE u_id=? ";


    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssssi", $param_name, $param_address, $param_phone, $param_email, $param_mobile, $userId);


        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records updated successfully. Redirect to landing pag
            header("Location:../pages/Dashboards/DashboardSection.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

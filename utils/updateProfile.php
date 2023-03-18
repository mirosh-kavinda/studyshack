<?php
// Include config file
require_once "db_connect.php";

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

    $targetDir = "../img/persons/";
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($filetype != "jpg" || $_FILES["pdfFile"]["size"] > 4000000) {
        echo "Error: Only jpg  file less than 4MB are allowed to upload.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            $filename = $_FILES["pdfFile"]["name"];

            $sql = "UPDATE $usertype  SET uname=?, address=?,tele=?,email=?,whatsapp=? ,prof_pic=?  WHERE u_id=? ";


            if ($stmt = mysqli_prepare($conn, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ssssssi", $param_name, $param_address, $param_phone, $param_email, $param_mobile,$filename, $userId );


                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    $_SESSION['user_img']=$filename;
                    // Records updated successfully. Redirect to landing pag
                    header("Location:../pages/Dashboards/DashboardSection.php");
                    exit();
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
        }
    }
}
?>
}
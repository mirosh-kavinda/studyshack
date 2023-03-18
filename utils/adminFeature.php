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

if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {

    $id =  trim($_GET["id"]);
    $cid =  trim($_GET["cid"]);
    $stmt = $conn->prepare("INSERT INTO student_sub (uname,c_name) VALUES ('$id','$cid')");
    $stmt->execute();
    $stmt_result = $stmt->get_result();




    $stmt1 = $conn->prepare("DELETE FROM payment WHERE s_email=?");
    $stmt1->bind_param("s",$id);
    $stmt1->execute();
    if ($stmt1) {
        echo "Record deleted successfully";
        header("Location:../pages/Dashboards/DashboardSection.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location:../pages/Dashboards/DashboardSection.php");
    }
} else {
    die;
}

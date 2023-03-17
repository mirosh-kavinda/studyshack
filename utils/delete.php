<?php

include "db_connect.php";


if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    if (isset($_GET['userType'])) {
        $userType = $_GET['userType'];

        $sql = "DELETE FROM $userType WHERE u_id=$userId";



        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location:../pages/Dashboards/DashboardSection.php");
        } else {
            echo "Error deleting record: " . $conn->error;
            header("Location:../pages/Dashboards/DashboardSection.php");
        }
    }


    $sql = "DELETE FROM class WHERE c_id=$userId";


    if ($conn->query($sql) === TRUE) {
        header("Location:../pages/Dashboards/DashboardSection.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location:../pages/Dashboards/DashboardSection.php");
    }
}
if (isset($_GET['mid'])) {

    if (isset($_GET['directory'])) {

        $matId = $_GET['mid'];
        $matDir = $_GET['directory'];

        $sql = "DELETE FROM study_material WHERE m_id=$matId";


        if ($conn->query($sql) === TRUE) {
            unlink("../pages/Dashboards/" . $matDir);
            echo "Record deleted successfully";
            header("Location:../pages/Dashboards/DashboardSection.php");

            
        } else {
            echo "Error deleting record: " . $conn->error;
            header("Location:../pages/Dashboards/DashboardSection.php");
        }
    }
}

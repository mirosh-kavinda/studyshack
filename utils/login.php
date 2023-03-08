<?php

include("db_connect.php");

//this is the fucntion for authentication of the user
function Authenticate($con, $username, $usertype, $password)
{
    switch ($usertype) {
        case 1:
            $sql = "SELECT * FROM student WHERE s_email=?";
            break;
        case 2:
            $sql = "SELECT * FROM teacher WHERE t_email=? ";
            break;
        case 3:
            $sql = "SELECT * FROM reg_staff WHERE email=?";
            break;
        default:
            echo " <script>alert('Error Detected')</script ";
            break;
    }


    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();


    if ($stmt_result->num_rows > 0) {

        $data = $stmt_result->fetch_assoc();

        if ($data['password'] === $password) {
            session_start();
            $_SESSION['login_user'] = $username;
            if ($usertype == 1) {
                header("location:../pages/Dashboards/studentDash.php");
            } else if ($usertype == 2) {

                header("location:../pages/Dashboards/teacherDash.php");
            } else if ($usertype == 3) {
                header("location:../pages/Dashboards/adminDash.php");
            } else {
                echo " <script>alert('Your Login  Password is invalid');</script> ";
            }
        } else {
            echo " <script>alert('Your Login Name or Password is invalid');</script> ";
        }
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['logtype'];
    Authenticate($conn, $username, $usertype, $password);
}

mysqli_close($conn);

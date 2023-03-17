

<?php
   include "../../utils/db_connect.php";
if (isset($_POST['markReg'])) {
    $studentID = $_POST['c_student'];
    $classNameID = $_POST['c_class'];
    $marks = $_POST['c_marks'];

    $sql = "INSERT INTO student_sub(uname,umarks,c_name) VALUES ('$studentID ','$marks','$classNameID') ";
    if (mysqli_query($conn, $sql)) {

        echo "Mark Added Success";
        header("Location:DashboardSection.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading marks";
}


?>
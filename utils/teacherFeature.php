<?php
include "db_connect.php";

if (isset($_POST['markReg'])) {
    $studentID = $_POST['c_student'];
    $classNameID = $_POST['c_class'];
    $marks = $_POST['c_marks'];

    $sql2 = "INSERT INTO student_sub(uname,umarks,c_name) VALUES ('$studentID ','$marks','$classNameID') ";
    if (mysqli_query($conn, $sql2)) {
        echo "Mark Added Success";
        header("Location:../pages/Dashboards/DashboardSection.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading marks";
}


if (isset($_POST['addMaterial'])) {
    $targetDir = "../uploads/";
    $cat = $_POST['m_category'];
    $name = $_POST['m_name'];
    $grade = $_POST['grade'];
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    echo $targetDir;
    if ($filetype != "pdf" || $_FILES["pdfFile"]["size"] > 4000000) {
        echo "Error: Only PDF files less than 4MB are allowed to upload.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            $filename = $_FILES["pdfFile"]["name"];
            $folder_path = $targetDir;
            $time_stamp = date('Y-m-d H:i:s');
            $sql = "INSERT INTO study_material (filename, folder_path, time_stamp, m_grade,m_category,m_topic) VALUES ('$filename','$folder_path', '$time_stamp','$grade','$cat','$name') ";

            if ($conn->query($sql) === TRUE) {
                echo "File uploaded successfully";
                header("Location:../pages/Dashboards/DashboardSection.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading File.";
        }
    }
}

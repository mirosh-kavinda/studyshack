<?php
include "../../utils/db_connect.php";
if (isset($_POST['submit'])) {
  $targetDir = "uploads/";
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
        header("Location:DashboardSection.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo "Error uploading File.";
    }
  }
}
?>
<?php

// include database 
include "db_connect.php";
include "functions.php";

$email;
// user login  function  
if (isset($_POST["login"])) {

  $email = $_POST['username'];
  $password = $_POST['password'];
  $_SESSION['user_type'] = $_POST['logtype'];

  $data = getUser($conn, $_SESSION['user_type'], $email);

  if ($data) {
    if ($data['password'] === $password) {
      $_SESSION['login_user'] = $data['uname'];
      $_SESSION['user_email'] = $data['email'];
      $_SESSION['userId'] = $data['u_id'];
      $_SESSION['user_img'] = $data['prof_pic'];

      $e_message = 'Hello ' . $_SESSION['login_user'] . '\nWelcome to StudyShack';
      $e_icon = 'success';
      $e_text = 'You can now view Your Dashboard for more info! ';
    } else {
      $e_message = 'Password is mismatched';
      $e_icon = 'error';
      $e_text = 'Please provide valid password for ';
      $e_text .= $email;
    }
  } else {
    $e_message = $email;
    $e_message .= ' : not registered ';
    $e_icon = 'question';
    $e_text = 'If you do not have an account please Register! ';
  }
}


//Student registration code
else if (isset($_POST["sregister"])) {
  $Name = $_POST["sname"];
  $email = $_POST["semail"];
  $Tele = $_POST["stelephone"];
  $Wtsapp = $_POST["swhatsapp"];
  $Address = $_POST["saddress"];
  $Gender = $_POST["sgender"];
  $Grade = $_POST["sgrade"];
  $password = $_POST["spassword"];
  $date = date("Y/m/d");
  $targetDir = "img/persons/";
  $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
  $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  if ($filetype != "jpg" || $_FILES["pdfFile"]["size"] > 4000000) {
    echo "Error: Only jpg  file less than 4MB are allowed to upload.";
  } else {
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
      $filename = $_FILES["pdfFile"]["name"];

      $data = getUser($conn, "student", $email);

      if ($data) {

        $e_message = 'User Already Exist!';
        $e_icon = 'error';
        $e_text = 'Please login to the system  using creditionals ';
      } else {
        $sql = "INSERT INTO student(uname,email,tele,whatsapp,address,grade,gender,password,reg_date ,prof_pic) VALUES('$Name','$email','$Tele','$Wtsapp','$Address','$Grade' ,'$Gender','$password','$date','$filename');";
        if (mysqli_query($conn, $sql)) {
          $e_message = $email;
          $e_message .= ' : is registered  successfully';
          $e_icon = 'success';
          $e_text = 'You can log with your creditionals! ';
        } else {
          echo "Error." . $sql . "<br>" . mysqli_error($conn);
        }
      }
    }
  }

  //teacher registration code ends here
} else if (isset($_POST["tregister"])) {
  $Name = $_POST["tname"];
  $Email = $_POST["temail"];
  $Tele = $_POST["ttelephone"];
  $Wtsapp = $_POST["twhatsapp"];
  $Address = $_POST["taddress"];
  $Gender = $_POST["tgender"];
  $Grade = $_POST["grade"];
  $Password = $_POST["tpassword"];
  $date = date("Y/m/d");
  $grades = $_POST['grade'];
  $targetDir = "img/persons/";
  $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
  $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  if ($filetype != "jpg" || $_FILES["pdfFile"]["size"] > 4000000) {
    echo "Error: Only jpg  file less than 4MB are allowed to upload.";
  } else {
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
      $filename = $_FILES["pdfFile"]["name"];


      $data = getUser($conn, "teacher", $Email);

      if ($data) {
        $e_message = 'User Already Exist!';
        $e_icon = 'error';
        $e_text = 'Please login to the system  using creditionals ';
      } else {
        $sql = "INSERT INTO teacher (uname,email,tele,whatsapp,address,gender,password,reg_date,prof_pic) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Gender','$Password','$date','$filename');";
        if (mysqli_query($conn, $sql)) {
          $e_message = $Email;
          $e_message .= ' : is registered  successfully';
          $e_icon = 'success';
          $e_text = 'You can log with your creditionals! ';
        } else {
          echo "Error." . $sql . "<br>" . mysqli_error($conn);
        }
      }
    }
  }


  $teachId = getNextIncrement('teach_sub', $dbname, $conn);
  foreach ((array) $grades as $grade) {
    $int = mysqli_insert_id($conn) + 1;

    $sql = "INSERT INTO teach_sub (t_id,t_grade) VALUES('$int','$grade') ";
    if (mysqli_query($conn, $sql)) {
    } else {
      echo "Error." . $sql . "<br>" . mysqli_error($conn);
    }
  }
  $e_message .= 'Teachsubject table successfully';
  $e_icon = 'success';
  $e_text = 'You can log with your creditionals! ';
}
//user logout function 
else if (isset($_GET["logout"])) {

  if (isset($_SESSION['login_user'])) {
    $e_message = 'See you again  \n';
    $e_message .= $_SESSION["login_user"];
    $e_icon = 'success';
    $e_text =  'Until the next time ! ';
    unset($_SESSION["login_user"]);
    unset($_SESSION['user_email']);
    session_destroy();
    // header("location:index.php");
  }
}

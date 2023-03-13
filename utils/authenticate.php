
<?php
session_start();

// include database 
include "db_connect.php";
include "functions.php";

global $e_message, $e_icon, $e_text;
// user login  function  
if (isset($_POST["login"])) {

  $email = $_POST['username'];
  $password = $_POST['password'];

  $_SESSION['user_type'] = $_POST['logtype'];
  switch ($_SESSION['user_type']) {
    case 1:
      $sql = "SELECT * FROM student WHERE email=?";
      break;
    case 2:
      $sql = "SELECT * FROM teacher WHERE email=? ";
      break;
    case 3:
      $sql = "SELECT * FROM staff WHERE email=?";
      break;
  }

  $data = getUser($conn, $sql, $email);
  if ($data) {
    if ($data['password'] === $password) {
      $_SESSION['login_user'] = $data['uname'];

      $e_message ='Hello ' .$_SESSION['login_user'].'\nWelcome to StudyShack';
      $e_icon = 'success';
      $e_text = 'You can now view Your Dashboard ';
      return 1;
    } else {
      $e_message = 'Password is mismatched';
      $e_icon = 'error';
      $e_text = 'Please provide valid password for ';
      $e_text .= $email;
    }
  } else {
    $e_message = $email;
    $e_message .= '>> not registered ';
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

  $data = getUser($conn, $sql, $email);

  if ($data) {
    $e_message = 'User Already Exist!';
    $e_icon = 'error';
    $e_text = 'Please login to the system  using creditionals ';
  } else {
    $sql1 = "INSERT INTO student(uname,email,s_tele,s_wtsapp,s_address,s_grade,s_gender,password,reg_date) VALUES('$Name','$email','$Tele','$Wtsapp','$Address','$Grade' ,'$Gender','$password','$date');";
  }

  //student registration code ends here
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

  $data = getUser($conn, $sql, $email);

  if ($data) {
    $e_message = 'User Already Exist!';
    $e_icon = 'error';
    $e_text = 'Please login to the system  using creditionals ';
  } else {
    $sql2 = "INSERT INTO teacher (uname,email,t_tele,t_whtsapp,t_address,t_gender,password,reg_date) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Gender','$Password','$date');";
  }


  $items = "";
  $teachId = getNextIncrement('teach_sub', $db, $conn);
  foreach ((array) $grades as $grade) {
    $int = mysqli_insert_id($conn) + 1;

    $sql3 = "INSERT INTO teach_sub (t_id,t_grade) VALUES('$int','$grade') ";
  }


  //subject registration code ends here
} else if (isset($_POST["subregister"])) {
  $Grade = $_POST["grade"];
  $subName = $_POST["subName"];
  $subDescription = $_POST["subDesc"];


  $sql3 = "INSERT INTO subject VALUES('$Grade','$subName','$subDescription');";
  if (!mysqli_query($conn, $sql3)) {
    echo " <script>alert('Error Detected')</script >";
  } else {
    echo " <script>alert('Subject Added Successfully')</script >";
  }
}

//user logout function 
else if (isset($_GET["logout"])) {

  if (isset($_SESSION['login_user'])) {
    $e_message = 'See you again  \n';
    $e_message .= $_SESSION["login_user"];
    $e_icon = 'success';

    unset($_SESSION["login_user"]);
    session_destroy();
    // header("location:index.php");
  }
}

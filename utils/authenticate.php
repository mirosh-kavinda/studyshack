
<?php
session_start();

// include database 
include "db_connect.php";
include "functions.php";

// user login  function  
if (isset($_POST["login"])) {

  $email = $_POST['username'];
  $password = $_POST['password'];

  $_SESSION['user_type'] = $_POST['logtype'];
  switch ($_SESSION['user_type']) {
    case 1:
      $sql = "SELECT * FROM student WHERE s_email=?";
      break;
    case 2:
      $sql = "SELECT * FROM teacher WHERE t_email=? ";
      break;
    case 3:
      $sql = "SELECT * FROM staff WHERE e_email=?";
      break;
    default:
      echo " <script>alert('Error Detected')</script> ";
      break;
  }


  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();


  if ($stmt_result->num_rows > 0) {

    $data = $stmt_result->fetch_assoc();

    if ($data['password'] === $password) {
      $_SESSION['login_user'] =$data['uname'] ;
      header("location:pages/Dashboards/DashboardSection.php");
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
    $e_text = 'If you do not have an account please sign up ! ';
  }
}



//Student registration code
else if (isset($_POST["sregister"])) {
  $Name = $_POST["sname"];
  $Email = $_POST["semail"];
  $Tele = $_POST["stelephone"];
  $Wtsapp = $_POST["swhatsapp"];
  $Address = $_POST["saddress"];
  $Gender = $_POST["sgender"];
  $Grade = $_POST["sgrade"];
  $Password = $_POST["spassword"];
  $date = date("Y/m/d");

  $stmt = $conn->prepare("select * from student where email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();

  if ($stmt_result->num_rows > 0) {
    $e_message = 'User Already Exist!';
    $e_icon = 'error';
    $e_text = 'Please login to the system  using creditionals ';
  } else {
    $sql1 = "INSERT INTO student(s_name,s_email,s_tele,s_wtsapp,s_address,s_grade,s_gender,s_password,reg_date) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Grade' ,'$Gender','$Password','$date');";
  }

  if (!mysqli_query($conn, $sql1)) {
    echo "Error." . $sql1 . "<br>" . mysqli_error($conn);
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


  $stmt = $conn->prepare("select * from teacher where email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();

  if ($stmt_result->num_rows > 0) {
    $e_message = 'User Already Exist!';
    $e_icon = 'error';
    $e_text = 'Please login to the system  using creditionals ';
  } else {
    $sql2 = "INSERT INTO teacher (t_name,t_email,t_tele,t_whtsapp,t_address,t_gender,t_password,reg_date) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Gender','$Password','$date');";
  }

  if (!mysqli_query($conn, $sql1)) {
    echo "Error." . $sql1 . "<br>" . mysqli_error($conn);
  }
  $items = "";
  $teachId = getNextIncrement('teach_sub', $db, $conn);
  foreach ((array) $grades as $grade) {
    $int = mysqli_insert_id($conn) + 1;

    $sql3 = "INSERT INTO teach_sub (t_id,t_grade) VALUES('$int','$grade') ";
    if (!mysqli_query($conn, $sql3)) {
      echo "Error." . $sql3 . "<br>" . mysqli_error($conn);
    }
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


// user Registration   function  
else if (isset($_POST['signup'])) {
  $firstName = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["psw"];

  $stmt = $con->prepare("select * from users where email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();

  if ($stmt_result->num_rows > 0) {
    $e_message = 'User Already Exist!';
    $e_icon = 'error';
    $e_text = 'Please login to the system  using creditionals ';
  } else {

    $sql = "INSERT INTO users (firstName,email,password) VALUES (?,?,?)";
    $stmnt = $con->prepare($sql);
    $result = $stmnt->execute([$firstName, $email, $password]);

    if ($result) {

      $e_message = 'New User registered  successfully ';
      $e_icon = 'success';
      $e_text = 'Please login with your Creditionals  ';
    } else {
      $e_message = 'Error in User Registration  ';
      $e_icon = 'error';
      $e_text = 'Welcome to CRAFIRA! ';
    }
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

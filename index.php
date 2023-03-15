<?php

// php code using for load web content without refreshing the webpage 
if (
  isset($_SERVER['HTTPS']) &&
  ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
) {
  $ssl = 'https';
} else {
  $ssl = 'http';
}
$app_url = ($ssl)
  . "://" . $_SERVER['HTTP_HOST']
  . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
  . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

include 'utils/authenticate.php';
// this for hide undeclared error
error_reporting(E_ALL);
ini_set("display_errors", NULL);

//This keep user loged in until they signed out
if ($_SESSION["login_user"]) {
  echo '<style>#signout,#dashboard{display:block !important;}</style>';
  echo '<style>#signin,#Login-User,.registerbtn{display:none !important;}</style>';
} else {
  echo '<style>#signout,#dashboard{display:none !important;}</style>';
  echo '<style>#signin,#Login-User{display:block !important;}</style>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>StudyShack</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <!--JQuery-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="css/index.css">

  <!-- this use for use sweet alert in our website -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>



<body class="university-lp" id="demo">
  <!-- Error handelling alert box -->
  <script>
    $(function() {
      $("#post-placeholder").load("pages/landing.php");
    });
    // loading html element to the  main layout
    $(function() {
      $("#nav-placeholder").load("pages/navbar.html");
    });


    var e_message = '<?php echo $e_message ?>';
    var e_icon = '<?php echo $e_icon ?>';
    var e_text = '<?php echo $e_text ?>';

    if (e_message) {
      $(document).ready(function func() {
        Swal.fire({
          title: e_message,
          text: e_text,
          icon: e_icon,
          timer: 3800,
          showCancelButton: false, // There won't be any cancel button
          showConfirmButton: false // There won't be any confirm button
        });
      });
    }
  </script>

  <header>
    <!--Navigation bar-->
    <div id="nav-placeholder"></div>
  </header>
  <!--Search Result-->
  <div id="searchresult"></div>
  <!-- Content load here -->
  <div id="post-placeholder"></div>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
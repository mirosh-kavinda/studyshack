<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>
<?php
session_start();
?>

<body>

  <!-- Breadcrumbs & Search -->
  <div class="container-fluid  ">
    <div class="card mb-4 wow fadeIn grey lighten-4">
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-1 mb-sm-0 ">
          <a href="../../index.php">Home</a>
          <span>/</span>
          <span>Dashboard</span>
          <div class="dropdown">
        </h4>
        <a class="btn btn-info dropdown-toggle col-2" id=" dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['login_user']; ?>
        </a>
        <!-- /.Breadcrumbs & Search -->
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="../../index.php?logout">SignOut</a></li>

        </ul>
      </div>
    </div>
  </div>
  </div>


  <?php


  switch ($_SESSION['user_type']) {
    case 'student':
      include "studentDash.php";
      break;
    case 'teacher':
      include "teacherDash.php";
      break;
    case 'staff':
      include "adminDash.php";
      break;
    default:
      echo " <script>alert('Error Detected')</script> ";
      break;
  }
  ?>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
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
        </h4>
        <h4 class="text-uppercase">Logged AS <?php echo $_SESSION['login_user']; ?></h4>

      </div>
    </div>
  </div>
  <!-- /.Breadcrumbs & Search -->


  <?php


  switch ($_SESSION['user_type']) {
    case 1:
      include "studentDash.php";
      break;
    case 2:
      include "teacherDash.php";
      break;
    case 3:
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
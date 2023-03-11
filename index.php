<?php

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
  <link rel="stylesheet" href="css/index.css">



</head>

<body class="university-lp">
  <!-- Error handelling alert box -->

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <?php include("utils/navbar.php"); ?>
    <!--Navbar-->

    <!-- Intro Section -->
    <?php include("pages/home/landing.php"); ?>

  </header>
  <!--Navigation & Intro-->

  <!--Main content-->
  <main>

    <div class="container">

      <!--Section: About-->
      <section id="about" class="section mt-4 mb-2">

        <?php include("pages/home/about.php"); ?>
      </section>
      <!--Section: About-->

      <hr>

      <!--Projects section v.3-->
      <section id="info" class="section mt-4 mb-5 pb-4">

        <?php include("pages/home/project.php"); ?>

      </section>
      <!--Projects section v.3-->

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> Creativity requires the courage to let go of
            certainties
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>
          <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Erich Fromm</h5>
        </div>
      </div>
    </div>
    <!--Streak-->


    <div class="container-fluid background-r">
      <div class="container py-3">

        <!--Section: Blog v.2-->
        <section class="section extra-margins text-center" id="classes">

          <?php include("pages/home/blog.php"); ?>

        </section>
        <!--Section: Blog v.2-->

      </div>
    </div>

    <div class="container">

      <section id="testimonials" class="section mb-5">

        <?php include("pages/home/carousel.php"); ?>
      </section>

    </div>
    <!-- login -->

    <section class="container-fluid" id="Login-User">
      <?php include("utils/login.php"); ?>
    </section>

  </main>
  <!--Main content-->

  <!--Footer-->
  <footer class="page-footer text-center text-md-left mdb-color darken-3 mt-4">

    <?php include("utils/footer.php"); ?>

  </footer>


  <!--JQuery-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

  <!--Bootstrap core JavaScript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!--MDB core JavaScript-->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
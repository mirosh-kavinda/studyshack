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

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <?php include("pages/home/navbar.php"); ?>
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

    <div class="container-fluid" id="Login-User">
      <?php include("pages/home/loginSection.php"); ?>
    </div>

  </main>
  <!--Main content-->

  <!--Footer-->
  <footer class="page-footer text-center text-md-left mdb-color darken-3 mt-4">

    <?php include("pages/home/footer.php"); ?>

  </footer>
  <!--Footer-->

  <!--SCRIPTS-->

  <!--JQuery-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

  <!--Bootstrap tooltips-->
  <script type="text/javascript" src="js/popper.min.js"></script>

  <!--Bootstrap core JavaScript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!--MDB core JavaScript-->
  <script type="text/javascript" src="js/mdb.min.js"></script>



  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function() {
      $('.mdb-select').material_select();
    });
    $(document).ready(function() {
      // Show/hide the button depending on the user's scroll position
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('#scroll-top-btn').fadeIn();
        } else {
          $('#scroll-top-btn').fadeOut();
        }
      });
      // When the button is clicked, smoothly scroll to the top of the page
      $('#scroll-top-btn').click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 800);
        return false;
      });
    });
  </script>

</body>

</html>
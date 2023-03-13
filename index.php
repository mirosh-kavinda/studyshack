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
  <!--JQuery-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
  <link href="css/perfect-scrollbar.css" rel="stylesheet">
  <!-- this use for use sweet alert in our website -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>

<div class="scrollbar scrollbar-info">
  <div class="force-overflow">

    <body class="university-lp" id="demo">
      <!-- Error handelling alert box -->
      <script>
        $(function() {
          $("#post-placeholder").load("pages/landing.html");
        });
        // loading html element to the  main layout
        $(function() {
          $("#nav-placeholder").load("utils/navbar.html");
        });
        $(function() {
          $("#footer-placeholder").load("utils/footer.html");
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

        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('img/landing.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-black-strong">
            <div class="container h-100 d-flex justify-content-center align-items-center">
              <div class="row smooth-scroll">
                <div class="col-md-12 white-text text-center">
                  <div class="wow fadeInDown" data-wow-delay="0.2s">
                    <h2 class="display-3 font-weight-bold mb-2">StudyShack Institute</h2>
                    <hr class="hr-light">
                    <h3 class="subtext-header mt-4 mb-5">Empowering young minds to explore the world of technology.</h3>
                    <a href="pages/Register/registerSection.php" data-offset="100" class="btn btn-info wow fadeInLeft registerbtn" data-wow-delay="0.2s">Register</a>
                    <a href="#classes" data-offset="100" class="btn btn-warning wow " data-wow-delay="0.2s">Classes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Content load here -->
      <div id="post-placeholder"></div>

      <!--Footer placeholder-->
      <div id="footer-placeholder"></div>
  </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script>
  // Initialize the plugin
  const demo = document.querySelector('#demo');
  const ps = new PerfectScrollbar(demo);

  // Handle size change
  document.querySelector('#resize').addEventListener('click', () => {

    // Get updated values
    width = document.querySelector('#width').value;
    height = document.querySelector('#height').value;

    // Set demo sizes
    demo.style.width = `${width}px`;
    demo.style.height = `${height}px`;

    // Update Perfect Scrollbar
    ps.update();
  });
</script>
</body>

</html>
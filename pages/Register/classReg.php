<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>Student Register</title>
    <!-- Font Awesome -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card card-registration ">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Class registration form</h3>

                                <form action="../../assets/registration.php" method="post">

                                    <div class="col-md-12 mb-2">

                                        <div class="col-md-6 mb-4">
                                            <h6 class="mb-0 me-4">Grade :
                                                <select class="select" name="grade">
                                                    <option value="1">Grade 1</option>
                                                    <option value="2">Grade 2</option>
                                                    <option value="3">Grade 3</option>
                                                    <option value="4">Grade 4</option>
                                                    <option value="2">Grade 5</option>
                                                    <option value="3">Grade 6</option>
                                                    <option value="4">Grade 7</option>
                                                    <option value="2">Grade 8</option>
                                                    <option value="3">Grade 9</option>
                                                    <option value="4">Grade 10</option>
                                                    <option value="2">Grade 11</option>
                                                    <option value="3">Grade 12</option>
                                                    <option value="4">Grade 13</option>
                                                </select>
                                            </h6>
                                        </div>

                                    <div class="col-md-12 mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m" name="subName"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Subject Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m" name="subDesc"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Subject Descrition</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                        <input type="submit" name="subregister" class="btn btn-warning btn-lg ms-2"
                                            value="Submit Form" />
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!--JQuery-->
  <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>

  <!--Bootstrap tooltips-->
  <script type="text/javascript" src="../../js/popper.min.js"></script>

  <!--Bootstrap core JavaScript-->
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

  <!--MDB core JavaScript-->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyShack</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Breadcrumbs & Search -->
    <div class="container-fluid  ">
        <div class="card mb-4 wow fadeIn grey lighten-4">
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-1 mb-sm-0 ">
                    <a href="../index.php">Home</a>
                    <span>/</span>
                    <span>Register</span>
                </h4>


            </div>
        </div>
    </div>

    <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Register a Class</h3>

                <form action="../../utils/registration.php" method="post">
                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <input disabled type="text" id="form3Example1m" name="subName" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m"></label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1m" name="subDesc" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m">Subject Descrition</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end pt-3">
                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                            <input type="submit" name="subregister" class="btn btn-info btn-lg ms-2" value="Submit Form" />
                        </div>
                </form>

            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
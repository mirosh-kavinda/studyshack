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
                    <a href="../../index.php">Home</a>
                    <span>/</span>
                    <span>Register</span>
                </h4>


            </div>
        </div>
    </div>
    <!-- /.Breadcrumbs & Search -->

    <form action="../index.php" method="post" class="mb-5 mt-5" enctype="multipart/form-data">

        <div class="col-md-12 mb-2">

            <div class="form-outline">

                <input type="text" id="form3Example1m" name="sname" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example1m">Name</label>
            </div>
        </div>
        <div class="col-md-12 mb-2">

            <div class="form-outline">

                <input type="text" id="form3Example2m" name="semail" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example2m">Email</label>
            </div>
        </div>

        <div class="col-md-12 mb-2">
            <div class="form-outline">

                <input type="text" id="form3Example1m" name="stelephone" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example1m">Telephone</label>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <div class="form-outline">

                <input type="text" id="form3Example1m" name="swhatsapp" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example1m">Whatsapp</label>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <div class="form-outline">
                <input type="text" id="form3Example8" class="form-control form-control-lg" name="saddress" />
                <label class="form-label" for="form3Example8">Address</label>
            </div>
        </div>
        <div class="col-md-12 mb-2 ">
            <div class="form-outline">
                <input type="text" id="form3Example90" name="spassword" class="form-control form-control-lg" />
                <label class="form-label" for="form3Example90">Password</label>
            </div>
        </div>

        <div class="col-md-12 mb-2">

            <h6 class="mb-0 ">Gender: </h6>

            <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" name="sgender" id="femaleGender" value='female' />
                <label class="form-check-label" for="femaleGender">Female</label>
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" name="sgender" id="maleGender" value='male' />
                <label class="form-check-label" for="maleGender">Male</label>
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" name="sgender" id="otherGender" value='other' />
                <label class="form-check-label" for="otherGender">Other</label>
            </div>

        </div>

        <div class="col-md-12 mb-2 mt-3">
            <h6 class="mb-0 ">Grade :
                <select class="select" name="sgrade">
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
        <div class="row" id="insert_img"    >
            <div class="col-sm-3">
                <p class="mb-0">Add Profile Image : </p>
            </div>
            <div class="col-sm-9">
                <label for="pdfFile">Select img File with minimum 4mb:</label>
                <input type="file" name="pdfFile" class="form-control-file" id="pdfFile">
            </div>
        </div>
        <div class="d-flex justify-content-end pt-3">
            <button type="reset" class="btn btn-light btn-lg">Reset</button>
            <input type="submit" name="sregister" class="btn btn-info btn-lg ms-3" value="Submit" />

        </div>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
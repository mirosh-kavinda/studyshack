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
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
    &nbsp&nbsp&nbsp&nbsp <a class="navbar-brand" href="../../index.php">
      <i class="fa fa-arrow-circle-left"></i>&nbspBack
    </a>
  </nav>

  <div class="card-body p-md-5 text-black">

    <h3 class="mb-1 text-uppercase">Join With Us</h3>
    <!-- Tabs navs -->
    <ul class="nav nav-tabs nav-fill mb-1" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">As a Student</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">As a Teacher</a>
      </li>
    </ul>
    <div class="tab-content" id="ex2-content">
      <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
        <?php include("studReg.php") ?>
      </div>
      <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
        <?php include("teachReg.php") ?>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
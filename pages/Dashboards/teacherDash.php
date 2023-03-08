<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
  <style type="text/stylesheet">
    body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

</style>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="../../index.php">
        <strong>StudyShack</strong>
      </a>

      <div class="collapse row navbar-collapse" id="navbarSupportedContent">
        <!--Links-->
        <ul class="navbar-nav  smooth-scroll d-flex flex-row-reverse">
          <li class="nav-item">
          <li value="nav-item">
            <a class="nav-link" logout="#Login-User">
              Logout
            </a>
        </ul>

      </div>
    </div>
  </nav>


  <div class="row d-flex justify-content-center align-items-center h-100 ">
    <div class="card p-4">

      <h3 class="mb-5 p-3 text-uppercase">Teacher Dashboard</h3>
      <div class="row w-100">

        <div class="col-2">
          <!-- Tab navs -->
          <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-tabs-home-tab" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true">Recent</a>
            <a class="nav-link" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false">Materials</a>
            <a class="nav-link" id="v-tabs-messages-tab" data-mdb-toggle="tab" href="#v-tabs-messages" role="tab" aria-controls="v-tabs-messages" aria-selected="false">Profile</a>
          </div>
          <!-- Tab navs -->
        </div>

        <div class="col-9">
          <!-- Tab content -->
          <div class="tab-content" id="v-tabs-tabContent">
            <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
              Home content
            </div>
            <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
              <?php
              include("../../components/materialSection.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
              Messages content
            </div>
          </div>
          <!-- Tab content -->
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>



<h4 class="mb-5 p-3 text-uppercase">Welcome Admin :  <?php echo $_SESSION['login_user'] ?> !</h4>
<div class="card ">
  <div class="container  mb-5 ">
    <div class="row">
      <div class="col">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill " id="ex1" role="tablist">
          <li class="nav-item" role="presentation">

            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#v-tab1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#v-tab2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Class View</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tab3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Teacher View</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tab5" role="tab" aria-controls="ex2-tabs-5" aria-selected="false">Student View</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-4" data-mdb-toggle="tab" href="#v-tab4" role="tab" aria-controls="ex2-tabs-4" aria-selected="false">Profile</a>
          </li>
        </ul>

      </div>
    </div>

    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      // loading html element to the  main layout
      $(function() {
        $("#tab1").load("overviewPage.php");
      });

      $(function() {
        $("#tab2").load("classView.php");
      });

      $(function() {
        $("#tab3").load("userProfile.php");
      });
      $(function() {
        $("#tab4").load("teacherView.php");
      });
      $(function() {
        $("#tab5").load("studentView.php");
      });
    </script>

    <div class="col-12 mt-4 ">

      <div class="tab-content" id="v-tabs-tabContent">
        <div class="tab-pane fade" id="v-tab2" role="tabpanel" aria-labelledby="ex2-tabs-2">
          <div id="tab2"></div>
        </div>
        <div class="tab-pane fade" id="v-tab4" role="tabpanel" aria-labelledby="ex2-tabs-4">
          <div id="tab3"></div>
        </div>
        <div class="tab-pane fade show active" id="v-tab1" role="tabpanel" aria-labelledby="ex2-tabs-1">
          <div id="tab1"></div>
        </div>
        <div class="tab-pane fade" id="v-tab3" role="tabpanel" aria-labelledby="ex2-tabs-3">
          <div id="tab4"></div>
        </div>

        <div class="tab-pane fade" id="v-tab5" role="tabpanel" aria-labelledby="ex2-tabs-5">
          <h3 class="text-center">Payement </h3>
          <div id="tab5"></div>
        </div>
      </div>

    </div>
    <!-- Tab content -->
  </div>
</div>
</div>
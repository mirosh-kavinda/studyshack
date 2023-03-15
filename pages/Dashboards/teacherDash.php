

<div class="card ">

  <h4 class="mb-5 p-3 text-uppercase">Welcome Teacher !</h4>

  <div class="container px-1">
    <div class="row">
      <div class="col">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Manage Materials</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tabs-messages" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Add Materials</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-4" data-mdb-toggle="tab" href="#v-tabs4" role="tab" aria-controls="ex2-tabs-4" aria-selected="false">Profile</a>
          </li>
        </ul>
        <!-- Tabs navs -->
      </div>
    </div>

    <div class="col-12">
      <!-- Tab content -->
      <div class="tab-content" id="v-tabs-tabContent">

        <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
          // loading html element to the  main layout
          $(function() {
            $("#tab1").load("overviewPage.php");
          });

          $(function() {
            $("#tab2").load("materialSection.php");
          });
          $(function() {
            $("#tab3").load("addMaterial.php");
          });
          $(function() {
            $("#tab4").load("userProfile.php");
          });
        </script>


        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
          <div id="tab1"></div>
        </div>
        <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
          <div id="tab2"></div>
        </div>
        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
          <div id="tab3"></div>
        </div>
        <div class="tab-pane fade" id="v-tabs4" role="tabpanel" aria-labelledby="v-tabs-tabs4">
          <div id="tab4"></div>
        </div>
        <!-- Tab content -->
      </div>
    </div>
  </div>
</div>
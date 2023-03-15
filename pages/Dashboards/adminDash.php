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
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tab3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Add Teacher</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-4" data-mdb-toggle="tab" href="#v-tab4" role="tab" aria-controls="ex2-tabs-4" aria-selected="false">Profile</a>
          </li>
        </ul>

      </div>
    </div>


    <div class="col-12 mt-4 ">

      <div class="tab-content" id="v-tabs-tabContent">
        <div class="tab-pane fade" id="v-tab2" role="tabpanel" aria-labelledby="ex2-tabs-2">
          <?php
          include "classSection.php"; ?>
        </div>
        <div class="tab-pane fade" id="v-tab4" role="tabpanel" aria-labelledby="ex2-tabs-4">
          <?php
          include "userProfile.php"; ?>
        </div>
        <div class="tab-pane fade show active" id="v-tab1" role="tabpanel" aria-labelledby="ex2-tabs-1">
          <?php include "overviewPage.php" ?>
        </div>
        <div class="tab-pane fade" id="v-tab3" role="tabpanel" aria-labelledby="ex2-tabs-3">
          <?php
          include "../Register/teachReg.php"; ?>
        </div>


      </div>

    </div>
    <!-- Tab content -->
  </div>
</div>
</div>
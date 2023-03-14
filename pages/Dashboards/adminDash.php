<div class="card ">
  <div class="container  mb-5 ">
    <div class="row">
      <div class="col">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill " id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="ex2-tabs-2" aria-selected="true">Stakeholder view</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#v-tabs-profile-tab" role="tab" aria-controls="ex2-tabs-1" aria-selected="false">Class View</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tabs-messages-tab" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Profile</a>
          </li>
        </ul>

      </div>
    </div>


    <div class="col-12 mt-4 ">
      <!-- Tab content -->
      <div class="tab-content" id="v-tabs-tabContent">
        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="ex2-tabs-2">
          <?php include "overviewPage.php" ?>
        </div>
        <div class="tab-pane fade" id="v-tabs-profile-tab" role="tabpanel" aria-labelledby="ex2-tabs-1">
          <?php
          include "classView.php"; ?>
        </div>
        <div class="tab-pane fade" id="v-tabs-messages-tab" role="tabpanel" aria-labelledby="ex2-tabs-3">
          <?php
          include "userProfile.php"; ?>
        </div>
      </div>
      <!-- Tab content -->
    </div>
  </div>
</div>
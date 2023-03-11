
<div class="card ">

  <h4 class="mb-5 p-3 text-uppercase">Logged AS <?php echo $_SESSION['login_user']; ?>(Admin)</h4>

  <div class="container px-1">
    <div class="row">
      <div class="col">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill " id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#v-tabs-registerClass" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Register A Class</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tabs-updateClass" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Update A Class</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Profile</a>
          </li>
        </ul>
        <!-- Tabs navs -->
      </div>
    </div>

    <div class="col-12">
      <!-- Tab content -->
      <div class="tab-content" id="v-tabs-tabContent">
        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
          <?php include "overviewPage.php" ?>
        </div>
        <div class="tab-pane fade" id="v-tabs-registerClass" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
          <?php
          include "../Register/classReg.php"; ?>
        </div>
        <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
          <?php
          include("userProfile.php"); ?>
        </div>
      </div>
      <!-- Tab content -->
    </div>
  </div>
</div>
</div>
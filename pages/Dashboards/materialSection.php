
  <?php
  include("../../utils/db_connect.php");

  $query = $conn->prepare("SELECT * FROM study_material ORDER BY m_id ASC");
  $query->execute();
  $result = $query->get_result();
  if ($_SESSION['user_type'] == 2) {
    echo '<style>#edit_btn{display:block !important;}</style>';
  } else {
    echo '<style>#signout{display:none !important;}</style>';
  }

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {
  ?>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["m_topic"]; ?></h5>
          <p class="card-text">fjasjdflsdfddads</p>
          <div class="row ">
            <a href="<?php echo $row["m_link"]; ?>" type="button" class=" col-3 btn btn-primary">Download</a>&nbsp&nbsp&nbsp
            <button type="button" class="btn btn-primary col-3 " id="edit_btn" hidden="true">Edit</button>
          </div>

        </div>
      </div>
  <?php
    }
  }
  ?>
  </div>
  </div>

<?php
include("../../utils/db_connect.php");

$query = $conn->prepare("SELECT * FROM study_material ORDER BY m_id ASC");
$query->execute();
$result = $query->get_result();
if ($_SESSION['user_type'] == "teacher") {
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
          <a href="<?php echo $row["m_link"]; ?>" type="button" class=" col-1 btn btn-primary"> <i class="fas fa-download"></i></a>&nbsp&nbsp&nbsp
          <button type="button" class="btn btn-primary col-1 " id="edit_btn" hidden="true"> <i class="fas fa-edit"></i></button>
        </div>

      </div>
    </div>
<?php
  }
}
?>
</div>
</div>


<?php
include("../../utils/db_connect.php");
include("../../utils/functions.php");
session_start();


switch ($_SESSION['user_type']) {
  case 'teacher':
    echo '<style>#edit_btn{display:block !important;}</style>';
    // $sql = "SELECT * FROM study_material S, teacher St WHERE S.m_grade='St.grade' ";
    break;
  case 'student':
    echo '<style>#signout{display:none !important;}</style>';
    $sql = "SELECT * FROM study_material  WHERE m_grade=? ";
    break;
  default:
    echo '<style>#signout{display:none !important;}</style>';
    break;
}

?>

<div class="container">

  <div class="row  row-cols-md-7 g-4">

    <?php
    $data = getUser($conn, $_SESSION['user_type'], $_SESSION['user_email']);

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $data['grade']);
    $stmt->execute();
    $stmt_result = $stmt->get_result();


    if ($stmt_result->num_rows > 0) {
      while ($row = $stmt_result->fetch_assoc()) {
    ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["m_topic"]; ?></h5>
            <p class="card-text"> Grade : <?php echo $row["m_grade"]; ?></p>
            <div class="row ">
              <a href="<?php echo $row["m_link"]; ?>" type="button" class=" col-1 btn btn-primary"> <i class="fas fa-download"></i></a>&nbsp&nbsp&nbsp
              <button type="button" class="btn btn-primary col-1 " id="edit_btn" hidden="true"> <i class="fas fa-edit"></i></button>&nbsp&nbsp&nbsp
              <button type="button" class="btn btn-primary col-1 " id="edit_btn" hidden="true"> <i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp&nbsp&nbsp
            </div>

          </div>
        </div>

    <?php

      }
    }
    ?>

  </div>
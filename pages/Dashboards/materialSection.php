<?php
include("../../utils/db_connect.php");
include("../../utils/functions.php");



switch ($_SESSION['user_type']) {
  case 'teacher':
    echo '<style>#edit_btn{display:block !important;}</style>';
    // $sql = "SELECT * FROM study_material S, teacher St WHERE S.m_grade='St.grade' ";
    break;
  case 'student':
    echo '<style>#signout{display:none !important;}</style>';
    $sql = "SELECT m_category FROM study_material  WHERE m_grade=? ";

    break;
  default:
    echo '<style>#signout{display:none !important;}</style>';
    break;
}

?>
<div class="container">
  <div class="row  row-cols-md-7 g-4">
    <div class="card">


      <?php
      $data = getUser($conn, $_SESSION['user_type'], $_SESSION['user_email']);
      $grade=$data['grade'];
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $data['grade']);
      $stmt->execute();
      $stmt_result = $stmt->get_result();

      ?>


      <div class="card-body">
        <h5 class="card-title">Grade :<?php echo $data["grade"]; ?></h5>
        <?php
        if ($stmt_result->num_rows > 0) {
          while ($row = $stmt_result->fetch_assoc()) {
            $category = $row['m_category'];
        ?>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["m_category"]; ?></h5>


                <?php
                $sql2 = "SELECT * FROM study_material  WHERE m_category=? AND m_grade=?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("ss", $category,$grade);
                $stmt->execute();
                $stmt_result = $stmt->get_result();
                if ($stmt_result->num_rows > 0) {
                  while ($row1 = $stmt_result->fetch_assoc()) {

                ?>

                     <div class="row">
                     <div class="card-body">
                      <p class="card-text col"> <?php echo $row1["m_topic"]; ?></p>
                      <div class="col ">
                        <a href="<?php echo $row1["m_link"]; ?>" type="button" class=" col-1 btn btn-primary"> <i class="fas fa-download"></i></a>
                        <button type="button" class="btn btn-primary col-1 " id="edit_btn" hidden="true"> <i class="fas fa-edit"></i></button>&nbsp&nbsp&nbsp
                        <button type="button" class="btn btn-primary col-1 " id="edit_btn" hidden="true"> <i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp&nbsp&nbsp
                      </div>


                    </div>

                  <?php } ?>
              </div>


        <?php
                }
              }
            }
        ?>

            </div>

      </div>
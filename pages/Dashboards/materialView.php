<?php
include("../../utils/db_connect.php");
include("../../utils/functions.php");


switch ($_SESSION['user_type']) {
  case 'student':

    echo '<style>#signout{display:none !important;}</style>';
    $sql = "SELECT m_category FROM study_material  WHERE m_grade=? ";
    $data = getUser($conn, $_SESSION['user_type'], $_SESSION['user_email']);
    $grade = $data['grade'];
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $grade);
    $stmt->execute();
    $stmt_result = $stmt->get_result();


?>
    <div class="container">
      <div class="row  row-cols-md-7 g-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo "Grade :" . $data["grade"]; ?></h5>
            <?php
            if ($stmt_result->num_rows > 0) {
              while ($row = $stmt_result->fetch_assoc()) {
                $category = $row['m_category'];
                $grade=$data['grade'];
            ?>
                <div class="card">
                  <div class="card-body">
                    <table>
                      
                    <h5 class="card-title"><?php echo $row["m_category"] ?></h5>


                    <?php
                    $sql2 = "SELECT * FROM study_material  WHERE m_category=? AND m_grade=?";
                    $stmt = $conn->prepare($sql2);
                    $stmt->bind_param("ss", $category, $grade);
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                    if ($stmt_result->num_rows > 0) {
                      while ($row1 = $stmt_result->fetch_assoc()) {
                        $filedir = "../../uploads/" . $row1['filename'];
                        $mid = $row1['m_id'];
                    ?>
                    
                          <div class="card-body">
                          <div class="row">
                            <p class="card-text col"> <?php echo $row1["m_topic"]; ?></p>
                            <a href="<?php echo $filedir ?>" class="btn btn-info col-1 "> <i class="fas fa-download"></i></a>&nbsp&nbsp&nbsp
                          </div>
                          </div>
                        <?php } ?>
                    
                  <?php
                    }
                  }
                }
                  ?>

                  </div>

                </div>

                <?php

                break;
              case 'teacher':
                echo '<style>#edit_btn{display:block !important;}</style>';
                $sql = "SELECT * FROM study_material ORDER BY m_grade ";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $stmt_result = $stmt->get_result();

                if ($stmt_result->num_rows > 0) {
                  while ($row = $stmt_result->fetch_assoc()) {
                    $filedir = "../../uploads/" . $row['filename'];
                    $mid = $row['m_id'];
                ?>
                    <table class="table table-hover table-striped col-md-12">
                      <tr>
                        <thead class="blue-grey lighten-4">
                          <th>#</th>
                          <th>Material </th>
                          <th>Subject</th>
                          <th>Grade</th>
                          <th>Actions</th>
                        </thead>
                      </tr>
                      <tr>
                        <td class="col-2"><?php echo $row["m_id"] ?></td>
                        <td class="col-2"><?php echo $row["m_topic"] ?></td>
                        <td class="col-2"><?php echo $row["m_category"] ?></td>
                        <td class="col-2"><?php echo $row["m_grade"] ?></td>


                        <td class=" col-9">
                          <a href="<?php echo $filedir ?>" class="btn   "> <i class="fas fa-download"></i></a>&nbsp&nbsp&nbsp
                          <a href=" <?php echo '../../utils/delete.php?mid=' . $mid . '&directory=' . $filedir ?> " title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                        </td>


                      </tr>
                    </table>
                <?php
                  }
                }
                ?>


            <?php


                break;
              default:

                break;
            }
            ?>
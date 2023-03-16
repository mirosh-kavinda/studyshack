<?php
// include database 
include "db_connect.php";


if (isset($_POST['input'])) {

  $input = $_POST['input'];
  $query = "SELECT * FROM class WHERE c_name LIKE '{$input}%' OR c_category LIKE '{$input}%' ";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
?>

    <div class="card-group row mx-4 " style="display: flex;">

      <?php
      while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <script>
          function clearSearch() {
            document.getElementById('live_search').value = '';
            $("#searchresult").css("display", "none");
            $("#post-placeholder").css("display", "block");
          }
        </script>

        <div class="col ">
          <div class="card">
            <img src="<?php echo $row['c_scr']; ?>" class="card-img-top" height="200px" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title"> <?php echo $row['c_name']; ?></h5>
              <p class="card-text">
                <?php echo $row['c_desc']; ?>
              </p>
              <a href="pages/classView.php?id=<?php echo $row['c_id']; ?>" class="black-text d-flex flex-row-reverse">View More</a>
            </div>
          </div>
        </div>
      <?php

      }
      ?>
    </div>
  <?php
  } else {
  ?>
    <div class="  container  ">
      <h5>No Result Found </h5>
      <h5><strong>Try again with Recent serches</strong></h5>
      <ul style="border:10px solid black ;">
        <?php
        $query = $conn->prepare("SELECT * FROM class ORDER BY c_id ASC");
        $query->execute();
        $result = $query->get_result();

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_array($result)) {

        ?>
            <li>
              <hr>
              <p><?php echo $row['c_name']; ?></p>
            </li>
        <?php
          }
        }
        ?>
      </ul>

    </div>

<?php
  }
}

?>
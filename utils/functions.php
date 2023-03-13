
<?php


//This is for get next incrementing id for pariticular table
function getNextIncrement($table, $db, $con)
{

  $next_increment = 1;
  $table = mysqli_escape_string($con, $table);
  $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$db' AND TABLE_NAME = '$table'";
  $results = $con->query($sql);
  while ($row = $results->fetch_assoc()) {
    $next_increment = $row['AUTO_INCREMENT'];
  }
  return $next_increment;
}


function getUser($conn, $sql, $email)
{
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) {
    return $stmt_result->fetch_assoc();
  } else {
    return false;
  }
}

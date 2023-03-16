
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


function getUser($conn, $type, $email)
{

	$sql = "SELECT * FROM $type WHERE email=?";

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


function classExistance($conn, $cname)
{
	$sql = "SELECT * FROM class WHERE c_name=?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $cname);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if ($stmt_result->num_rows > 0) {
		return $stmt_result->fetch_assoc();
	} else {
		return false;
	}
}


function CreateOverviewTable($usertype, $conn)
{
	// Attempt select query execution
	$sql = "SELECT * FROM $usertype";
	if ($result = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($result) > 0) {
			echo '<table class="table table-hover table-striped">';
			echo '<thead class="blue-grey lighten-4">';
			echo "<tr>";
			echo "<th>#</th>";
			echo "<th>Name</th>";
			echo "<th>Address</th>";
			echo "<th>Email</th>";
			echo "<th>Regdate</th>";
			echo "<th>Telephone</th>";
			echo "<th>Whatsapp</th>";
			echo "<th>Action</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['u_id'] . "</td>";
				echo "<td>" . $row['uname'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['reg_date'] . "</td>";
				echo "<td>" . $row['tele'] . "</td>";
				echo "<td>" . $row['whatsapp'] . "</td>";
				echo "<td>";
				echo '<a href="update.php?id=' . $row['u_id'] . '" class="mr-3 p-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
				echo '<a href="delete.php?id=' . $row['u_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
				echo "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			// Free result set
			mysqli_free_result($result);
		} else {
			echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
		}
	} else {
		echo "Oops! Something went wrong. Please try again later.";
	}
}

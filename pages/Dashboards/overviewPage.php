<?php

require_once "../../utils/db_connect.php";
require_once "../../utils/functions.php";

// $sql = "SELECT (SELECT COUNT(s_id) from student) as count1 ,
// 	(SELECT count(t_id) from teacher) as count2 , (SELECT COUNT(s_id) from staff) as count3 ";
$regstudents = 0;
$sql = "SELECT * FROM student  ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$regstudents++;
	}
}

$regteachers = 0;
$sql = "SELECT * FROM teacher  ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
	$regteachers++;
}
$payments = 0;
$sql = "SELECT * FROM payment  ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
	$payments++;
}
$classes = 0;
$sql = "SELECT * FROM class  ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
	$classes++;
}
if ($_SESSION['user_type'] != 'staff') {
	echo '<style>#admin-btns,#table1,#table2,#proj{display:none !important;}</style>';
	echo '<style>#proj{display:block !important;}</style>';
} else {
	echo '<style>#admin-btns,#table1,#table2,{display:block !important;}</style>';
	echo '<style>#proj{display:none !important;}</style>';
}

?>

<!-- Charts -->
<div class="row wow fadeIn mt-4" id="admin-btns">

	<div class="col-md-12 mb-12" align="center">

		<!-- Action buttons -->

		<button type="button" class="btn btn-dark btn-square-lg m-5 p-5">
			<i class="fas fa-user "></i>
			<span>Registered Students <h3 class=""><?php echo $regstudents; ?></h3> </span>
		</button>
		<button type="button" class="btn btn-dark btn-square-lg m-5 p-5">
			<i class="fas fa-user pr-1"></i>
			<span>Registered Teachers<h3 class=""><?php echo $regteachers; ?></h3> </span>
		</button>
		<button type="button" class="btn btn-dark btn-square-lg m-5 p-5">
			<i class="fas fa-money-check-edit-alt"></i>
			<span> Payments<h3 class=""><?php echo $payments; ?></h3> </span>
		</button>
		<button type="button" class="btn btn-dark btn-square-lg m-5 p-5">
			<i class="fa fa-address-card-o" aria-hidden="true"></i>

			<span> Clasess<h3 class=""><?php echo $classes; ?></h3> </span>
		</button>


	</div>


</div>

<!-- Tables -->
<div class="row wow fadeIn" id="proj">

	<div class="card-body">
		<p class="mb-4"><span class="text font-italic me-1">Classes In Progress</span>
		</p>
		<p class="mb-1" style="font-size: .77rem;">Web Design</p>
		<div class="progress rounded" style="height: 5px;">
			<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
		<div class="progress rounded" style="height: 5px;">
			<div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
		<div class="progress rounded" style="height: 5px;">
			<div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
		<div class="progress rounded" style="height: 5px;">
			<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
		<div class="progress rounded mb-2" style="height: 5px;">
			<div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
	<div class="card-body">
		<p class="mb-4"><span class="text font-italic me-1">Marks</span>
			<?php

			$sql = "SELECT * FROM student_sub";
			if ($result = mysqli_query($conn, $sql)) {
				if (mysqli_num_rows($result) > 0) {
					echo '<table class="table table-hover table-striped">';
					echo '<thead class="blue-grey lighten-4">';
					echo "<tr>";
					echo "<th>#</th>";
					echo "<th>Class Name</th>";
					echo "<th>Marks</th>";
					echo "<th>Student</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>" . $row['l_id'] . "</td>";
						echo "<td>" . $row['c_name'] . "</td>";
						echo "<td>" . $row['umarks'] . "</td>";
						echo "<td>" . $row['uname'] . "</td>";
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
				echo "Oops! Something went wrong. Please try again later.";
			}
			?>
	</div>
</div>


</div>
<!-- /.Tables -->
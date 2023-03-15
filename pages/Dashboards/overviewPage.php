<?php
session_start();
require_once "../../utils/db_connect.php";

// $sql = "SELECT (SELECT COUNT(s_id) from student) as count1 ,
// 	(SELECT count(t_id) from teacher) as count2 , (SELECT COUNT(s_id) from staff) as count3 ";

$regusers = 6;
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
// $regusers =$row[0];

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

	<div class="col-md-12 mb-4">

		<!-- Action buttons -->
		<button type="button" class="btn btn-md btn-indigo mb-4">
			<i class="fas fa-user pr-1"></i>
			<span>Registered users</span>
		</button>
		<span class="counter counter-lg"><?php echo $regusers; ?></span>

		<button type="button" class="btn btn-md btn-cyan mb-4">
			<i class="fas fa-envelope pr-1"></i>
			<span>Messages</span>
		</button>
		<span class="counter counter-lg">0</span>

		<button type="button" class="btn btn-md btn-unique mb-4" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
			<i class="fas fa-file-alt pr-1"></i>
			<span>Payments</span>
		</button>
		<span class="counter counter-lg">1</span>
		<!-- /.Action buttons -->
	</div>


</div>

<!-- Tables -->
<div class="row wow fadeIn" id="proj">

	<div class="card-body">
		<p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
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
</div>
<!-- Table #1 -->
<div class="col-md-12 mb-4" id="table1">
	<div class="card">
		<h5 class="text-center mt-3">Student Details</h5>
		<hr>
		<div class="card-body">

			<?php
			include "paymentView.php";
			// Attempt select query execution
			$sql = "SELECT * FROM student";
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
						echo "<td>" . $row['s_id'] . "</td>";
						echo "<td>" . $row['uname'] . "</td>";
						echo "<td>" . $row['address'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['reg_date'] . "</td>";
						echo "<td>" . $row['tele'] . "</td>";
						echo "<td>" . $row['whatsapp'] . "</td>";
						echo "<td>";

						echo '<a href="update.php?id=' . $row['s_id'] . '" class="mr-3 p-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
						echo '<a href="delete.php?id=' . $row['s_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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

			// Close connection

			?>
		</div>
	</div>
</div>
<!-- Table #1 -->
<div class="col-md-12 mb-4" id="table2">
	<div class="card">
		<h5 class="text-center mt-3">Teachers Details</h5>
		<hr>
		<div class="card-body">

			<?php


			// Attempt select query execution
			$sql = "SELECT * FROM teacher";
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
						echo "<td>" . $row['t_id'] . "</td>";
						echo "<td>" . $row['uname'] . "</td>";
						echo "<td>" . $row['address'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['reg_date'] . "</td>";
						echo "<td>" . $row['tele'] . "</td>";
						echo "<td>" . $row['whatsapp'] . "</td>";
						echo "<td>";
						echo '<a href="update.php?id=' . $row['t_id'] . '" class="mr-3 p-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
						echo '<a href="delete.php?id=' . $row['t_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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


			?>
		</div>
	</div>
</div>

</div>
<!-- /.Tables -->
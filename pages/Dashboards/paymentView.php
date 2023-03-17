<?php
include "../../utils/db_connect.php";
include "../../utils/functions.php";
// Attempt select query execution
$sql = "SELECT * FROM payment";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-hover table-striped">';
        echo '<thead class="blue-grey lighten-4">';
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Email</th>";
        echo "<th>Payment Fee</th>";
        echo "<th>Regdate</th>";
        echo "<th>Class ID</th>";
        echo "<th>Approve</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['p_id'] . "</td>";
            echo "<td>" . $row['s_email'] . "</td>";
            echo "<td>" . $row['p_fee'] . "</td>";
            echo "<td>" . $row['p_date'] . "</td>";
            echo "<td>" . $row['class_id'] . "</td>";
            echo "<td>";
            echo '<a href="update.php?id=' . $row['s_email'] . '" class="mr-3 p-3 btn btn-info" title="Update Record" data-toggle="tooltip"><span class="fa-solid fa-check"></span> Add to class</a>';
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

<div class="col-md-12 mb-4 mt-5" id="table1">
    <div class="card">
        <h5 class="text-center mt-3">Student Details</h5>
        <hr>
        <div class="card-body">
            <?php

            CreateOverviewTable("student", $conn);
            ?>
        </div>
    </div>
</div>
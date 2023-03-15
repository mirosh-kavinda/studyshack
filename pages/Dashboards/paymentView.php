<!-- Modal -->
<div class="modal modal-fullscreen fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php

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
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
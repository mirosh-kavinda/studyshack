<div class="col-xl-12">

    <div class="col-md-12">
        <div class="card">
            <h5 class="text-center mt-3">Class Details</h5>
            <hr>
            <div class="card-body">

                <?php
                // Include config file
                require_once "../../utils/db_connect.php";

                $sql = "SELECT * FROM `teacher`";
                $all_teachers = mysqli_query($conn, $sql);
                // Attempt select query execution
                $sql = "SELECT * FROM class";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {

                        echo '<table class="table table-hover table-striped">';
                        echo '<thead class="blue-grey lighten-4">';
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Class Name</th>";
                        echo "<th>Class Description</th>";
                        echo "<th>Teacher</th>";
                        echo "<th>Duration</th>";
                        echo "<th>Class Fee</th>";
                        echo "<th>Class Category</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['c_id'] . "</td>";
                            echo "<td>" . $row['c_name'] . "</td>";
                            echo "<td>" . $row['c_desc'] . "</td>";
                            echo "<td>" . $row['c_cordinator'] . "</td>";
                            echo "<td>" . $row['c_duration'] . "</td>";
                            echo "<td>" . $row['c_fee'] . "</td>";
                            echo "<td>" . $row['c_category'] . "</td>";
                            echo "<td>";

                            echo '<a href="update.php?id=' . $row['c_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="delete.php?id=' . $row['c_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
    <div class="card-body  text-black">
        <h3 class="text-uppercase">Class Registration</h3>

        <form action="../../utils/adminFeature.php" method="post">

            <div class="col-md-12 mb-2">
                <div class="col-md-12 mb-2">
                    <div class="form-outline">
                        <input required type="text" id="class_name" name="c_name" class="form-control form-control-lg" />
                        <label class="form-label" for="class_name">Class Name</label>
                    </div>
                </div>

                <div class="col-md-12 mb-2">
                    <div class="form-outline">
                        <input required type="text" id="clas_description" name="c_desc" class="form-control form-control-lg" />
                        <label class="form-label" for="clas_description">Class Description</label>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-outline">
                        <input required type="text" id="class_fee" name="c_fee" class="form-control form-control-lg" />
                        <label class="form-label" for="class_fee">Class Fee</label>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-outline">
                        <input required type="text" id="class_duration" name="c_duration" class="form-control form-control-lg" />
                        <label class="form-label" for="class_duration">Class Duration</label>
                    </div>
                </div>


                <div class="col-md-12 mb-2">
                    <div class="form-outline">
                        <input required type="text" id="class_category" name="c_category" class="form-control form-control-lg" />
                        <label class="form-label" for="class_category">Class Category</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h6 class="mb-0 me-2">Teacher :
                        <select name="c_teacher">
                            <?php

                            while ($teacher = mysqli_fetch_array($all_teachers, MYSQLI_ASSOC)) {
                            ?>
                                <option value="<?php echo $teacher["u_id"]; ?>">
                                    <?php echo $teacher["uname"];
                                    // To show the category name to the user
                                    ?>
                                </option>
                            <?php
                            }

                            ?>
                        </select>
                    </h6>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h6 class="mb-0 me-2">Grade :
                    <select class="select" name="grade">
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                        <option value="Grade 13">Grade 13</option>
                        <option value="After A/L">After A/L</option>
                    </select>
                </h6>
            </div>

            <div class="d-flex justify-content-end pt-3">
                <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                <input required type="submit" name="classreg" class="btn btn-info btn-lg ms-2" value="Submit Form" />
            </div>
        </form>

    </div>
</div>
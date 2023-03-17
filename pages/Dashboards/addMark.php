<div class="card-body  text-black">
    <h3 class="text-uppercase">Add Marks</h3>

    <form action="addingmarks.php" method="post">

        <div class="col-md-6 mb-4">
            <h6 class="mb-0 me-2">student :
                <select name="c_student">
                    <?php
                    include "../../utils/db_connect.php";


                    $sql = "SELECT * FROM `student`";
                    $all_students = mysqli_query($conn, $sql);
                    while ($student = mysqli_fetch_array($all_students, MYSQLI_ASSOC)) {

                    ?>
                        <option value="<?php echo  $student["uname"]; ?>">
                            <?php echo $student["uname"];
                            // To show the category name to the user
                            ?>
                        </option>
                    <?php
                    }

                    ?>
                </select>
            </h6>
        </div>
        <div class="col-md-6 mb-4">
            <h6 class="mb-0 me-2">Class :
                <select name="c_class">
                    <?php
                    $sql = "SELECT * FROM `class`";
                    $all_students = mysqli_query($conn, $sql);
                    while ($student = mysqli_fetch_array($all_students, MYSQLI_ASSOC)) {
                    ?>
                        <option value="<?php echo $student["c_id"]; ?>">
                            <?php echo $student["c_name"];
                            // To show the category name to the user
                            ?>
                        </option>
                    <?php
                    }

                    ?>
                </select>
            </h6>
        </div>


        <div class="col-md-12 mb-2">
            <div class="form-outline">
                <input required type="text" id="clas_description" name="c_marks" class="form-control form-control-lg" />
                <label class="form-label" for="clas_description">Marks</label>
            </div>
        </div>

        <button type="reset" class="btn btn-light btn-lg">Reset all</button>
        <input type="submit" name="markReg" class="btn btn-info btn-lg ms-2" />
    </form>
</div>
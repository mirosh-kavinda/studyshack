<?php

include "../../utils/db_connect.php";
include "../../utils/functions.php";
// Attempt select query execution

?>
<div class="col-md-12 mb-4" id="table2">
    <div class="card">
        <h5 class="text-center mt-3"><?php echo $_SESSION['login_user'] ?> (Teachers) Details</h5>
        <hr>
        <div class="card-body">

            <?php
            // Attempt select query execution
            CreateOverviewTable("teacher", $conn);

            ?>
        </div>
    </div>
</div>


<form action="../../index.php" method="post" class="mb-5 " enctype="multipart/form-data">
    <div class="col-md-12 mb-2">
        <div class="form-outline">
            <input required type="text" id="form3Example1m" name="tname" class="form-control form-control-lg" />
            <label class="form-label" for="form3Example1m">Name</label>
        </div>
    </div>
    <div class="col-md-12 mb-2">
        <div class="form-outline">
            <input required type="text" id="form3Example2m" name="temail" class="form-control form-control-lg" />
            <label class="form-label" for="form3Example2m">Email</label>
        </div>
    </div>
    <div class="col-md-12 mb-2">
        <div class="form-outline">
            <input required type="text" id="form3Example1m" name="ttelephone" class="form-control form-control-lg" />
            <label class="form-label" for="form3Example1m">Telephone</label>
        </div>
    </div>
    <div class="col-md-12 mb-2">
        <div class="form-outline">
            <input required type="text" id="form3Example1m" name="twhatsapp" class="form-control form-control-lg" />
            <label class="form-label" for="form3Example1m">Whatsapp</label>
        </div>
    </div>
    <div class="form-outline mb-2">
        <input required type="text" id="form3Example8" class="form-control form-control-lg" name="taddress" />
        <label class="form-label" for="form3Example8">Address</label>
    </div>
    <div class="form-outline mb-2">
        <input required type="text" id="form3Example90" name="tpassword" class="form-control form-control-lg" />
        <label class="form-label" for="form3Example90">Password</label>
    </div>

    <div class="d-md-flex justify-content-start align-items-center mb-2 py-1">

        <h6 class="mb-0 me-4">Gender: </h6>

        <div class="form-check form-check-inline mb-0 me-4">
            <input class="form-check-input" type="radio" name="tgender" id="femaleGender" value='female' />
            <label class="form-check-label" for="femaleGender">Female</label>
        </div>

        <div class="form-check form-check-inline mb-0 me-4">
            <input class="form-check-input" type="radio" name="tgender" id="maleGender" value='male' />
            <label class="form-check-label" for="maleGender">Male</label>
        </div>

        <div class="form-check form-check-inline mb-0">
            <input class="form-check-input" type="radio" name="tgender" id="otherGender" value='other' />
            <label class="form-check-label" for="otherGender">Other</label>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12 ">
            <h6 class="mb-0 me-4">Teach: </h6>
            <table class="table align-middle">
                <tr>
                    <td> Grade 1 <input type="checkbox" name="grade[]" value="1"></td>
                    <td> Grade 2 <input type="checkbox" name="grade[]" value="2" /></td>
                    <td> Grade 3 <input type="checkbox" name="grade[]" value="3" /></td>
                    <td> Grade 4 <input type="checkbox" name="grade[]" value="4" /></td>
                </tr>
                <tr>
                    <td> Grade 5 <input type="checkbox" name="grade[]" value="5" /></td>
                    <td> Grade 6 <input type="checkbox" name="grade[]" value="6" /></td>
                    <td> Grade 7 <input type="checkbox" name="grade[]" value="7" /></td>
                    <td>Grade 8 <input type="checkbox" name="grade[]" value="8" /></td>
                </tr>
                <tr>
                    <td> Grade 9 <input type="checkbox" name="grade[]" value="9" /></td>
                    <td>Grade 10 <input type="checkbox" name="grade[]" value="10" /></td>
                    <td> Grade 11 <input type="checkbox" name="grade[]" value="11" /></td>
                    <td> Grade 12 <input type="checkbox" name="grade[]" value="12" /></td>
                </tr>
                <tr>
                    <td>Grade 13 <input type="checkbox" name="grade[]" value="13" /></td>
                </tr>
            </table>
            </select>
            <div class="row" id="insert_img" style="display:none">
                <div class="col-sm-3">
                    <p class="mb-0">Add Profile Image : </p>
                </div>
                <div class="col-sm-9">
                    <label for="pdfFile">Select img File with minimum 4mb:</label>
                    <input type="file" name="pdfFile" class="form-control-file" id="pdfFile">
                </div>
            </div>
        </div>




        <div class="d-flex justify-content-end ">
            <button type="reset" class="btn btn-light btn-lg">Reset</button>
            <input type="submit" name="tregister" class="btn btn-info btn-lg ms-2" value="Submit" />
        </div>
</form>
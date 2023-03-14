<?php

include "../../utils/db_connect.php";
include "../../utils/functions.php";

$usertype = $_SESSION['user_type'];
if ($usertype) {
    $data = getUser($conn, $_SESSION['user_type'], $_SESSION['user_email']);
} else {
    echo "error";
}


?>

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="../../img/persons/p1.jpg  " alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?php echo $_SESSION['login_user']; ?></h5>

                <p class="text-muted text-uppercase mb-2">User Level : <?php echo $_SESSION['user_type'] ?></p>
            </div>
        </div>

    </div>
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo $data['uname']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo $data['email']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo $data['whatsapp']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo $data['tele']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo $data['address']; ?></p>
                    </div>
                </div>


                <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-light btn-lg"> <i class="fas fa-edit"></i></button>
                    <input type="submit" name="sregister" class="btn btn-info btn-lg ms-3" value="Cancel" />

                </div>
            </div>
        </div>
    </div>
</div>
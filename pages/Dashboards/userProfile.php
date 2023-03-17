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
                <form action="../../utils/update.php" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-muted mb-0 inputDetails" disabled name="name" value='<?php echo $data['uname']; ?>' />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-muted mb-0 inputDetails" disabled name="email" value='<?php echo $data['email']; ?>' />

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-muted mb-0 inputDetails" disabled name="phone" value='<?php echo $data['whatsapp']; ?>' />

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mobile</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-muted mb-0 inputDetails" disabled name="tele" value='<?php echo $data['tele']; ?>' />

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-muted mb-0 inputDetails" disabled name="address" value='<?php echo $data['address']; ?>' />
                        </div>
                    </div>


                    <div class="d-flex justify-content-end pt-3">
                        <button type="reset" id="editBtn" class="btn btn-info btn-lg"> <i class="fas fa-edit"></i></button>
                        <input type="submit" id="commitEdit" disable name="editProfile" class="btn btn-lg btn-lg ms-3" placeholder="Change" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#editBtn").click(function() {
        $("#editBtn").css('background', 'grey');
        $("#commitEdit").css('background', '#54B4D3');
        $(".inputDetails").removeAttr('disabled');
    });
</script>
<?php
// fetch products from database with particular id 

include "../utils/db_connect.php";

error_reporting(E_ALL);
ini_set("display_errors", NULL);

// if ($_SESSION['login_user']) {
if ($_SESSION['user_type'] != 'student') {
    echo '<style>   #staffmember{display:block !important;}</style>';
    echo '<style>#signBack ,#applyclass{display:none !important;}</style>';
} else {
    echo '<style>#applyclass{display:block !important;}</style>';
    echo '<style>#signBack{display:none !important;}</style>';
}
// } else {
//     echo '<style>#signBack{display:block !important;}</style>';
// }



if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {

    $id =  trim($_GET["id"]);
    $stmt = $conn->prepare("SELECT * FROM class where c_id=?");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
}


if ($stmt_result->num_rows > 0) {

    $data = $stmt_result->fetch_assoc();
} else {
    die;
}


?>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <style type="text/stylesheet">
    </style>
</head>

<body>

    <!-- Breadcrumbs & Search -->
    <div class="container-fluid  ">
        <div class="card mb-4 wow fadeIn grey lighten-4">
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-1 mb-sm-0 ">
                    <a href="../index.php">Home</a>
                    <span>/Class View </span>

                </h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <!--Card image-->
            <div class="view overlay">
                <img id='ProductImg' class="card-img-top" height="350px" width="400px" alt="">
                <a>

                </a>
            </div>

            <div class="card-body">

                <div class="col-xl-12">
                    <div class="card-body  text-black">
                        <form class="col" action="payment.php" method="POST">
                            <div class="col-md-12 mb-2">
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="class_name">Class Name</label>
                                    <input disabled type="text" id="class_name" name="c_name" class="form-control form-control-lg" value="<?php echo $data['c_name'] ?>" />
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="class_teacher">Class Lecturer</label>
                                    <input disabled type="text" id="class_teacher" name="c_cordinator" class="form-control form-control-lg" value="<?php echo $data['c_cordinator'] ?>" />
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="clas_description">Class Description</label>
                                    <input disabled type="text" id="clas_description" name="c_desc" class="form-control form-control-lg" value="<?php echo $data['c_desc'] ?>" />
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="class_fee">Class Fee</label>
                                    <input disabled type="text" id="class_fee" name="c_fee" class="form-control form-control-lg" value="<?php echo $data['c_fee'] ?>" />

                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="class_duration">Class Duration</label>
                                    <input disabled type="text" id="class_duration" name="c_duration" class="form-control form-control-lg" value="<?php echo $data['c_duration'] ?>" />

                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label" for="class_category">Class Category</label>
                                    <input disabled type="text" id="class_category" name="c_category" class="form-control form-control-lg" value="<?php echo $data['c_category'] ?>" />

                                </div>
                            </div>
                            <h1 align="start " class="mt-4"> Payment</h1>
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-2">


                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <div class="form-outline">
                                            <input required type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                            <label class="form-label" for="typeText">Card Number</label>
                                        </div>
                                        <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="64px" />
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-outline">
                                            <input required type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                                            <label class="form-label" for="typeName">Cardholder's Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="form-outline">
                                            <input required type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                            <label class="form-label" for="typeExp">Expiration</label>
                                        </div>
                                        <div class="form-outline">
                                            <input required type="password" id="typeText2" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                            <label class="form-label" for="typeText2">Cvv</label>
                                        </div>

                                    </div>


                                </div>
                                <div id="signBack" class="d-flex justify-content-center">
                                    <p class="text-center strong pt-4"> <strong>Please Login With Your Student Account to Apply Class<strong></p>
                                    <a type="button" href="../index.php" class="text-center btn btn-info btn-lg ">SignIn </a>
                                </div>
                                <div align="center" class="mb-3 mt-4">

                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancel</button>
                                    <input type="submit" class="btn btn-info" name="makePayment" value="Apply Class" />
                                </div>
                                <!-- <p id="staffmember" class="text-center strong pt-4"> <strong>Teachers And Staff Can Only view tha class<strong></p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

        <script>
            var m_img = document.getElementById('ProductImg');
            m_img.src = '<?php print_r("../" . $data["c_scr"]); ?> ';
        </script>
</body>


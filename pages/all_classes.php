<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Breadcrumbs & Search -->
    <div class="container-fluid  ">
        <div class="card mb-4 wow fadeIn grey lighten-4">
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-1 mb-sm-0 ">
                    <a href="../index.php">Home</a>
                    <span>/Classses</span>

                </h4>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center pt-4 mt-4"> Non Academic Programs </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            include "../utils/db_connect.php";


            $sql = "SELECT * FROM class WHERE c_category='non-academic' ";

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $stmt_result = $stmt->get_result();


            if ($stmt_result->num_rows > 0) {
                while ($row = $stmt_result->fetch_assoc()) {
            ?>
                    <div class="col ">
                        <div class="card">
                            <img src="<?php echo "../" . $row['c_scr']; ?>" class="card-img-top" height="200px" alt="Hollywood Sign on The Hill" />
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $row['c_name']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row['c_desc']; ?>
                                </p>
                                <a href="classView.php?id=<?php echo $row['c_id']; ?>" class="black-text d-flex flex-row-reverse">View More</a>
                            </div>
                        </div>
                    </div>

            <?php

                }
            }
            ?>

        </div>
        <br>
        <hr>
        <h1 class="text-center"> Academic Programs </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php

            $sql = "SELECT * FROM class WHERE c_category='academic' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt_result = $stmt->get_result();

            if ($stmt_result->num_rows > 0) {
                while ($row = $stmt_result->fetch_assoc()) {
            ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo "../" . $row['c_scr']; ?>" class="card-img-top" height="200px" alt="Hollywood Sign on The Hill" />
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $row['c_name']; ?></h5>
                                <p class="card-text">
                                    <?php echo $row['c_desc']; ?>
                                </p>
                                <a href="classView.php?id=<?php echo $row['c_id']; ?>" class="black-text d-flex flex-row-reverse">View More</a>
                            </div>
                        </div>
                <?php

                }
            }
                ?>
                    </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
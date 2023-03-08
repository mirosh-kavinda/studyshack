<?php

include("db_connect.php");



//This is for get next incrementing id for pariticular table
function getNextIncrement($table, $db, $conn)
{

    $next_increment = 1;
    $table = mysqli_escape_string($conn, $table);
    $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$db' AND TABLE_NAME = '$table'";
    $results = $conn->query($sql);
    while ($row = $results->fetch_assoc()) {
        $next_increment = $row['AUTO_INCREMENT'];
    }
    return $next_increment;
}


//Student registration code
if (isset($_POST["sregister"])) {
    $Name = $_POST["sname"];
    $Email = $_POST["semail"];
    $Tele = $_POST["stelephone"];
    $Wtsapp = $_POST["swhatsapp"];
    $Address = $_POST["saddress"];
    $Gender = $_POST["sgender"];
    $Grade = $_POST["sgrade"];
    $Password = $_POST["spassword"];
    $date = date("Y/m/d");

    $sql1 = "INSERT INTO student(s_name,s_email,s_tele,s_wtsapp,s_address,s_grade,s_gender,s_password,reg_date) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Grade' ,'$Gender','$Password','$date');";

    if (!mysqli_query($conn, $sql1)) {
        echo "Error." . $sql1 . "<br>" . mysqli_error($conn);
    }
    //student registration code ends here
} else if (isset($_POST["tregister"])) {
    $Name = $_POST["tname"];
    $Email = $_POST["temail"];
    $Tele = $_POST["ttelephone"];
    $Wtsapp = $_POST["twhatsapp"];
    $Address = $_POST["taddress"];
    $Gender = $_POST["tgender"];
    $Grade = $_POST["grade"];
    $Password = $_POST["tpassword"];
    $date = date("Y/m/d");
    $grades = $_POST['grade'];


    $sql2 = "INSERT INTO teacher (t_name,t_email,t_tele,t_whtsapp,t_address,t_gender,t_password,reg_date) VALUES('$Name','$Email','$Tele','$Wtsapp','$Address','$Gender','$Password','$date');";
    if (!mysqli_query($conn, $sql2)) {
        echo "Error." . $sql2 . "<br>" . mysqli_error($conn);
    }

    $items = "";
    $teachId = getNextIncrement('teach_sub', $db, $conn);
    foreach ((array) $grades as $grade) {
        $int = mysqli_insert_id($conn) + 1;
      
        $sql3 = "INSERT INTO teach_sub (t_id,t_grade) VALUES('$int','$grade') ";
        if (!mysqli_query($conn, $sql3)) {
            echo "Error." . $sql3 . "<br>" . mysqli_error($conn);
        }
    }
    //subject registration code ends here
} else if (isset($_POST["subregister"])) {
    $Grade = $_POST["grade"];
    $subName = $_POST["subName"];
    $subDescription = $_POST["subDesc"];


    $sql3 = "INSERT INTO subject VALUES('$Grade','$subName','$subDescription');";
    if (!mysqli_query($conn, $sql3)) {

        echo " <script>alert('Error Detected')</script ";
    } else {
        echo " <script>alert('Subject Added Successfully')</script ";
    }
}


<?php
if (isset($_POST['makePayement'])) {
    $email = $_POST['c_email'];
    $c_id = $_POST['c_id'];
    $c_fee = $_POST['c_fee'];
    $date = date("Y/m/d");


    $sql = "INSERT INTO payment(s_email,p_fee,p_date,class_id) VALUES('$email','$c_fee','$date','$c_id')";
    if (mysqli_query($conn, $sql)) {
        echo " <script>alert('submit packde')</script >";
    } else {
        echo " <script>alert('Error Detected')</script >";
        $e_message = 'Payment Passed Succesfully!';
        $e_icon = 'sucess';
        $e_text = 'You will assign to the class withing 24 hours ';
        // header('Location:../index.php');
    }
}

?>
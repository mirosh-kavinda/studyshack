<?php

$servername="localhost";
$username="root";
$password="";
$db="studyshack";

//Create connection
$conn= mysqli_connect($servername,$username,$password,$db);

//Check connection
if(!$conn){
    die("Connection Faild:".mysqli_connect_error());
}
?>


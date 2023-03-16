<?php


// $host="us-cdbr-east-06.cleardb.net";
// $username="bac7d8d7a61e77";
// $password="0d744c1e";
// $dbname="heroku_9fb814fc917ebde";

// if ($_SERVER['HTTP_HOST'] == 'localhost') {

    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "studyshack";
//   }
// mysql://bac7d8d7a61e77:0d744c1e@us-cdbr-east-06.cleardb.net/heroku_9fb814fc917ebde?reconnect=true

//Create connection
$conn= mysqli_connect($host,$username,$password,$dbname);

//Check connection
if(!$conn){
    die("Connection Faild:".mysqli_connect_error());
}

session_start();

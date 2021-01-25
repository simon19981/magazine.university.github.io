<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "00175287";

// create connection
$connect = new Mysqli($servername, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("Connection Failed : " . $connect->error);
} else {
    //echo "Successfully Connected";
}


?>
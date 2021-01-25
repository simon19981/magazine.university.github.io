<?php

include 'config/db.php';

session_start();

//INITILISING VARIABLES 

$eventname ="";
$eventdes ="";

//Registraring user

if (isset($_POST['create_event'])) {
	$eventname = mysqli_real_escape_string($connect, $_POST['eventname']);
	$eventdes = mysqli_real_escape_string($connect, $_POST['eventdes']); 
	$startdate = mysqli_real_escape_string($connect, $_POST['startdate']);
	$enddate = mysqli_real_escape_string($connect, $_POST['enddate']);
	
	$query = "INSERT INTO event (event_name, event_description, starting_date, end_date) VALUES ('$eventname', '$eventdes', '$startdate', '$enddate')";
	$result = mysqli_query($connect, $query);

        if ($result) {
            echo "<script>alert(' Event created successfully');
            location.href='admin_panel.php';</script>";
            //header("refresh:0.1;url=admin_panel.php");

            exit;
        } else {
            
            echo "error". mysqli_error($connect);
        }
    } 
	


	
?>


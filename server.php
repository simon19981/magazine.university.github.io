<?php
include 'config/db.php';

session_start();

//INITILISING VARIABLES 

$username ="";
$email ="";

//Registraring user

if (isset($_POST['reg_user'])) {
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']); 
	$password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);
	$user_type = mysqli_real_escape_string($connect,  $_POST['user_type']);
	
}

 






//Register the user if no errors

    $user_check_query = "SELECT * FROM users  WHERE email = '$email' LIMIT 1";
	$results = mysqli_query($connect, $user_check_query);
	$user = $results->fetch_assoc();

//check for existing username
	if($user){
		$_SESSION['message'] = "<span class='badge badge-danger text-center' style='margin-left: 35%;'>User already exists.</span>";
		header("location:reg_page.php");
	} elseif ($password_1 == $password_2) {

	$password = md5($password_1); // this will encrypt the password
	$query = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$email', '$password', '$user_type')";
	$result = mysqli_query($connect, $query);
        if ($result) {
            //"login success";
            header("refresh:0.1;url=login_form.php");
            exit;
        } else {
            
            echo "error". mysqli_error($connect);
        }
    } else {
        
        echo "passowrd mismatched";
    }
?>


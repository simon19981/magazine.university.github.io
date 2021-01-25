<?php

 session_start();
  
include 'config/db.php';

	if ($_SERVER["REQUEST_METHOD"]=="POST") {

	if(isset($_POST["updatee"])) {

		$pass = md5($_POST['old_pass']);

		$new_pass = md5($_POST['new_pass']);

		$confirm_pass = md5($_POST['c_pass']);



		$id = $_SESSION['id'];

		$connect = mysqli_connect("localhost","root","","00175287");

		$query = "SELECT * FROM users WHERE id = '$id'";

		$result = mysqli_query($connect,$query);

		$row = mysqli_fetch_array($result);

		if (md5($_POST['old_pass']) == $row['password']) {

			if ($_POST['new_pass'] == $_POST['c_pass']) {

				$query = "UPDATE users SET password = '$new_pass' WHERE id = '$id'";

				$result = mysqli_query($connect,$query);

				$msg = 'Password successfully changed!';

				$_SESSION['msg'] = $msg;
                 echo 'seccess';
				//header('location:index.php ');

			} else {
				$msg = 'Confirm password not match!';

				$_SESSION['msg'] = $msg;

                 echo 'not seccess';
				//header('location:change_pass.php');

			}
		} else {
			$msg = 'Wrong old Password!';
			$_SESSION['msg'] = $msg;

			echo 'no';
			//header('location:change_pass.php');
		}

	}
	
	}

?>
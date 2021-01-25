<?php 
	session_start();
	session_destroy();
	echo "<script>alert('successfully Logedout');
    location.href='login_form.php';</script>";
	//header("location:login_form.php");
?>
<?php 
session_start();

include 'config/db.php';

 //check if session has a value
  if(isset($_SESSION['id'])){
     $user_id = $_SESSION['id'];

    }


if (isset($_POST['upload'])) {
  

$category = $_POST['category'];
$file_cat = $_POST['file_cat'];
$datetime = date('Y-m-d H:i:s');
$file = $_FILES['photo'];

//print_r($file);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0){

	$destfile = 'upload/' .$filename;
	//echo "$destfile";
    // moving contants from database

    move_uploaded_file($filepath, $destfile);

    //inserting querry for the database
     
     $insertquery = "insert into  event_registration( picture, category, user_id, date_time, file_cat) values( '$destfile', '$category', '$user_id', '$datetime', '$file_cat')";

     $query = mysqli_query($connect,$insertquery);

      if($query){
       
      	//echo  "DATA inserted";

        echo "<script>alert('data successfully Uploaded');
        location.href='event.php';</script>";
        //header("location: event.php");


      }else{ 
      	echo  "DATA HAS NOT BEEN INSERTED";
      }
}



}

?>
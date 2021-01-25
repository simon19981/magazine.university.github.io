<?php 
    session_start(); 

    include 'config/db.php';

      

    if (isset($_POST['login'])) {
      
      $email = $_POST['email'];
      $password = $_POST['password'];
      $md5Pass = md5($password);
      


     
$emaildb = "select * from users where email = '$email'" ;
    $query = mysqli_query($connect, $emaildb);
    $num = mysqli_num_rows($query);
    $row = $query->fetch_assoc();
   
    if($num<1){

        // for showing invalid content
    $_SESSION['message'] = "<span class='badge badge-danger text-center' style='margin-left: 35%;'>invalid email or password.</span>";
    header("location: login_form.php");

    } else if  ($row['password'] != $md5Pass) {
       
       // for showing invalid content
       $_SESSION['message'] = "<span class='badge badge-danger text-center' style='margin-left: 35%;'>invalid email or password.</span>";
    header("location: login_form.php");

    } else {

   // for multi user 
  $_SESSION['id'] = $row['id'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['is_loggedin'] = true;
  $_SESSION['user_type'] = $row['user_type'];
  if ($row['user_type'] == 'admin'){
   echo "<script>alert('Logedin as Admin');
    location.href='admin_panel.php';</script>";
   //header('location:admin_panel.php');
  } else {
    echo "<script>alert(' successfully Logedin');
    location.href='index.php';</script>";
     //header('location:index.php');
  }
 

}


  
}
?>



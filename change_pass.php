<html>
<head>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="css/loginStyle.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
    
        <div id="first">
            <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Change Password</h1>
                           </div>

                           <?php
                            //session_start();  
                               

                           //  include 'config/db.php';

                             //if (isset($_POST['update'])){

                             // $email = $_POST['email'];
                            //  $old_pass = $_POST['old_pass'];
                             // $new_pass = $_POST['new_pass'];
                            ///  $confirm_pass = $_POST['c_pass'];

                             // $query = mysqli_query($connect, "SELECT email,password From users WHERE email = ' $email' AND password = '$old_pass'");
//
                            //  $num = mysqli_fetch_array($query);

                             // if ($num>0){

                              //  $connect = mysqli_query($connect, "UPDATE users set password = '$new_pass' WHERE email = ' $email'");

                              //  $_SESSION['msg1'] = "Password changed successfully";
                              //  }
                             //   else{
                               //    $_SESSION['msg1'] = "Password NOT changed successfully";
                               // }


                             //}

                                



                           // ?>
                        </div>
                       
                        <form action="change_pass_server.php" name="registration" method="post">
                          
                           <div class="form-group">
                              <label for="exampleInputEmail1">Old Password</label>
                              <input type="password" name="old_pass"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter Old Password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">New Password</label>
                              <input type="password" name="new_pass" class="form-control" aria-describedby="emailHelp" placeholder="Enter New Password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Confirm Password</label>
                              <input type="password" name="c_pass" class="form-control" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
                           </div>                        
                           
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="updatee">Update</button>
                           </div>

                          
                            </div>
                        </form>
                         <form action="index.php">
                         <div class="col-md-12 text-center mb-3">
                           <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" >Back to Home Page</button>
                 </div>
                       </form>
                     </div>

      </div>
    </div>
      </div>   
         


         <script>
    $("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});


  
         $(function() {
           $("form[name='login']").validate({
             rules: {
               
               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,
                 
               }
             },
              messages: {
               email: "Please enter a valid email address",
              
               password: {
                 required: "Please enter password",
                
               }
               
             },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
         


$(function() {
  
  $("form[name='registration']").validate({
    rules: {
      username: "required",
      password_1: "required",
      password_2: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    
    messages: {
      username: "Please enter your firstname",
     
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</body>
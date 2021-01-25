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
                              <h1 >Signup</h1>
                           </div>
                            <?php
                            session_start();  
                                if (isset($_SESSION['message'])) {
                                  echo $_SESSION['message'];
                                  $_SESSION['message'] = "";
                                }

                            ?>
                        </div>
                       
                        <form action="server.php" name="registration" method="post">
                           <div class="form-group">
                              <label for="exampleInputEmail1">UserName</label>
                              <input type="text"  name="username" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password_1" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Confirm Password</label>
                              <input type="password" name="password_2" class="form-control" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
                           </div>

                          <!-- multi user  -->
                             <div class="form-group">
                              
                              <input type="hidden" name="user_type" value="user" class="form-control" >
                           </div>
                           
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="reg_user">Get Started For Free </button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login_form.php" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
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
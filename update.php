<?php 

include 'config/db.php';

session_start();

  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/add_css.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href="css/loginStyle.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin_panel.php">
             <?php 
        //check if session has a value
          if(isset($_SESSION['username'])){
              echo $userName = $_SESSION['username'];
          }
        ?> </a><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                                                                                         
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin_panel.php">Go back to admin panel</a>
                    </div>
                </li>
            </ul>
        </nav>
       

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages
                                </nav>
                            </div>                                                                                 
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php 
        //check if session has a value
          if(isset($_SESSION['username'])){
              echo $userName = $_SESSION['username'];
          }
        ?> 
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        
                       
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
    
        <div id="first">
            <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Update Event</h1>
                           </div>

                            <?php                         

                          //showing id filds with clicked id.

                         if ($_GET['id']) {

                           $id = $_GET['id'];

                           $query = "SELECT * FROM event WHERE id = '$id'"; 


                           $result = mysqli_query($connect, $query);

                           if ($result->num_rows != 0) {

                               $event = $result->fetch_assoc();
                                         }
                                                }
                       
                                   
                               
                    

                                if (isset($_SESSION['message'])) {
                                  echo $_SESSION['message'];
                                  $_SESSION['message'] = "";
                                }

                            ?>


                        </div>
                       
                        <form action="update_server.php" name="event" method="post">
                          <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Event Name</label>
                              <input type="text"  name="eventname" class="form-control" value="<?php echo $event['event_name']; ?>" ria-describedby="emailHelp"  placeholder="Enter Event name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Event description</label>
                              <input type="text" name="eventdes"  class="form-control"  value="<?php echo $event['event_description']; ?>"ria-describedby="emailHelp" placeholder="Enter Event description">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Starting Date</label>
                              <input type="datetime" name="startdate" class="form-control"  value="<?php echo $event['starting_date']; ?>" aria-describedby="emailHelp" placeholder="Enter Start Date">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">End Date</label>
                              <input type="datetime" name="enddate" class="form-control" value="<?php echo $event['end_date']; ?>" aria-describedby="emailHelp" placeholder="Enter End Date">
                           </div>                          
                           
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="update"> update </button>
                           </div>
                           
                            </div>
                        </form>
                     </div>
      </div>
    </div>
      </div>   
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Event data</div>


                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                       <tbody> 

                                          <?php

                                        include 'config/db.php';

                                        $selectquery = "select * from event";

                                        $query = mysqli_query($connect,$selectquery);

                                        $num = mysqli_num_rows($query);

                                        while($result = mysqli_fetch_array($query)){
                                           

                                           ?> 
                                              <thead>
                                            <tr>
                                               <th>ID</th>
                                                <th>Event Name</th>
                                                <th>Event Description</th>
                                                <th>Starting date</th>
                                                <th>End Date</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                             <tr>
                                                <td><?php echo $result['id']; ?></td>
                                                <td><?php echo $result['event_name']; ?></td>
                                                <td><?php echo $result['event_description']; ?></td>
                                                <td><?php echo $result['starting_date']; ?></td>
                                                <td><?php echo $result['end_date']; ?></td>
                                                <td><i class></i> </a></td>
                                              
                                            </tr>
                                           
                                          
                                        <?php
                                        }

                                         ?>


                                           
                                        </tbody> 
                                    </table>
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

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
        </script>
        <script src="js/add_js.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

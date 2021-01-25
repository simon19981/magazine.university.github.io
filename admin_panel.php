<?php 
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
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
       

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin_panel.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" ></i></div>
                                Admin Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                           
                           
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                   
                                   
                                   
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="admin_panel.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="admin_panel.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
                            >
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
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                              <h1 >Create Event</h1>
                           </div>
                            <?php
                         
                                if (isset($_SESSION['message'])) {
                                  echo $_SESSION['message'];
                                  $_SESSION['message'] = "";
                                }

                            ?>
                        </div>
                       
                        <form action="admin_server.php" name="event" method="post">
                          


                           <div class="form-group">
                              <label for="exampleInputEmail1">Event Name</label>
                              <input type="text"  name="eventname" class="form-control"  ria-describedby="emailHelp"  placeholder="Enter Event name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Event description</label>
                              <input type="text" name="eventdes"  class="form-control"   ria-describedby="emailHelp" placeholder="Enter Event description">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Starting Date</label>
                              <input type="datetime-local" name="startdate" class="form-control" aria-describedby="emailHelp" placeholder="Enter Start Date">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">End Date</label>
                              <input type="datetime-local" name="enddate" class="form-control" aria-describedby="emailHelp" placeholder="Enter End Date">
                           </div>                          
                           
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="create_event"> Create Event </button>
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
                                                <th colspan="2">Edit</th>
                                                
                                            </tr>
                                        </thead>
                                             <tr>
                                                <td><?php echo $result['id']; ?></td>
                                                <td><?php echo $result['event_name']; ?></td>
                                                <td><?php echo $result['event_description']; ?></td>
                                                <td><?php echo $result['starting_date']; ?></td>
                                                <td><?php echo $result['end_date']; ?></td>
                                                <td><a href="update.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                                <td><a href="delete.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                </td>

                                              
                                            </tr>
                                           
                                          
                                        <?php
                                        }

                                         ?>


                                           
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>User Evnt submission Data</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <!-- displaying data from database -->
                                        <thead>
                                            <tr>
                                                <th> submit ID</th>
                                                <th> picture </th>
                                                <th> Ctegory</th>
                                                <th>  User ID </th>
                                                <th>  Date </th>
                                                <th> File Ctegory</th>
                                                <th> Is Selected</th>
                                                <th> Action </th>

                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                         <?php

                                        include 'config/db.php';

                                        $selectquery = "select * from event_registration";

                                        $query = mysqli_query($connect,$selectquery);

                                        $num = mysqli_num_rows($query);

                                        while($result = mysqli_fetch_array($query)){
                                           

                                           ?> 
                                          
                                             <tr>
                                                <td><?php echo $result['id']; ?></td>                                             
                                                <td><?php echo $result['picture']; ?></td>
                                                <td><?php echo $result['category']; ?></td>
                                                <td><?php echo $result['user_id']; ?></td>
                                                <td><?php echo $result['date_time']; ?></td>
                                                <td><?php echo $result['file_cat']; ?></td>
                                                <td>
                                                    <?php if($result['is_selected'] == '1') { ?>
                                                        <span class="badge badge-success">Selected</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-danger">Not Selected</span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="display.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="View data" name="view"><i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <?php if($result['is_selected'] == '0') { ?>
                                                     <a href="select.php?id=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure you want to select this item?');" data-toggle="tooltip" data-placement="bottom" title="Select user data" name="select"><i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                     <?php } ?>
                                                </td>
                                                </td>
                                            
                                              
                                            </tr>
                                           
                                          
                                        <?php
                                        }

                                         ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>





                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>User Rgisterd DataTable</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <!-- displaying data from database -->
                                        <thead>
                                            <tr>
                                               <th>ID</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>User Types</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>User Types</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                       <?php

                                        include 'config/db.php';

                                        $selectquery = "select * from users";

                                        $query = mysqli_query($connect,$selectquery);

                                        $num = mysqli_num_rows($query);

                                        while($result = mysqli_fetch_array($query)){
                                           

                                           ?> 
                                             <tr>
                                                <td><?php echo $result['id']; ?></td>
                                                <td><?php echo $result['username']; ?></td>
                                                <td><?php echo $result['email']; ?></td>
                                                <td><?php echo $result['password']; ?></td>
                                                <td><?php echo $result['user_type']; ?></td>
                                               
                                               
                                                
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                          
                                        <?php
                                        }

                                         ?>


                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                

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

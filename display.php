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
           
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
               </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin_panel.php">Back to admin dashboard</a>
                    </div>
                </li>
            </ul>
        </nav>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        
                </nav>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="">
                        <h1 class="" >Event data View </h1>

                          <div class="row d-flex justify-content-center">
    <div class="col-lg-11 col-12">
     <div class="table-responsive">
      <table class="table">
        <thead class="">
        <tr>
        <th scope="col" class="py-2 text-white"> User Id </th> 
          
        <th scope="col" class="py-2 text-white"> Picture </th>
        
                </tr>
        </thead> 
        <tbody>
          <?php
                    // database include
                    include 'config/db.php';

                    $selectquery = "select * from event_registration";

                    //executing to mysqli
                    $query = mysqli_query($connect, $selectquery);

                    //$result = mysqli_fetch_array($query);
                   //doing a loop for the id for getting the data one by one.
                    while( $result = mysqli_fetch_array($query)){

                      ?>
                          <tr> 

                            <td class="py-2 text-white"> <?php echo $result['id']; ?> </td>
                            <?php if($result['file_cat'] == 'PDF') { ?>
                            <td> <a href= "<?php echo $result['picture']; ?>" target="_blank">PDF</a> </td>
                            <?php } elseif($result['file_cat'] == 'Word') { ?>
                            <td>  <a href= "<?php echo $result['picture']; ?>" target="_blank">Word Doc</a> </td>
                            <?php } else { ?>
                            <td> <img src= "<?php echo $result['picture']; ?>" width="100" height="79"> </td>
                            <?php } ?>
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
                          </div>

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

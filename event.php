<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="css/loginStyle.css" rel="stylesheet" >


  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Wellcome 
        <?php 
        //check if session has a value
          if(isset($_SESSION['username'])){
              echo $userName = $_SESSION['username'];
          }
        ?> 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                <a class="dropdown-item" href="portfolio-single.html">Portfolio Single</a>
              </div>
          </li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Case Studies</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          
          <!-- check if user is logged in or not -->
          <?php if (isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == true) { ?>
          <li class="nav-item cta"><a href="logout.php" class="nav-link"><span>LOGOUT</span></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
  

    <!-- <div class="js-fullheight"> -->


   !-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }"> <br> <br>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '40%', opacity: 1.6 }"> Upload Your images and Documents to be the first one </h1>
       <!-- .entry-meta-date -->                                                  
             <div class="col-md-6 offset-md-3 mt-5">
       
      

       <div class="col-md-12 register-left" >
       

        <h1> Upload your Files.  Your ID. <?php 
        //check if session has a value
          if(isset($_SESSION['id'])){
              echo $id = $_SESSION['id'];
          }
        ?>  
      Name.
      <?php 
        //check if session has a value
          if(isset($_SESSION['username'])){
              echo $userName = $_SESSION['username'];
          }
        ?> </h1>
        <form accept-charset="UTF-8" action="upload.php" name="category" method="POST"  target="_blank" enctype="multipart/form-data"> 
         
             <label for="category"> Please Choose Category</label>
              <select name="category">
              <optgroup label="Category">
              <option value="Business & Finance Magazines">Business & Finance Magazines</option>
             <option value="Children Magazines">Children Magazines</option>
             <option value="Computer & Electronics Magazines">Computer & Electronics Magazines</option>
             <option value="Cooking, Food, & Bev Magazines">Cooking, Food, & Bev Magazines</option>
             <option value="Craft & Hobbies Magazines">Craft & Hobbies Magazines</option>
             <option value="Entertainment & TV Magazines">Entertainment & TV Magazines</option>
             <option value="Fashion & Style Magazines">Fashion & Style Magazines</option>
             <option value="Others">Others</option>             
            </optgroup>
          </select>
          <form accept-charset="UTF-8" action="upload.php" name="category" method="POST"  target="_blank" enctype="multipart/form-data"> 
         
             <label for="category"> Please Choose Category</label>
              <select   name="file_cat">
              <optgroup label="Category">
              <option type="Image" value="Image">Image</option>
              <option value="PDF">PDF</option>
              <option value="Word">Word/Doc</option>
                      
            </optgroup>
          </select>


         

          <hr>

          <div class="form-group mt-3"  required="required">
         
            <input type="file" accept="application/png,pdf" name="photo" >
          </div>


          
          <hr>
          <button type="submit" name="upload" class="btn btn-primary">Upload</button>   

        </form>
       
</div>
    </div> 
                 
          </div>
        </div>
      </div>
    </div>
  
    

    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Snipp.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">Case studies</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
 <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Bangladesh Dhakas</a></li>
                <li><a href="#" class="py-2 d-block">+88801200897987</a></li>
                <li><a href="#" class="py-2 d-block">1000973@daffodil.ac</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="https://www.twitter.com/"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">avishek</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
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
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
         
         
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          
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
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Participate In the Event </h1>

            <h5 class="mb-4" >
              
               <div class="hero-content" >
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="jumbotron text-center">
                       <?php

                          include 'config/db.php';

                          $selectquery = "select * from event ORDER BY id DESC LIMIT 1";

                          $result = mysqli_query($connect, $selectquery);

                          if ($result->num_rows == 1) {
                              $data = $result->fetch_assoc();
                          }

                          ?>
                      <h2><?php echo $data['event_name']; ?></h2>
                      <p class="lead"><?php echo $data['event_description']; ?></p>
                      <hr class="my-4">
                      <p>

                       <!-- displaying date time from database -->

                        <h4>Start Date : <?php $event_date = date_create($data['starting_date']);
                                           $dateFormat = date_format($event_date,"d M, Y h:i A");
                                             echo $dateFormat ?></h4>


                        <h4>End Date : <?php $event_date = date_create($data['end_date']);
                                           $dateFormat = date_format($event_date,"d M, Y h:i A");
                                             echo $dateFormat ?></h4>
                      </p>
                     </div>
                  </div>
                  <!-- .entry-meta-date -->                                                  
            </h5>
                
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="event.php" class="btn btn-primary btn-outline-white px-5 py-3">Event</a></p>
          </div>
        </div>
      </div>
    </div>
  
    
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

          <div class="col-md-3 mb-3">
            <a href="https://www.freemagazineslib.com/?s=Health" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Health<br><span class="tag"></span></h3>
              </div>
              <img src="images/1.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="" style=""></div>
                  <h3> <br><span class="position"></span></h3>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">

                  <div class="col-md-8">
                    <a href="https://www.freemagazineslib.com/category/business/" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Business<br><span class="tag"></span></h3>
                      </div>
                      <img src="images/page_1_thumb_large.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="" style=""></div>
                         
                        </div>
                      </div>
                    </a>
                  </div>


                  <div class="col-md-4">
                    <a href="https://www.zinio.com/in/search?keyword=Discovery" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Discovery <br><span class="tag"></span></h3>
                      </div>
                      <img src="images/download.png" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="" style="background-image: "></div>
                        
                        </div>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start">
                  <div class="col-md-8">
                    <a href="https://www.zinio.com/in/search?keyword=histoery" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>History<br><span class="tag"></span></h3>
                      </div>
                      <img src="images/HIS_237_p001_Cover9pjUK_Small_cmyk-229cbdf.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="" style="background-image:"></div>
                       
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://www.zinio.com/in/search?keyword=daily%20life" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>daily life<br><span class="tag"></span></h3>
                      </div>
                      <img src="images/images.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="" style="background-image:"></div>
                          
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="https://www.zinio.com/in" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Others<br><span class="tag"></span></h3>
              </div>
              <img src="images/downloaded.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="" style="background-image:"></div>
                 
                </div>
              </div>
            </a>
          </div>


       




        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h1">UI/UX, visual, <strong class="px-3">Web designer</strong> with more than 12 years of experience in designing websites and mobile apps.</h2>
            <p><a href="#" class="btn btn-primary mt-3 py-3 px-5">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section>
    </div>
    
  
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Strategy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-laptop"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gear"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Development</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Help &amp; Supports</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Help Us To Know About What Youre Thinking</h2>
           
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                     
                     
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Works</span>
            <h2 class="mb-4">View our works below to see our design and way of development.</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text">
              <h4 class="subheading">Illustration</h4>
              <h2 class="heading"><a href="event.php">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="event.php" class="btn btn-primary px-4">see event</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work-2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Web Design</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <span><a href="#" class="btn btn-primary py-3 px-5">View All Projects</a></span>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Customer Says</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Our achievements</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="400">0</strong>
                <span>Customers are satisfied with our professional support</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Amazing preset options to be mixed and combined</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8000">0</strong>
                <span>Average response time on live chat support channel</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> <?php 
        //check if session has a value
          if(isset($_SESSION['username'])){
              echo $userName = $_SESSION['username'];
              
          }
        ?> </h2>
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
                   <li><a href="change_pass.php" class="py-2 d-block">Account Info</a></li>
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
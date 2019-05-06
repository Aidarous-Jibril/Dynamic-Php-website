<?php

   $companyName = "Ryan's Fine Pizzeria"; //define page name
    include 'include/arrays.php';
?>


<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="icon" href="../../../../favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--Google fonts -->


      <title><?php echo TITLE; ?></title>

      <!-- Custom styles for this template -->
      <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css">
      
      <!--Own custom css styles-->
      <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/style.css">
      <!--own css style for Sliders-->
      <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/slider.css"><!-- css for slider img -->
     
     <!--Font-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

  </head>
  <body>


  <div class="container-fluid" id="banner-area" > <!--Banner area start -->
    
          <!-- Navigation Start -->
        <nav id="navigation" class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top mb-50">
          <div class="container">

            <div class="navbar-header">
              <a class="navbar-brand page-scroll" href="index.php">
             
               <img src="img/banner.jpg" alt="ElmiHaad Media" class="logo">  
              </a>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

            </div><!-- //.navbar-header -->

            <div class="navbar-collapse collapse flex-row-reverse" id="navbarSupportedContent" >
                  <?php  include ('include/nav.php'); ?> <!--bring navbar links here -->
            </div><!-- //.navbar-collapse -->
            

          </div><!-- //.container -->        
        </nav>  <!-- //Navigation End -->

    

<!--RESPONSIVE SLIDER IMAGES -->
 <div class="slider" >
      <div class="slide current">
        <div class="content">
          <h1>Slide One</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
            maxime, voluptatibus labore doloremque vero!
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slide Two</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
            maxime, voluptatibus labore doloremque vero!
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slide Three</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
            maxime, voluptatibus labore doloremque vero!
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slide Four</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
            maxime, voluptatibus labore doloremque vero!
          </p>
        </div>
      </div>
 
    
      <div class="slide">
        <div class="content">
          <h1>Slide Five</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
            maxime, voluptatibus labore doloremque vero!
          </p>
        </div>
      </div>

  </div><!-- /Slider End-->

    <div class="buttons">
      <button id="previous"><i class="fas fa-arrow-left"></i></button>
      <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
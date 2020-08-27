<?php

include('DB.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>SAACHS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

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
    <link rel="stylesheet" href="css/style3.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <!-- logo -->
      <div class="logo smooth-scroll">
          <a href="index.php"><img id="logo" src="images/logo.jpg" alt="SAACHS" width="60%" height="40%"></a>
      </div>
      <a class="navbar-brand" href="index.php">SAACHS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="publication.php" class="nav-link">Publications</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Galleries</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Covid-19</a></li>
          <li class="nav-item"><a href="partner.php" class="nav-link">Partners</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="home.php" class="nav-link">Getting started</a></li>
        </ul>
      </div>
      
    </div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="143285">0</strong>
                <span>Students and staff members in all 9 provinces of South Africa</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
                <div class="text">
                     <span>Notice Board One</span>
                     </div>
              <?php
                              
                               $sql="select * from `notice1` LIMIT 4";
                               $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                               while($row=mysqli_fetch_array($qry))
                               {

                           ?>
              <div class="text">
              	<h3 class="mb-4"><?php echo  $row['fname'] ?></h3>
              	<p><?php echo  $row['content'] ?></p>
              </div>
              <?php
                              
                            }
                            
                         ?>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
                 <div class="text">
                     <span>Notice Board Two</span>
                     </div>
              <?php
                               $x=1;
                               $sql="select * from `notice2` LIMIT 4";
                               $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                               while($row=mysqli_fetch_array($qry))
                               {

                           ?>
              <div class="text">
              	<h3 class="mb-4"><?php echo  $row['fname'] ?></h3>
              	<p><?php echo  $row['content'] ?></p>
              </div>
              <?php
                              $x++;
                            }
                         ?>
            </div>
          </div>
    		</div>
    	</div>
    </section>

      <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Events</h2>
          </div>
          <div class="col-md-12 heading-section ftco-animate text-center">

            <p>Take a look at the published events below</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
              <?php
                               $x=1;
                               $sql="select * from `events`";
                               $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                               while($row=mysqli_fetch_array($qry))
                               {

                           ?>
              	<div class="item">
	    					<div class="cause-entry">
		    					<a href="publication.php" class="img" style="background-image: url(upload/<?php echo $row['file'];?>);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="publication.php"><?php echo  $row['fname'] ?></a></h3>
		    						<p><?php echo $row['content'] ?></p>

		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
                  </div>
		    				</div>
	    				</div>
              <?php
                              $x++;
                            }
                         ?>
    				</div>
    			</div>

    		</div>
        <div class="col-md-12 text-center">

          <p class="text-center">Copyright © 2020 SAACHS by <a target="_blank" href="http://www.androseriesdev.ml">Andro Series Developers</a>.</p>
        </div>
    	</div>
    </section>
    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

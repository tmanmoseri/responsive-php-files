<?php

include('DB.php');
 ?>
<?php
/*Yeah! Displays user information and some useful messages */
session_start();

//Yeah! Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] == true ) {
   //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $page = "Uploads";
    
    $profile ='Logged in:'.$first_name.' '.$last_name;
     $status = 'Logout';
     $rel = 'http://www.saachs.org/logout.php';
      $pel = 'http://www.saachs.org/uploader.php';
     }
else{
    $profile = 'You are not logged in!';
     $status = 'Login / Register';
     $rel = 'http://www.saachs.org/home.php';
      $pel = 'http://www.saachs.org/index.php';
     $page = " ";
    }

?>

<script type="text/javascript">
function newwin() {  
  var num = <?php echo $rel ?>;
  }
  </script>

<!DOCTYPE php>
<!--[if IE 9]> <php lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<php lang="en">
<!--<![endif]-->
	<head>
		 <link rel="icon" type="images/jpg" href="logo.jpg">
		<meta charset="utf-8">
		<title>SAACHS | South African Association of Campus Health Services</title>
		<meta name="author" content="phpcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Repair&Design core CSS file -->
		<link href="css/style2.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="css/custom.css" rel="stylesheet">

    	<!-- Login & register Custom css -->
    <link rel="stylesheet" href="assets/css/styles.min.css">

	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ -->
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
									<a href="index.php"><img id="logo" src="images/logo.jpg" alt="SAACHS" width="60%" height="40%"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name">SAACHS</div>
								<div class="site-slogan">South African Association of Campus Health Services.</div>
									<p><?= $profile; ?></p>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

                    <!-- Collect the nav links, forMs, and other content for toggling -->
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php#about">About</a></li>
                        <li><a href="publication.php#publication">Publications</a></li>
                        <li><a href="gallery.php#gallery">Galleries</a></li>
                        <li><a href="https://sacoronavirus.co.za">Covid-19</a></li>
                        <li><a href="partner.php#partner">Our Partners</a></li>
                        <li><a href="contact.php#contact">Contact</a></li>
                         <li><a href='<?php echo $pel;?>' onclick='return myFunction()'><?= $page; ?></a></li>
                       <li><a href='<?php echo $rel;?>' onclick='return myFunction()'><?= $status; ?></a></li>
                        
                        </ul>
                    </div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

    	<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div  class="footer section">
				<div  id="contact" class="container">
					<h1 class="title text-center"><span>Contact</span> Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Please leave us a message, we will get back to you soon.</p>
								<ul class="list-icons">
									<p>Tell: +27 (0)11 559 3837</p>
									<p>Email: mgeya@uj.ac.za</p>
									</ul>
								</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form" action="phpmailer/Mail.php" method="post">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control"  placeholder="Name" name="fname" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control"  placeholder="Enter email" name="email" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
										<div class="form-group has-feedback">
										<label class="sr-only" for="subject">Subject</label>
										<input type="text" class="form-control"  placeholder="Subject" name="subject" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8"  placeholder="Message" name="msg" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" name="submitform" class="btn btn-primary py-3 px-5">
	            	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->




					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2020 SAACHS by <a target="_blank" href="http://www.androseriesdev.ml">Andro Series Developers</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>

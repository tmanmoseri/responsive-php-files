<?php
/*Yeah! Displays user information and some useful messages */
session_start();

//Yeah! Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != true ) {
  $_SESSION['message'] = "You must log in again. Your session has expired!!";
  header("location: error.php");
    $status = 'Login / Register';
}
else {
    //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
      $status = 'Logout';
    
    $profile ='Logged in: '.$first_name.' '.$last_name;
    $rel = 'http://www.saachs.org/logout.php';
}
?>
<script type="text/javascript">

function myFunction() {
    var num = <?php echo $rel ?>;
    }

  </script>
  


<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>SAACHS | South African Association of Campus Health Services</title>
		<meta name="author" content="htmlcoder.me">

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
									<a href="index.php#banner"><img id="logo" src="images/logo.jpg" alt="SAACHS" width="40%" height="30%"></a>
							</div>
							

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="index.php#banner">SAACHS</a></div>
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

		

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title"><span>#SAACHS</span> Publications</h1>
				<div class="space"></div>




                <h2><span>Adding </span>publication</h2>
				<div class="row" style=' border: 10px solid #55acee;'>
					<div class="col-md-12">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								<form action="submit.php" method="post" enctype="multipart/form-data">
									<div class="panel panel-default">
								<div class="panel-heading" role="tab" >
									<h4 class="panel-title">

											<input class="form-control" name="fname" type="text" id="fname" placeholder="Please enter heading"/>
										</h4>
								</div>
								<div class="panel-body">
										<p><textarea class="form-control" id="content" name="content" placeholder="Please enter your story"></textarea></p>
									</div>
							</div>
							 <br>

							 <input type="file" name="uploadfile">
							 <br>

							<p><span>Publication</span> category</p>
				           <input type="radio" value="news" name="tablename">news (Hint!! No attachments for news!!!)<br>
				           <input type="radio" value="events" name="tablename">Events (Hint!! You should attach a file!!)<br>
                   <input type="radio" value="notice1" name="tablename">notice board1 (Hint!! No attachments for notice board!!!)<br>
                  <input type="radio" value="notice2" name="tablename">notice board2 (Hint!! No attachments for notice board!!!)

				           <br> <br>

							<button  class="btn btn-primary p-3 px-xl-5 py-xl-3" type="submit" name="submitform">Upload</button>

							</form>
							</div>
						</div>
					</div>



						<h2><span>Delete publication</span> by header name</h2>
					<div class="row" style=' border: 10px solid #55acee;'>
					<div class="col-md-12">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								<form action="delete.php" method="post" enctype="multipart/form-data">
									<div class="panel panel-default">
								<div class="panel-heading" role="tab" >
									<h4 class="panel-title">
									     <br>

									     <input class="form-control" name="fname" type="text" id="fname" placeholder="Please enter heading"/>
										</h4>
										</div>
										</div>
										 <br>
										 <p><span>Publication</span> category</p>
				           <input type="radio" value="news" name="tablename">news <br>
				           <input type="radio" value="events" name="tablename">Events<br>
				           <input type="radio" value="notice1" name="tablename">Notice board 1 <br>
				           <input type="radio" value="notice2" name="tablename">Notice board 2
				           <br> <br>

				           <button  class="btn btn-primary p-3 px-xl-5 py-xl-3" type="submit" name="submitform">Delete</button>

							</form>

							</div>
						</div>
					</div>


			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Let's Work Together!</h1>

						</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

		

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2020 saachs by <a target="_blank" href="http://www.androseriesdev.ml">Andro Series Developers</a>.</p>
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

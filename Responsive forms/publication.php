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


		<!-- section start -->
		<!-- ================ -->
		<div id="publication" class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1   class="text-center title"><span>#SAACHS</span> Publications</h1>
				<div class="space"></div>

				<!----- ------------------------------------
					news
				-------------------------------------------->

        <div class="row">

       <div class="col-md-12">
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

             <div class="panel panel-default">
             <div class="panel-heading" role="tab" id="HMAIN">
               <h4 class="panel-title">
                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#main" aria-expanded="false" aria-controls="main">
                   NEWS
                 </a>
               </h4>
             </div>
             <div id="main" class="panel-collapse collapse" role="tabpanel" >
               <div class="panel-body">
                 <div class="row">
                   <?php
                     $i=1;
                     $sql="select * from `news`";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
         <div class="col-md-12">
           <div class="panel-group" role="tablist" aria-multiselectable="true">
             <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="headingOne">

                 <h4 class="panel-title">
                   <a data-toggle="collapse"  href="#<?php echo $i; ?>" aria-expanded="false" aria-controls="<?php echo $i; ?>">
                     <?php echo  $row['fname'] ?>
                   </a>
                 </h4>
               </div>
                 <div id="<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">


                 <div class="panel-body">
                   <?php echo $row['content'] ?>

                   </div>
               </div>
             </div>
             </div>
           </div>
           <?php
                   $i++;
                 }
              ?>
         </div>
               </div>
             </div>
           </div>


           </div>

         </div>
       </div>
       
       <h4 class="panel-title">
                 <p><span>Events</span></p>
               </h4>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

   <div class="item active">
        <img src="images/logo.jpg" alt="SAACHS">
        <div class="carousel-caption">
          <h3>SAACHS</h3>
          <p> South African Association of <br>Campus Health Services!</p>
        </div>
      </div>

      <?php
                       $x=1;
                       $sql="select * from `events`";
                       $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                       while($row=mysqli_fetch_array($qry))
                       {

                   ?>

        <div class="item " >


                   <div class="image-box">
                     <div class="overlay-container">
                       <img src="upload/<?php echo $row['file'];?>" data-toggle="modal" data-target="#<?php echo $x; ?>x" alt="">

                     </div>
                     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo $x; ?>x"><?php echo  $row['fname'] ?>  Click to read more..</a>
                   </div>
                   <!-- Modal -->
                   <div class="modal fade" id="<?php echo $x; ?>x" tabindex="-1" role="dialog" aria-labelledby="<?php echo $x; ?>x-label" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title" id="<?php echo $i; ?>-label"><?php echo  $row['fname'] ?></h4>
                         </div>
                         <div class="modal-body">
                           <h3>Title: <?php echo  $row['fname'] ?></h3>
                           <div class="row">
                             <div class="col-md-6">
                               <p><?php echo $row['content'] ?>
                             </div>
                             <div class="col-md-6">
                               <img src="upload/<?php echo $row['file'];?>" alt="">
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- Modal end -->


        </div>
        <?php
                        $x++;
                      }
                   ?>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>






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

<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TRINDS</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
	  <div class="container">

	    <div class="logo float-left">
            <h1 class="text-light"><a href="webpage.html"><span>TRINDS</span></a></h1>
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	    </div>
	
	      <nav class="nav-menu float-right d-none d-lg-block"> <ul>
          <li class="drop-down"><a href="index.php">Home</a>
		  <ul>
		    <li><a href="about.php">About Us</a></li>
          </ul>
		  </li>
		  <li><a href="mapbox.php">Map</a></li>
          <li class="drop-down"><a href="#">Statistics</a>
                <ul>
                  <li><a href="#">Overall</a></li>
                  <li><a href="#">Accidents</a></li>
                  <li><a href="#">Breakdowns</a></li>
                  <li><a href="#">Road Works</a></li>
                  <li><a href="#">Heavy Traffic</a></li>
				  <li><a href="#">Road closures</a></li>
                </ul>
		  </li>		
             
          <li class="drop-down"><a href="#">Contact Us</a>
		       <ul>
				 <li><a href="faq.php">FAQ</a></li>
				 <li><a href="entry.php">Submit Entry</a></li>
               </ul>
		  </li>	   
                    <ul>
		    <li><a href="logout.php">Log Out</a></li>
          </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome <span>to TRINDS</span></h2>
          <p class="animated fadeInUp">TRaffic INformation Display System(TRINDS)</p>
		  <p class="animated fadeInUp">Your one-stop updated traffic news for all</p>
          <a href="about.html" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">No time to listen to the radio for traffic updates?</h2>
          <p class="animated fadeInUp">Fret Not! Look out for the latest traffic updates from our site</p>
          <a href="map.html" class="btn-get-started animated fadeInUp">Find out how</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Stuck in a traffic jam or encounter any vehicle breakdowns?</h2>
          <p class="animated fadeInUp">Help others by submitting an entry to us </p>
          <a href="entry.html" class="btn-get-started animated fadeInUp">Submit now</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->
</body>

</html>	
  
	<?php include 'footer.inc'?>
  </body>

</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


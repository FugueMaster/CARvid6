<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
 <?php include 'header.inc'?>
 
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome <span>to TRINDS</span></h2>
          <p class="animated fadeInUp">TRaffic INformation Display System(TRINDS)</p>
		  <p class="animated fadeInUp">Your one-stop updated traffic news for all</p>
          <a href="about.php" class="btn-get-started animated fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">No time to listen to the radio for traffic updates?</h2>
          <p class="animated fadeInUp">Fret Not! Look out for the latest traffic updates from our site</p>
          <a href="map.php" class="btn-get-started animated fadeInUp">Find out how</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Stuck in a traffic jam or encounter any vehicle breakdowns?</h2>
          <p class="animated fadeInUp">Help others by submitting an entry to us </p>
          <a href="entry.php" class="btn-get-started animated fadeInUp">Submit now</a>
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
  
	<?php include 'footer.inc'?>
  </body>

</html>

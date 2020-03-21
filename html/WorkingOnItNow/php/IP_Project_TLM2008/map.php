<!DOCTYPE html>
<html lang="n">
     <?php include 'header.inc'?>
  <head>
    <title>Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
	<header id="header" class="fixed-top ">
	  <div class="container">

	    <div class="logo float-left">
            <h1 class="text-light"><a href="webpage.html"><span>TRINDS</span></a></h1>
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	    </div>
	
	      <nav class="nav-menu float-right d-none d-lg-block"> <ul>
          <li class="drop-down"><a href="webpage.html">Home</a>
		  <ul>
		    <li><a href="">About Us</a></li>
          </ul>
		  </li>
		  <li><a href="map.html">Map</a></li>
          <li class="drop-down"><a href="#">Statistics</a>
                <ul>
                  <li><a href="#">Overall</a></li>
                  <li><a href="#">Accidents</a></li>
                  <li><a href="#">Breakdowns</a></li>
                  <li><a href="#">Road Works</a></li>
                  <li><a href="#">Heavy Traffic</a></li>
                </ul>
		  </li>		
             
          <li class="drop-down">Contact Us
		       <ul>
				 <li><a href="#">FAQ</a></li>
				 <li><a href="contact.html">Submit Entry</a></li>
               </ul>
		  </li>	   
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <script>
      var map;
      
      function initMap() {  // initialise map
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 1.3521, lng: 103.8198},
          zoom: 12
        });
        
        // Load GeoJson file
       //map.data.loadGeoJson(
            //'https://storage.googleapis.com/mapsdevsite/json/google.json');
      }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf8sdRfN_rf0iZCeAZ5qCTSBkmHlCbmVE&callback=initMap"
    async defer></script>
     <?php include 'footer.inc'?>
  </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


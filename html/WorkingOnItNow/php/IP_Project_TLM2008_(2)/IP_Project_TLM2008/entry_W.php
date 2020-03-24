<!DOCTYPE html>

<html>
    <?php include 'header.inc'?>
<head>
<meta charset="utf-8" />
<title>MapBox</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
	

</head>
<body>
    <!-- show coordinates in webpage for developing/debugging purposes -->
    <style type="text/css">
      #map {
        height: 70%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
       #displayhelp {
        display: block;
        position: relative;
        margin: 0px auto;
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        font-size: 12px;
        text-align: center;
        color: #222;
        background: #fff;
        }
    </style>

   <!-- Geocoder API -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
    <link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
        type="text/css"
    />
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

 <!-- ======= Contact Section ======= -->    
    <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Submit Entry</h2>
          <ol>
            <li><a href="welcome_user.php">Home</a></li>
			<li>Contact Us</li>
            <li>Submit Entry</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
    </main>
 
    <!-- Set map -->     
    <div id="map"></div>
    <div id="displayhelp">
        Select the location you want to report an incident: 
    </div>
    
    
    <main id="main">
  <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>10 Dover Dr, Singapore 138683</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Registrar@SingaporeTech.edu.sg</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>Tel: +65 6592 1189<br>Fax: +65 6592 1190</p>
                </div>
              </div>
            </div>

          </div>
	  
	  <div class="col-lg-6">
              <form action="confirmationW.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="pid" class="form-control" id="pid" placeholder="Your PID" data-rule="minlen:1" data-msg="Please enter <b>your</b> PID." />
                  <div class="validate"></div>
                </div>
              </div>
		
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="lon" class="form-control" id="lon" placeholder="Your Longitude" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lat" class="form-control" id="lat" placeholder="Your Latitude" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              </div>
                  
                <div>
                  <input type="text" name="location" class="form-control" id="location" placeholder="Your location based on nearest road name">
                </div>
                  
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
                  
              <div class="form-group">
		<label>Select lane number applicable for <b>road works</b> report</label>
                    <select class="c-form-type" id="rLane_no" data-rule="required" data-msg="Please select lane">
                        <option value="Type">Select...</option>
                        <option value="nil">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option> 
                    </select><br>
                    <div class="validate"></div>
                <br><label>Select <b>start date of road work</b></label>
                <input type="date" id="sw_date" data-rule="required" data-msg="Please select start date"><br>
                <div class="validate"></div>
                <label>Select <b>end date of road work</b></label>
                <input type="date" id="ew_date" data-rule="required" data-msg="Please select end date"><br>
                <div class="validate"></div>
                <label>Input duration of road work in <b>hours</b></label>
                <input type="text" id="est_duration" data-rule="required" data-msg="Please enter duration">	    
                <div class="validate"></div>
		</div>
               
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
                <div class="text-center"><button type="submit">Next</button></div>
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	

  </main><!-- End #main -->


</body>
 
  <!-- Mapbox Script -->
<script>
	    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVndWVtYXN0ZXIiLCJhIjoiY2s3aG45dDQ0MGM4YzNmbGxiM3JqaXBlaCJ9.UXkXKi2Cq8veJTtkUYq8wg';
        
        // Set scorlling boundaries to Singapore Map
        var bounds = [
            [103.56480861951604, 1.154021455003118], // Southwest coordinates[lng, lat]
            [104.13164125586022, 1.518896810581026] // Northeast coordinates[lng, lat]
        ];

        // Set map 
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/fuguemaster/ck7ho8svq54td1ip8d8w18vmt', // stylesheet location
            center: [103.8198, 1.3521], // starting position [lng, lat], Singapore
            zoom: 12, // starting zoom
            maxBounds: bounds // Sets bounds as max
        });
    
        // Marker settings
            var marker = new mapboxgl.Marker({
            draggable: false
            });
        // create marker: mouse on click event
        map.on('click', function(e) {  

            marker.setLngLat(e.lngLat);
            marker.addTo(map);
           
            document.getElementById('displayhelp').innerHTML = 
                    'Select the location you want to report an incident: '
                    + '<br>' + 'Longitude: ' + e.lngLat.lng + '<br>' + 'Latitude: ' + e.lngLat.lat;
          
        });

        // Geocoder function
        map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
        }));
    </script>
<?php include'footer.inc' ?>

</html>
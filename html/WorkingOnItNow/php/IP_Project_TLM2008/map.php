<!DOCTYPE html>
<html lang="n">
     <?php include 'header.inc'?>
  <head>

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
      }s
    </style>
  </head>
  <body>
      <div id="map"></div>
    <script>
      var map;
      var infowindow = new google.maps.InfoWindow();
      
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 1.3521, lng: 103.8198},
          zoom: 10
        });
        
        // Load GeoJson file
        map.data.loadGeoJson(
            'assets/geojson/enter_issue.geojson');
    
        // Show info window on mouse click event
        map.data.addListener('click', function(event) {
            var feat = event.feature;
            var html = '<b>' + feat.getProperty('iid')+"<br>"
                        + feat.getProperty('timestamp')+"<br>"
                        + feat.getProperty('comments')+"<br>"
                        + feat.getProperty('type')+"<br>"
                        + feat.getProperty('location')+"<br>"
                        + feat.getProperty('pid')+"</b>";
            infowindow.setContent("<div style='width:150px; text-align: center;'>"+html+"</div>");
            infowindow.setPosition(feat.getGeometry().get());
            infowindow.setOption({pixelOffset: new google.maps.Size(0,-34)});
            infowindow.open(map);
        });
      }
      google.maps.event.addDomListener(window,'load', initMap);
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


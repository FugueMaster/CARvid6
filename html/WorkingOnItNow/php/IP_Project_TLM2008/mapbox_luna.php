<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>MapBox</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; height: 100% }
</style>
</head>
<body>
    <!-- show coordinates in webpage for developing/debugging purposes -->
    <style type="text/css">
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
    

    <!-- Set map -->
    <div id="map"></div>
    <div id="displayhelp">
        Select the location you want to report an incident: 
    </div>

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
            zoom: 14, // starting zoom
            maxBounds: bounds // Sets bounds as max
        });
    

        // create marker: mouse on click event
        map.on('click', function(e) {  

            // Marker settings
            var marker = new mapboxgl.Marker({
            draggable: false
            })

            .setLngLat(e.lngLat)
            .addTo(map);
           
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
    

</body>
</html>
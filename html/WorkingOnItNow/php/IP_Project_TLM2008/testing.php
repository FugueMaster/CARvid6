<html>
    <body style="background-color: #DDD">
        <table style="width: 800px">
            <tr>
                <td>Input</td>
                <td>Output</td>
            </tr>
            <tr>
                <td valign="top" style="width: 50%; height: 400px">
                    <p>
                        <label>Latitude:</label>
                        <input type="text" id="latitude" value="37.7397" />
                    </p>
                    <p>
                        <label>Longitude:</label>
                        <input type="text" id="longitude" value="-121.4252" />
                    </p>
                    <p>
                        <input type="text" id="propertyname1" value="date" />
                        <input type="text" id="propertyvalue1" value="20190509" />
                    </p>
                    <p>
                        <input type="text" id="propertyname2" value="foo" />
                        <input type="text" id="propertyvalue2" value="bar" />
                    </p>
                    <p> 
                    <!-- starts here -->
                        <button type="button" onclick="createGeoJSON()">Create GeoJSON</button>
                    </p>
                </td>
                <td valign="top" style="width: 50%; height: 400px">
                    <textarea id="output" style="width: 100%; height: 400px"></textarea>
                </td>
            </tr>
        </table>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/geojson/0.5.0/geojson.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
        // starts here
            var out;
            const createGeoJSON = () => {
                const data = [
                    {
                        lat: document.getElementById("latitude").value,
                        lng: document.getElementById("longitude").value
                    }
                ];
                data[0][document.getElementById("propertyname1").value] = document.getElementById("propertyvalue1").value;
                data[0][document.getElementById("propertyname2").value] = document.getElementById("propertyvalue2").value;
                const dataGeoJSON = GeoJSON.parse(data, { Point: ["lat", "lng"] });
                out = JSON.stringify(dataGeoJSON, null, 4);
                document.getElementById("output").value = out;
            }
            createGeoJSON();
            
        </script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $.post("testJQuery.js",
                    {
                        name: "Donald Duck",
                        city: "Duckburg"
                    },
                    function(data,status){
                        alert("Data: " + data + "\nStatus: " + status);
                    });
                });
            });
        </script>
    </body>
</html>
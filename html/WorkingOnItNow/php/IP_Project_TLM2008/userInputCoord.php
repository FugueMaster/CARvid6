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
                        <input type="text" id="latitude" value="" />
                    </p>
                    <p>
                        <label>Longitude:</label>
                        <input type="text" id="longitude" value="" />
                    </p>
                    <p>
                        <input type="text" id="propertyname1" value="date" />
                        <input type="text" id="propertyvalue1" value="" />
                    </p>
                    <p>
                        <input type="text" id="propertyname2" value="foo" />
                        <input type="text" id="propertyvalue2" value="" />
                    </p>
                    <p> 
                    <!-- starts here -->
                        <button type="button" onclick="createGeoJSON()">Create GeoJSON</button>
                        <!-- <a download="addgeojson.txt" id="downloadlink" style="display: none">Download</a> -->
                        <button id="downloadBtn">Download</button>
                        <a id="downloadAnchorElem" style="display:none"></a>

                    </p>
                </td>
                <td valign="top" style="width: 50%; height: 400px">
                    <textarea id="output" style="width: 100%; height: 400px"></textarea>
                </td>
            </tr>
        </table>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/geojson/0.5.0/geojson.min.js"></script>

        <script>
        // starts here
            var out;
            var testjson;
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

            document.getElementById("downloadBtn").addEventListener("click", downloadFile);

            function downloadFile() {
                //document.getElementById("downloadAnchorElem");
                var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(out);
                var dlAnchorElem = document.getElementById('downloadAnchorElem');
                dlAnchorElem.setAttribute("href",     dataStr     );
                dlAnchorElem.setAttribute("download", "test.geojson");
                dlAnchorElem.click();
            }

             

        </script>
    </body>
</html>
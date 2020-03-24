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
                        <label>Longitude:</label>
                        <input type="text" id="longitude" value="" />
                    </p>
                    <p>
                        <label>Latitude:</label>
                        <input type="text" id="latitude" value="" />
                    </p>
                    <p>
                        <input type="text" id="iid" value="Issue No." />
                        <input type="text" id="iid_value" value="" />
                    </p>
                    <p>
                        <input type="text" id="timestamp" value="Time Reported" />
                        <input type="text" id="timestamp_value" value="" />
                    </p>
                    <p>
                        <input type="text" id="comments" value="Comments" />
                        <input type="text" id="comments_value" value="" /> 
                    </p>
                    <p>
                        <input type="text" id="type" value="Issue Type" />
                        <input type="text" id="type_value" value="" />
                    </p>
                    <p>
                        <input type="text" id="location" value="Location" />
                        <input type="text" id="location_value" value="" />
                    </p>
                    <p>
                        <input type="text" id="pid" value="Username" />
                        <input type="number" id="pid_value" value="" />
                    </p>
                    <p>
                        <input type="text" id="icon" value="Icon" />
                        <input type="text" id="icon_value" value="" />
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
                data[0][document.getElementById("iid").value] = document.getElementById("iid_value").value;
                data[0][document.getElementById("timestamp").value] = document.getElementById("timestamp_value").value;
                data[0][document.getElementById("comments").value] = document.getElementById("comments_value").value;
                data[0][document.getElementById("type").value] = document.getElementById("type_value").value;
                data[0][document.getElementById("location").value] = document.getElementById("location_value").value;
                data[0][document.getElementById("pid").value] = document.getElementById("pid_value").value;
                data[0][document.getElementById("icon").value] = document.getElementById("icon_value").value;




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
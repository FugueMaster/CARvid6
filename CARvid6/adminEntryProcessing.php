<?php
	session_start();
	if (!isset($_SESSION['Username']))
	{
	header("Location:login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header2.inc' ?>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ip_schema";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `enter_issue` ORDER BY iid DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc()
?>

    <style>
        .admin {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <body style="background-color: #DDD; margin-top:100px">
        <div class="admin">
        <table style="width: 800px">
            <tr>
                <td>Input</td>
                <td>Output</td>
            </tr>
            <tr>
                <td valign="top" style="width: 50%; height: 400px">
                    <p>
                        <label>Longitude:</label>
                        <input type="text" id="longitude" value="<?php echo $row["lon"] ?>" />
                    </p>
                    <p>
                        <label>Latitude:</label>
                        <input type="text" id="latitude" value="<?php echo $row["lat"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="iid" value="Issue No." />
                        <input type="text" id="iid_value" value="<?php echo $row["iid"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="timestamp" value="Time Reported" />
                        <input type="text" id="timestamp_value" value="<?php echo $row["timestamp"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="comments" value="Comments" />
                        <input type="text" id="comments_value" value="<?php echo $row["comments"] ?>" /> 
                    </p>
                    <p>
                        <input type="text" id="type" value="Issue Type" />
                        <input type="text" id="type_value" value="<?php echo $row["type"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="location" value="Location" />
                        <input type="text" id="location_value" value="<?php echo $row["location"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="pid" value="Username" />
                        <input type="number" id="pid_value" value="<?php echo $row["pid"] ?>" />
                    </p>
                    <p>
                        <input type="text" id="icon" value="Icon" />
                        <input type="text" id="icon_value" value="<?php echo $row["icon"] ?>" />
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
        </div>

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
                data[0]["iid"] = document.getElementById("iid_value").value;
                data[0]["timestamp"] = document.getElementById("timestamp_value").value;
                data[0]["comments"] = document.getElementById("comments_value").value;
                data[0]["type"] = document.getElementById("type_value").value;
                data[0]["location"] = document.getElementById("location_value").value;
                data[0]["pid"] = document.getElementById("pid_value").value;
                data[0]["icon"] = document.getElementById("icon_value").value;




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
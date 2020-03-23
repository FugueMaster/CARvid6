
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
 <?php include 'header2.inc'?>
<link rel="stylesheet" href="assets/css/display_data.css">
<body>
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

$sql = "SELECT * FROM enter_issue E, breakdown B where E.iid = B.iid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IID</th><th>Time</th><th>Date</th><th>Comment</th><th>Type</th><th>Longitude</th><th>Latitude</th><th>Location</th><th>PID</th><th>Carplate</th><th>Lane Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["iid"]. "</td><td>" . $row["timestamp"]."</td><td>" . $row["r_date"]."</td><td>". $row["comments"]. " </td><td>" . $row["type"]." </td><td>" . $row["lon"]." </td><td>" . $row["lat"]."</td><td> ". $row["location"]."</td><td> " . $row["pid"]."</td><td>" . $row["carplate"]."</td><td>" . $row["lane_no"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>


<?php include 'footer.inc'?>
  </body>

</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
 <?php include 'header.inc'?>

<link rel="stylesheet" href="assets/css/display_data.css">
<?php
//assign required variables for db connection link
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip_schema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);//connection to database
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM enter_issue E, roadworks R where E.iid = R.iid ";//for displaying of all road workrs info for user in webpage
$result = $conn->query($sql);//send query to mysql server

if ($result->num_rows > 0) {
    echo "<h2><u><b>Road Works</b></u></h2>";
    echo "<table><tr><th>IID</th><th>Time</th><th>Date</th><th>Comment</th><th>Location</th><th>Lane Number</th><th>Start Date(yyyy-mm-dd)</th><th>End Date(yyyy-mm-dd)</th><th>Estimated Duration</th></tr>";
    // output data of each row
    /* fetch associative array */
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["iid"]. "</td><td>" . $row["timestamp"]."</td><td>" . $row["r_date"]."</td><td>". $row["comments"]. " </td><td>". $row["location"]."</td><td>" . $row["lane_no"]."</td><td>" . $row["S_Date"]."</td><td>" . $row["E_Date"]."</td><td>". $row["est_duration"]."</td></tr>";//retrieve attribute data from database into table
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


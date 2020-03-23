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

$sql = "SELECT * FROM enter_issue E, roadworks R where E.iid = R.iid ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IID</th><th>Time</th><th>Date</th><th>Comment</th><th>Location</th><th>Lane Number</th><th>Start Date(yyyy-mm-dd)</th><th>End Date(yyyy-mm-dd)</th><th>Estimated Duration</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["iid"]. "</td><td>" . $row["timestamp"]."</td><td>" . $row["r_date"]."</td><td>". $row["comments"]. " </td><td>". $row["location"]."</td><td>" . $row["lane_no"]."</td><td>" . $row["S_Date"]."</td><td>" . $row["E_Date"]."</td><td>". $row["est_duration"]."</td></tr>";
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


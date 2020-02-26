<?php
$con = mysqli_connect("localhost","root","LunE_1224","ip_schema"); // localhost, my_user, password, schema
// to get connection from mysql workbench

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
if ($result = mysqli_query($con, "SELECT * FROM enter_issue")) { // connection, "select sql query"
  echo "Returned rows are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con); // close connection
?>
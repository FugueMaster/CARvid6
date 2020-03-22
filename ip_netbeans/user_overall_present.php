<link rel="stylesheet" href="display_data.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "issues";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM enter_issue";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IID</th><th>Time</th><th>Date</th><th>Comment</th><th>Type</th><th>Longitude</th><th>Latitude</th><th>Location</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["iid"]. "</td><td>" . $row["timestamp"]."</td><td>" . $row["r_date"]."</td><td>". $row["comments"]. " </td><td>" .$row["type"]. " </td><td>" . $row["lon"]." </td><td>" . $row["lat"]."</td><td> ". $row["location"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>


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

$sql = "SELECT * FROM person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>PID</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["pid"]. "</td><td>" . $row["pass"]. "</td><tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>


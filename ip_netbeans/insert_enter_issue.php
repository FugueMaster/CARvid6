<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
Time(hh:mm:ss)<input type="text" name="time" /><br><br>
Date(yyyy-mm:dd)<input type="text" name="date" /><br><br>
<label for="types">Type </label>
<select>
    <option value="accident">Accident</option>
    <option value="breakdown">Breakdown</option>
    <option value="heavy traffic">Heavy Traffic</option>
    <option value="closure">Closure</option>
    <option value="roadworks">Roadworks</option>
</select>
 : <input type="text" name="pid" /><br><br>
Location: <input type="text" name="location" /><br><br>
<input type="submit" />

<?php
$iid = filter_input(INPUT_POST, 'iid');
$pid = filter_input(INPUT_POST, 'pid');
$location = filter_input(INPUT_POST, 'location');
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

$sql = "INSERT INTO enter_issue (pid,location)
VALUES ('$iid','$location');";
$sql .= "INSERT INTO enter_issue (pid,location)
VALUES ('$iid','$location');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




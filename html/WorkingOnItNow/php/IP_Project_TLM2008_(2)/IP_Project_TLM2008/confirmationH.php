<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Confirmation page of Entry form</title>
    
    </head>
  
    <body>
        <?php 
        //heavy traffic
        $hMessage=filter_input(INPUT_POST,'message');
        $hLon = filter_input(INPUT_POST,'lon');
        $hLat = filter_input(INPUT_POST, 'lat');
        $hLocation = filter_input(INPUT_POST, 'location');
        $hPid = filter_input(INPUT_POST, 'pid');
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ip_schema";
        $name=filter_input(INPUT_POST, 'name');
        $email=filter_input(INPUT_POST, 'email');      

    // Create connection
        $conn1 = new mysqli($servername, $username, $password, $dbname);
        $conn2 = new mysqli($servername, $username, $password, $dbname);
          $conn=$conn1=$conn2;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$conn1->query("INSERT INTO enter_issue(timestamp, r_date, comments, type, lon, lat, location, pid, icon)"
            . "VALUES (NOW(), NOW(), '$hMessage', 'heavy traffic', '$hLon', '$hLat', '$hLocation', '$hPid', 'assets/geojson/heavytraffic.png');");

$iid=$conn1->insert_id;
$conn2->query("INSERT INTO heavy_traffic(iid) VALUES ($iid);");

echo "The submission is successful!<br>";
echo "Thank you <b>'$name'</b> of PID number <b>'$hPid'</b> with <b>'$email'</b> for the heavy traffic report.";

    $conn->close();
        ?>  
    </body>
    
</html>
            


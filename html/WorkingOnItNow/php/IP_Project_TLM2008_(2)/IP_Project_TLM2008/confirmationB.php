<!DOCTYPE html>

<html lang="en">
      <?php include 'header.inc';?>
    <head>
        <title>Confirmation page of Entry form</title>
    </head>
  
    <body>
        <?php 
        //get variable from form input for breakdown and validate
        $bLane_no= filter_input(INPUT_POST, 'lane_no');
        $bCarplate= filter_input(INPUT_POST, 'carplate');
        $bMessage=filter_input(INPUT_POST,'message');
        $bLon = filter_input(INPUT_POST,'lon');
        $bLat = filter_input(INPUT_POST, 'lat');
        $bLocation = filter_input(INPUT_POST, 'location');
        $bPid = filter_input(INPUT_POST, 'pid');
        
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

        $conn1->query("INSERT INTO enter_issue(timestamp, r_date, comments, type, lon, lat, location, pid)"
            . "VALUES (NOW(), NOW(), '$bMessage', 'breakdown', '$bLon', '$bLat', '$bLocation', '$bPid');");

        $iid=$conn1->insert_id;
        $conn2->query("INSERT INTO breakdown(iid,lane_no,carplate) VALUES ($iid,'$bLane_no','$bCarplate');");
        
        //print out when form submission is successful
        echo "The submission is successful!<br>";
        echo "Thank you <b>'$name'</b> of PID number <b>'$aPid'</b> with <b>'$email'</b> for the vehicle breakdown report.";

        $conn->close();
        
        ?>  
    </body>
    
</html>
            


<!DOCTYPE html>

<!--Confirmation page for Accidents-->
<html lang="en">
    <head>
        <title>Confirmation page of Entry form</title>
    </head>
  
    <body>
        <?php 
        //get variable from form input for accident and validate
        $aLane_no = filter_input(INPUT_POST, 'lane_no');
        $aMessage = filter_input(INPUT_POST,'message');
        $aLon = filter_input(INPUT_POST,'lon');
        $aLat = filter_input(INPUT_POST, 'lat');
        $aLocation = filter_input(INPUT_POST, 'location');
        $aPid = filter_input(INPUT_POST, 'pid');
        
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
            . "VALUES (NOW(), NOW(), '$aMessage', 'accident', '$aLon', '$aLat', '$aLocation', '$aPid', 'assets/geojson/accident.jpg');");


        $conn1->query("INSERT INTO enter_issue(timestamp, r_date, comments, type, lon, lat, location, pid)"
        . "VALUES (NOW(), NOW(), '$aMessage', 'accident', '$aLon', '$aLat', '$aLocation', '$aPid');");

        $iid=$conn1->insert_id;
        $conn2->query("INSERT INTO accidents(iid,lane_no) VALUES ($iid,'$aLane_no');");
        
        //print out when form submission is successful
        echo "The submission is successful!<br>";
        echo "Thank you <b>'$name'</b> of PID number <b>'$aPid'</b> with <b>'$email'</b> for the accident report.";

        $conn->close();
        
        ?>  
    </body>
    
</html>
            


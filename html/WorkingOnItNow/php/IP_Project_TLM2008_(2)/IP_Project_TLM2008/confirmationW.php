<!DOCTYPE html>

<html lang="en">
      <?php include 'header.inc';?>
    <head>
        <title>Confirmation page of Entry form</title>
    </head>
  
    <body>
        <?php 
        //get variable from form input for road works and validate
        $wLane_no= filter_input(INPUT_POST, 'lane_no');
        $sw_date= filter_input(INPUT_POST, 's_date');
        $ew_date= filter_input(INPUT_POST, 'e_date');
        $eEst_duration = filter_input(INPUT_POST, 'est_duration');
        $wMessage=filter_input(INPUT_POST,'message');
        $wLon = filter_input(INPUT_POST,'lon');
        $wLat = filter_input(INPUT_POST, 'lat');
        $wLocation = filter_input(INPUT_POST, 'location');
        $wPid = filter_input(INPUT_POST, 'pid');
        
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
            . "VALUES (NOW(), NOW(), '$wMessage', 'road works', '$wLon', '$wLat', '$wLocation', '$wPid');");

        $iid=$conn1->insert_id;

        $conn2->query("INSERT INTO roadworks(iid,lane_no) VALUES ($iid,'$wLane_no','$sw_date','$ew_date','$eEst_duration');");

        //print out when form submission is successful
        echo "The submission is successful!<br>";
        echo "Thank you <b>'$name'</b> of PID number <b>'$aPid'</b> with <b>'$email'</b> for the road work report.";

        $conn->close();
        ?>  
    </body>
    
</html>
            


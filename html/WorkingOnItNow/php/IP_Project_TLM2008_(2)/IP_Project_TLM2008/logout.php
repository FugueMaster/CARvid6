<?php
session_start();    //creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
session_destroy();  //destroys all session variable
header('Location:index.php');
exit;

?>




<?php
$e = $_POST['id'] ;  // name of the input field is â€™usernameâ€™
$p = $_POST['passwd'];

$conn=mysqli_connect("localhost","root","","ip_schema");


$sql="SELECT*FROM person WHERE pid='$e' and pass='$p'";
$search_result=mysqli_query($conn,$sql);    // search table NOW!


//Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound>=1)
	{

	session_start();
	$_SESSION['MM_Username']=$e;
    header("Location:welcome.php");
	}
	
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


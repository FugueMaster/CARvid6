<?php
$e = $_POST['adid'] ;  // name of the input field is ’username’
$p = $_POST['pass_'];

$conn=mysqli_connect("localhost","root","","ip_schema");


$sql="SELECT*FROM admin WHERE aid='$e' and passw='$p'";
$search_result=mysqli_query($conn,$sql);    // search table NOW!


//Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound>=1)
	{

	session_start();
	$_SESSION['Username']=$e;
    header("Location:welcome.php");
	}
	
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


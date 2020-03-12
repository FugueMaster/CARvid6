<?php
$e = $_POST['mail'] ;  // name of the input field is â€™usernameâ€™
$p = $_POST['passwd'] ;

$conn=mysqli_connect("localhost","root","","152751w");


$sql="SELECT*FROM user WHERE Email='$e' and pass='$p' ";
$search_result=mysqli_query($conn,$sql);    // search table NOW!


//Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound>=1)
	{

	session_start();
	$_SESSION['MM_Username']=$e;

    header("Location:Homepage.php");

	}
	else
{

// User record is NOT found in the userinfo table
header("Location:Login.php?error=1");  	// go back to login page
}
?>

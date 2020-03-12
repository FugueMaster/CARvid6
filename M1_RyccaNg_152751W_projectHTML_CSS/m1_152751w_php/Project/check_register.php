<?php


$f = $_POST['firstname'];
$l = $_POST['lastname'];
$a = $_POST['address'];
$e = $_POST['mail'];
$c = $_POST['code'];
$p = $_POST['passwd'];


$conn=mysqli_connect("localhost", "root", "", "152751w");

$insert_sql="insert into user (FirstName,LastName,Address,Email,PostalCode,pass) values ('$f','$l','$a','$e','$c','$p');";
$result=mysqli_query($conn , $insert_sql);
if ($result==1)
{
    header("Location:Login.php?ok=1");
}
else
{
    header("Location:Register.php?error=2");
}

?>

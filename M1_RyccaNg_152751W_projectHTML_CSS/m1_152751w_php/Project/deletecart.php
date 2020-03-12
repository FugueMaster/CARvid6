<?php
session_start();
if (!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );
$sql="DELETE from productdetails where ProductName=".$_POST['productName'];

$deleted = mysqli_query ( $conn, $sql);

echo $deleted;
header("Location:ShowCart.php");

?>
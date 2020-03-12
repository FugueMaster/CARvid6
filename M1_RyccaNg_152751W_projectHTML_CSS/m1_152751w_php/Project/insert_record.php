<?php

session_start();

if(!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );

$productName=$_POST['productName'];
$ProductID=$_POST['productID'];
$UnitPrice=$_POST['price'];
$Quantity=$_POST['quantity'];

$sql="INSERT INTO orderdetails(ProductName,ProductID,Price,Quantity)VALUES('$productName', '$ProductID', '$UnitPrice','$Quantity')";
$result=mysqli_query($conn, $sql);
echo $result;
echo $productName;

header("Location:ShowCart.php");

?>
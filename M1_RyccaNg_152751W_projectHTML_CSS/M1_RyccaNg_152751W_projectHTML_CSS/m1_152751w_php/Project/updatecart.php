<?php
session_start();
if (!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );
// update cart set qty=2 where id=5
$newqty = $_POST['nqty'];
$sql="UPDATE cart SET Quantity= '$newqty' where ProductID=".$_POST['productID'];
$updated = mysqli_query ( $conn, $sql);

//echo $updated;
header("Location:ShowCart.php");

?>
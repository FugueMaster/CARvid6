<?php
session_start();
if (!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );
// update cart set qty=2 where id=5
$sql="insert into ShowCart select * from orderdetails where username='". $_SESSION['MM_Username']."'";
 mysqli_query ( $conn, $sql);

$sql_delete="delete from cart where username='".$_SESSION['MM_Username']."'";
mysqli_query ( $conn, $sql_delete);

header("Location:ShowCart.php");

?>
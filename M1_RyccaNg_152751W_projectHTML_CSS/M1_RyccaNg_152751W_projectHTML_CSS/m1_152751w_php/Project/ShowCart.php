<?php

session_start();
if (!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );
//$sql=select*from orderdetails where username='mary';
$sql="SELECT*FROM orderdetails";
$cart_list = mysqli_query ( $conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>

    </head>
    <body>
    <div id="wrapper" style="height:995px;">
    <header>
    <div id="logo">
        <a href="Homepage.html" title="HomePage"><img src="images/LOGO.jpg"/></a>
     </div>

    <form id="hform">
    SEARCH: <input type="text" name="search" id="searchbar" min="0" max="50" style="width:300px; height:18px;"/>
            <input type="button" value="GO" style="height:18px; font-size:14px;"/>

    </form>
        <nav id="mainNav">
            <ul id="test">
            <li><a href="Login.html" title="Login">LOGIN  |</a></li>
			<li><a href="Register.html" title="Register">REGISTER</a></li>
            </ul>
        </nav>

    <div id="shoppingcart">
        <a href="ShoppingCartPage.html" title="ShoppingCartPage"><img src="images/Shoppingcart.png"/></a>
    </div>
        </header>
        <section id="section1">
        <nav id="subNav">
            <ul>
          <p>MUSIC CATEGORY</p>

          <li><a href="MusicGenres.html" title="Genre"><img src="images/ArrowNav.png">Genre</a></li>
          <li><a href="MusicGenres.html" title="Music"><img src="images/ArrowNav.png">Music</a></li>
          <li><a href="DeliveryDetails.html" title="deliverydetails"><img src="images/ArrowNav.png">
                 Delivery Details</a></li>
          <li><a href="ShoppingCartPage.html" title="Pre-Orders"><img src="images/ArrowNav.png">Pre-Orders</a></li>
          <p>NEW ARRIVALS</p>
          <li><a href="MusicGenres.html" title="FeaturedProducts"><img src="images/ArrowNav.png">Featured Products</a></li>
          <li><a href="Best%20Sellers.html" title="TopSellingProducts"><img src="images/ArrowNav.png">
                Top Selling Products</a></li>
          <p>BROWSE BY</p>
          <li><a href="ArtistList.html" title="Artists"><img src="images/ArrowNav.png">Artists</a></li>
          <li><a href=".html" title="Recent Releases"><img src="images/ArrowNav.png">Recent Releases<br>
                &lt;BY MONTH&gt;</a></li>
            </ul>
            </nav>


        <section id="Shoppingcartpg">
        <h1>Current Order Status</h1>
<table width="200" border="1">
		<tr>
				<th scope="col"><b>productName</b></th>
				<th scope="col"><b>ProductID</b></th>
				<th scope="col"><b>Quantity</b></th>
				<th scope="col"><b>Unit Price</b></th>
				<th scope="col"><b>Total Cost</b></th>
		        <th scope="col"><b>Delivery Type</b></th>
</tr>
<?php
$grandTotal=0;

while ( $one_item = mysqli_fetch_assoc($cart_list))
{
?>
<tr>
		  <td><?php echo $one_item['ProductName'];?></td>
		  <td><?php echo $one_item['ProductID'];?></td>
		  		  <td>
		  		  <form method="post" action="deletecart.php" >
		  		  <input type="hidden" name="productID" value="<?php echo $one_item['ProductID'];?>">
		  		  <input type="submit" value="Delete">
		  		  </form>

		  		  <br>
		  		  <form method="post" action="updatecart.php">
		  		  <input type="submit" value="Update Qty">
		  		      <br/>
		  		  <input type="number" name="nqty" value="<?php echo $one_item['Quantity'];?>">
		  		      <br/>
		  		  <input type="hidden" name="productID" value="<?php echo $one_item['ProductID'];?>">
		  		  Current Qty:<?php echo $one_item['Quantity'];?><br/>


		  		  </form>
</td>
		  <td><?php echo $one_item['Price'];?></td><br>



<td>
<?php

 $totalCost=$one_item['Price']*$one_item['Quantity'];
 $grandTotal=$grandTotal+$totalCost;
 echo $totalCost;

 ?>
</td>
<td><?php echo$one_item['DeliveryType'];?></td><br>


</tr>
<?php
}
?>
<tr>
<td colspan="4">
Grand Total : $
<?php

echo $grandTotal;

?>

</table>
    <br/><br/>
<form action="checkout.php" method="post">
<input type="hidden" name="Username" value="<?php echo $_SESSION['MM_Username'];?>">
<input type="submit" value="Checkout">
</form>


    </section>

	        <footer>
	        <nav id="footerNav">
	        <ul>
	        <li><a href="AboutUs.html" title="AboutUs">About Us</a></li>
	        <li><a href="Site Feedback.html" title="SiteFeedback">Site Feedback</a></li>
	        <li><a href="YourOrders.html" title="YourOrders">Your Orders</a></li>
	        <li><a href="OrderHistory.html" title="OrderHistory">Order History</a></li>
	        <li><a href="Help.html" title="Help">Help</a></li>
	        <li><a href="ContactUs.html" title="Contact Us">Contact Us</a></li><br>
	         <p>2016�Copyrights RY Music CD Online Store All Rights Reserved</p>

	        </ul>
	        </nav>
	        <div id="copyright">

	        </div>
	        </footer>


	        </div>

	    </body>

</html>
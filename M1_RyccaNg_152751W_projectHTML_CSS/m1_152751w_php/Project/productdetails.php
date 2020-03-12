
<?php
$selected_image=$_GET['Image'];
$conn = mysqli_connect("localhost", "root", "","152751w" );
$sql="SELECT*FROM products WHERE Image='$selected_image'";
$selected_product=mysqli_query($conn, $sql);
$productdetails=mysqli_fetch_assoc($selected_product);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>

    </head>
    <body>
    <div id="wrapper">
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
            <li><a href="login.html" title="Login">LOGIN  |</a></li>
			<li><a href="register.html" title="Register">REGISTER</a></li>
            </ul>
        </nav>

    <div id="shoppingcart">
    <a href="DeliveryDetails.html" title="ShoppingCartPage"><img src="images/Shoppingcart.png"/></a>
    </div>
        </header>
        <section id="section1">
        <nav id="subNav">
            <ul>
          <p>MUSIC CATEGORY</p>

          <li><a href="MusicGenres.html" title="Genre"><img src="images/ArrowNav.png">Genre</a></li>
          <li><a href="MusicGenres.html" title="Music"><img src="images/ArrowNav.png">Music</a></li>
          <li><a href="ShoppingCartPage.html" title="deliverydetails"><img src="images/ArrowNav.png">
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

        <article id="BSsection2">

        <div class="r1">
        <h3>Best Sellers</h3>
         <p><a href="Logout.php">Log Out</a></p>
        <table>
				<tr>
				<td>
				<img src="images/products/<?php echo $productdetails['Image'];?>">

				<form id="form2" name="form2" method="post" action="insert_record.php">
				  ProductID: <?php echo $productdetails['ProductID'];?><br>
				  Name: <?php echo $productdetails['ProductName'];?><br>
				  Description:<?php echo $productdetails['Description'];?><br>
				  Price: <?php echo $productdetails['Price'];?><br>
				<input type="submit"name="submit" id="submit" value="Add to Cart"/>
				<input type="hidden" name="productName" value="<?php echo $productdetails['ProductName'];?>">
				<input type="hidden" name="price" value="<?php echo $productdetails['Price'];?>">
				<input type="hidden" name="productID" value="<?php echo $productdetails['ProductID'];?>">

				 </td>

				</form>
				</div>
</table>



        </section>


        <footer>
        <nav id="footerNav">
        <ul>
        <li><a href="AboutUs.html" title="AboutUs">About Us</a></li>
        <li><a href="Site Feedback.html" title="SiteFeedback">Site Feedback</a></li>
        <li><a href="YourOrders.html" title="YourOrders">Your Orders</a></li>
        <li><a href="OrderHistory" title="OrderHistory">Order History</a></li>
        <li><a href="Help.html" title="Help">Help</a></li>
        <li><a href="ContactUs.html" title="Contact Us">Contact Us</a></li><br>
         <p>2016©Copyrights RY Music CD Online Store All Rights Reserved</p>

        </ul>
        </nav>
        <div id="copyright">

        </div>
        </footer>


        </div>

    </body>

</html>






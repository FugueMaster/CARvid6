<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/MGstyle.css">
<title></title>
<?php
//session_start();
//if (!isset($_SESSION['MM_Username']))
//{
//header("Location:Login.php");
//}
$filter ="";
if(isset($_POST['Cont']))
{
	$cont_selected = $_POST['Cont'];
	$filter = " WHERE genre='$cont_selected'";
}

//open connection and select database
$conn = mysqli_connect("localhost", "root", "","152751w" );

//Write an SQL statement to extract all countries from country table
$sql_country = "SELECT*FROM products".$filter;

//execute the SQL statement
$country_list = mysqli_query( $conn, $sql_country );

//Write an SQL statement to extract a list of continents from country table
$sql_continent = "SELECT DISTINCT genre FROM products";

//execute the SQL statement -- $continent_list contains all the countries in the country table
$continent_list=mysqli_query( $conn, $sql_continent);



?>

</head>

</head>
    <body>
     <div id="wrapper">
	    <header>
	    <div id="logo">
	        <a href="Homepage.php" title="HomePage"><img src="images/LOGO.jpg"/></a>
	     </div>

	    <form id="hform">
	    SEARCH: <input type="text" name="search" id="searchbar" min="0" max="50"/>
	            <input type="button" value="GO" style="height:18px; font-size:14px;"/>

	    </form>
	        <nav id="mainNav">
	            <ul id="test">
	            <li><a href="Login.php" title="Login">LOGIN  |</a></li>
				<li><a href="Register.php" title="Register">REGISTER</a></li>
	            </ul>
	        </nav>

	    <div id="shoppingcart">
	    <a href="showCart.php" title="ShoppingCartPage"><img src="images/Shoppingcart.png"/></a>
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



 <article id="MGsection2">

        <div class="R1">
      <h3>Music Categories</h3>
       <p><a href="Logout.php">Log Out</a></p>
        <form id="form1" name="form1" method="post">
	         Select genre:
	    <select name="Cont" id="Cont">
	  <?php While ( $one_continent = mysqli_fetch_assoc($continent_list)  ) { ?>

	      	<option value="<?php echo  $one_continent['genre']; ?>">
	  			<?php echo  $one_continent['genre']; ?>
	          </option>

	    	<?php } ?>
	    </select>
	    <input type="submit" name="submit" id="submit" value="Show genre">
	  </form>
	              <br/>
	              <br/>


<div class="con" style="width:1000px; margin:0 auto;">
   <div style="width:100%; ">&nbsp;</div>

     <?php While ( $one_continent = mysqli_fetch_assoc($country_list)  ) { ?>
     <div id="genres"><a href="productdetails.php?Image=<?php echo $one_continent['Image'];?>"><img src="images/products/<?php echo $one_continent['Image'];?>" width=200px; height=200px; alt/><p><?php echo $one_continent['ProductName']; ?><br><?php echo $one_continent['Price']; ?>
     <input type="submit" name="submit" id="submit" value="Add Cart"></a></p></div>


 <?php }  ?>
        </div>

 </article>

        </section>


        <footer>
	           <nav id="footerNav">
	           <ul>
	           <li><a href="AboutUs.php" title="AboutUs">About Us</a></li>
	           <li><a href="ContactUs.php" title="SiteFeedback">Site Feedback</a></li>
	           <li><a href="showCart.php" title="YourOrders">Your Orders</a></li>
	           <li><a href="showTransact.php" title="OrderHistory">Order History</a></li>
	           <li><a href="Help.php" title="Help">Help</a></li>
	           <li><a href="ContactUs.php" title="Contact Us">Contact Us</a></li><br>
	            <p>2016©Copyrights RY Music CD Online Store All Rights Reserved</p>

	           </ul>
	           </nav>
	           <div id="copyright">

	           </div>
	           </footer>


	           </div>

	       </body>

</html>
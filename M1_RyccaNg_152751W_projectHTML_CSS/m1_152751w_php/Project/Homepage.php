<?php
	session_start();
	if (!isset($_SESSION['MM_Username']))
	{
	header("Location:Login.php");
    }
    $conn = mysqli_connect("localhost", "root", "","152751w" );
$sql_continent = "SELECT*FROM products where genre='Pop Music'";

//execute the SQL statement -- $continent_list contains all the countries in the country table
$continent_list=mysqli_query( $conn, $sql_continent);



?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Homestyle.css">
    <title></title>

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
         <p><a href="Logout.php">Log Out</a></p>
        <nav id="subNav">
            <ul>

          <p>MUSIC CATEGORY</p>

          <li><a href="MusicGenres.php" title="Genre"><img src="images/ArrowNav.png">Genre</a></li>
          <li><a href="MusicGenres.php" title="Music"><img src="images/ArrowNav.png">Music</a></li>
          <li><a href="orderhistory.php" title="deliverydetails"><img src="images/ArrowNav.png">
                 Delivery Details</a></li>
          <li><a href="ShoppingCartPage.html" title="Pre-Orders"><img src="images/ArrowNav.png">Pre-Orders</a></li>
          <p>NEW ARRIVALS</p>
          <li><a href="MusicGenres.php" title="FeaturedProducts"><img src="images/ArrowNav.png">Featured Products</a></li>
          <li><a href="BestSellers.php" title="TopSellingProducts"><img src="images/ArrowNav.png">
                Top Selling Products</a></li>
          <p>BROWSE BY</p>
          <li><a href="ArtistList.html" title="Artists"><img src="images/ArrowNav.png">Artists</a></li>
          <li><a href=".html" title="Recent Releases"><img src="images/ArrowNav.png">Recent Releases<br>
                &lt;BY MONTH&gt;</a></li>
            </ul>
            </nav>

        <article id="imageslider">
        <h1>Home</h1>
            <img class="sliders" src="images/imageslider.png"/>
            <img class="sliders" img src="images/taylorswift.jpeg"/>
            <img class="sliders" img src="images/hillsongunited_empires.jpeg"/>
            </article>
        </section>
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {

            var i;
            var x = document.getElementsByClassName("sliders");
            for(i=0;i<x.length;i++)
                {
                    x[i].style.display="none";
                }
            myIndex++;
            if(myIndex>x.length){
            myIndex=1
                }
            x[myIndex-1].style.display="block";
            setTimeout(carousel,2000);

        }




        </script>

        <section class="section2">


        <h3>Best Sellers</h3>
        <a href="productdetails.php">

            <?php While ( $one_continent = mysqli_fetch_assoc($continent_list)  )
            { ?>

			    <div class="img"><a href="productdetails.php?Image=<?php echo $one_continent['Image'];?>"><img src="images/bestsellers/<?php echo $one_continent['Image'];?>" width=200px; height=200px; alt/><p><?php echo $one_continent['ProductName']; ?><br><?php echo $one_continent['Price']; ?>
     <input type="submit" name="submit" id="submit" value="Add Cart"></a></p></div>

<?php  } ?>
</div>
</div>
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
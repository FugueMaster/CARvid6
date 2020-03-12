<?php
{
session_start();
session_unset();
session_destroy();
}
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Loginstyle.css">
    <title></title>

    </head>
    <body>
    <div id="wrapper" style="height:995px;">
    <header>
    <div id="logo">
        <a href="Homepage.html" title="HomePage"><img src="images/LOGO.jpg"/></a>
     </div>

    <form id="hform">
    SEARCH: <input type="text" name="search" id="searchbar" min="0" max="50"/>
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

        </section>
        <section id="loginsection">
        <form id="login"  method="post" action="check_login.php">
        <h3>Login Page</h3>
        LoginID or Email Address*<br><input type="text" name="mail" id="mail" size="80" style="height:20px;" ><br><br>
        Password*<br><input type="text" name="passwd" id="passwd" size="60" style="height:20px;"/><br><br><br>
         <input type="submit" name="submit" value="LOGIN" style="height:20px; font-size:16px;"/>
         <p>Forgotten your password?</p>
         <?php if(isset($_GET['error'])) echo "<b>Invalid username or password</b>";?>
        </form>
        </section>




        <footer>
        <nav id="footerNav">
        <ul>
        <li><a href="AboutUs.html" title="AboutUs">About Us</a></li>
        <li><a href="Site Feedback.html" title="SiteFeedback">Site Feedback</a></li>
        <li><a href="ShoppingCart.html" title="YourOrders">Your Orders</a></li>
        <li><a href="AboutUs.html" title="OrderHistory">Order History</a></li>
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
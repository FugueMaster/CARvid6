<?php
{
session_start();
session_unset();
session_destroy();
}
?>
<!DOCTYPE html>
<html>
     <?php include 'header.inc'?>
        <section id="loginsection">
        <form id="login"  method="post" action="check_login.php">
        <h3>Login Page</h3>
        LoginID*<br><input type="text" name="id" id="id" size="80" style="height:20px;" ><br><br>
        Password*<br><input type="text" name="passwd" id="passwd" size="60" style="height:20px;"/><br><br><br>
         <input type="submit" name="submit" value="LOGIN" style="height:20px; font-size:16px;"/>
         <p>Forgotten your password?</p>
         <?php if(isset($_GET['error'])) echo "<b>Invalid username or password</b>";?>
        </form>
        </section>
    </body>

     <?php include 'footer.inc'?>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


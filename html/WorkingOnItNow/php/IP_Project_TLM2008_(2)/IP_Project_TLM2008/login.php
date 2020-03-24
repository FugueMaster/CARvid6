<?php
{
session_start();
session_unset();
session_destroy();
}
?>
<!DOCTYPE html>
<html>
    
    <style>
        #loginsection {
            margin-left: 400px;
            color: #191970;
        }
       
        </style>
        
        <body>
     <?php include 'header3.inc'?>
        <section id="loginsection">
        <form id="login"  method="post" action="check_login.php">
        <h3>Login Page</h3>
        <b>LoginID</b><br><input type="text" name="adid" id="id" size="30" style="height:20px;" ><br><br>
        <b>Password</b><br><input type="text" name="pass_" id="passwd" size="30" style="height:20px;"/><br><br><br>
         <input type="submit" name="submit" value="Login"/>
         <p>Forgotten your password?</p>
         <?php if(isset($_GET['error'])) echo "<b>Invalid username or password</b>";?>
        </form>
        </section>
    </body>

     <?php include 'footer.inc'?>
</html>
<?php session_start() ?>



<html>
    <head>
        <title>Welcome to Login System</title>

    </head>

    <body style="text-align: center;">
        <form action="checkuser.php" method="post">


            <tr>
                <td>

                    <a href="index.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Register</a> |
                    <a href="contact.php">Contact</a> |
                    <a href="help.php">Help</a>

                </td>
            </tr>


            <br><br><br><br><br><br>

            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="username"></td></tr><br>

            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="password"></td></tr><br><br>

            <tr><td><input type="submit" name="submit" value="Login"></td></tr>
        </form>

    </body>
</html>



<?php if(isset($_SESSION['msgname']))  echo $_SESSION['msgname']; ?><br>
<?php if(isset($_SESSION['msgpass']))  echo $_SESSION['msgpass']; ?>
<?php session_unset() ?>



<?php if(isset($_SESSION['msg']))  echo $_SESSION['msg']; ?><br>
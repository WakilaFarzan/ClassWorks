<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row ['id']);
//var_dump($row ['name']);
//var_dump($row ['email']);
//var_dump($row ['username']);
//var_dump($row ['password']);
//exit;
?>



<html>
    <head>
        <title>Update User Information</title>
    </head>

    <body style="text-align: center;">

        <ul style="none">
            <li>

                <a href="index.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Register</a> |
                <a href="contact.php">Contact</a> |
                <a href="help.php">Help</a>

            </li>
        </ul>


            <br><br><br><br><br><br>

        <form action="update.php" method="post">

            <input type="hidden" name="id" value="<?php echo $row['id'];?>">

            <label>Name:</label>
            <label><input type="text" name="name" value="<?php echo $row['name'];?>"></label><br><br>

            <label>Email:</label>
            <label><input type="email" name="email" value="<?php echo $row['email'];?>"></label><br><br>

            <label>Username:</label>
            <label><input type="text" name="username" value="<?php echo $row['username'];?>"></label><br><br>

            <label>Password:</label>
            <label><input type="password" name="password" value="<?php echo $row['password'];?>"></label><br><br>

            <input type="submit" name="submit" value="Update">
        </form>
    </body>
</html>
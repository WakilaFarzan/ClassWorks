<html>
<head>
    <title>Welcome to Login System</title>
</head>

<body style="text-align: center;">
<tr>
    <td>

        <a href="dashboard.php">Dash Board</a> |
        <a href="index.php">Home</a> |
        <a href="list.php">All User</a> |
        <a href="contact.php">Contact</a> |
        <a href="help.php">Help</a> |
        <a href="logout.php">Logout</a>

    </td>
</tr>
</body>
</html>

<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

session_start();


if(isset($_SESSION['name'])){
    echo "Hello " . $_SESSION['name'] . "<br>";
    echo "Your email is " .$_SESSION['email']. "<br>";
    echo "You are Registered at " . $_SESSION['created'] . "<br>";
}
else{
    header("location:index.php");
}



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
    header("location:homepage.php");
}

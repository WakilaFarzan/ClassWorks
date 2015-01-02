<?php

if(isset($_POST['name']) && empty($_POST['name']))
{

    header('location:registration.php');
}
elseif(isset($_POST['email']) && empty($_POST['email']))
{

    header('location:registration.php');
}
elseif(isset($_POST['username']) && empty($_POST['username']))
{

    header('location:registration.php');
}
elseif(isset($_POST['password']) && empty($_POST['password']))
{

    header('location:registration.php');
}
else{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $link = mysqli_connect("localhost", "root", "allah@03", "ftfl");

    $query = "INSERT INTO `ftfl`.`users`(`name`, `email`, `username`, `password`, `created`, `modified`)
                      VALUES ('$name', '$email', '$username', '$password', current_timestamp, current_timestamp)";

    mysqli_query($link, $query);


    header('location:homepage.php');
}
?>
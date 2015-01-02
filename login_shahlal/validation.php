<?php

if(isset($_POST['name']) && empty($_POST['name']))
{
    //echo "Name Required";
    header('location:registration.php');
}
elseif(isset($_POST['email']) && empty($_POST['email']))
{
     //echo "Email Required";
     header('location:registration.php');
}
elseif(isset($_POST['username']) && empty($_POST['username']))
{
    //echo "User Name Required";
    header('location:registration.php');
}
elseif(isset($_POST['password']) && empty($_POST['password']))
{
    //echo "Password Required";
    header('location:registration.php');
}
else{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");

    $query = "INSERT INTO `loginsystem`.`users`(`name`, `email`, `username`, `password`, `created`, `modified`)
                      VALUES ('$name', '$email', '$username', '$password', current_timestamp, current_timestamp)";

    mysqli_query($link, $query);


    header('location:list.php');
}
?>
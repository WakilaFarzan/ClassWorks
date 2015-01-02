<?php

$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");


$query = "UPDATE `loginsystem`.`users` SET `name` = '".$name."',
                                            `email` = '".$email."',
                                            `username` = '".$username."',
                                            `password` = '".$password."',
    WHERE `users`.`id` = $id;";

mysqli_query($link, $query);

//header('location:list.php');
?>
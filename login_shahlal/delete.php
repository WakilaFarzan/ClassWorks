<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");

$query = "DELETE FROM `loginsystem`.`users` WHERE `users`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>
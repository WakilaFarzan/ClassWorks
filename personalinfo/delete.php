<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "DELETE FROM `ftfl`.`profile` WHERE `profile`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
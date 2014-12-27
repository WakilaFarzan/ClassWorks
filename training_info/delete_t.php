<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "DELETE FROM `ftfl`.`traininginfo` WHERE `traininginfo`.`id` = $id";

mysqli_query($link, $query);

header('location:list_t.php');
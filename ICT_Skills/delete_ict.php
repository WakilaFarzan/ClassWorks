<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "DELETE FROM `ftfl`.`ictskills` WHERE `ictskills`.`id` = $id";

mysqli_query($link, $query);

header('location:list_ict.php');
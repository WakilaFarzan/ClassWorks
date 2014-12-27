<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "DELETE FROM `ftfl`.`reference` WHERE `reference`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_referenceinfo.php');
?>

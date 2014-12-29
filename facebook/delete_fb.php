<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

$query = "DELETE FROM `ftflbook`.`facebook` WHERE `facebook`.`id` = $id";

mysqli_query($link, $query);

header('location:list_fb.php');
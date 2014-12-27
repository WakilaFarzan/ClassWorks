<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query="UPDATE `ftfl`. `ictskills` SET `experience_category`='".$_POST['experience_category']."',
                                `skill_description`='".$_POST['skill_description']."',
                                `extra_activity`='".$_POST['extra_activity']."' WHERE `ictskills`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_ict.php');
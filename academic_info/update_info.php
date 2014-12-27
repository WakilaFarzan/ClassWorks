<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query ="UPDATE `ftfl`. `academicinfo` SET `lvl_of_edu`='".$_POST['lvl_of_edu']."',
`degree`='".$_POST['degree']."',`group`='".$_POST['group']."',`institute`='".$_POST['institute']."',
`result`='".$_POST['result']."',`year`='".$_POST['year']."',`duration`='".$_POST['duration']."',
`achievement`='".$_POST['achievement']."',`complete_status`='".$_POST['complete_status']."' WHERE `academicinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_info.php');


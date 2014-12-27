<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");
$query="UPDATE  `ftfl`. `traininginfo` SET `title`='".$_POST['training_title']."',
                    `description`='".$_POST['training_description']."',`institute`='".$_POST['institute']."',`address`='".$_POST['address']."',
                    `year`='".$_POST['training_year']."',`duration`='".$_POST['duration']."',`start_date`='".$_POST['start_date']."',
                    `end_date`='".$_POST['end_date']."',`course_title`='".$_POST['course_title']."',`trainer_detail`='".$_POST['trainer_detail']."' WHERE `traininginfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_t.php');

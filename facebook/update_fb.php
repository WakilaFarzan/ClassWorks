<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query ="UPDATE `ftfl`.`facebook` SET  `first_name`='".$_POST['first_name']."',
                                            `last_name`='".$_POST['last_name']."',
                                            `email`='".$_POST['email']."',
                                            `password`='".$_POST['password']."',
                                            `birth_day`='".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
                                            `gender`='".$_POST['gender']."',
                                            `hobby`='".$_POST['hobby']."',
                                            `food`='".$_POST['food']."',
                                            `comment`='".$_POST['comment']."',
                                            `modified`=NOW()

    WHERE `facebook`.`id` = $id;";
//echo $query;
mysqli_query($link, $query);

header('location:list_fb.php');



//`created`=NOW(),`modified`=NOW ()
<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

$query="INSERT INTO `ftflbook`.`facebook` (
                                            `first_name` ,
                                            `last_name` ,
                                            `femail` ,
                                            `password` ,
                                            `birth_day` ,
                                            `gender` ,
                                            `hobby` ,
                                            `food` ,
                                            `comment` ,
                                            `created` ,
                                            `modified`
)
VALUES (
    '".$_POST['first_name']."','".$_POST['last_name']."', '".$_POST['femail']."', '".$_POST['password']."', '".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
    '".$_POST['gender']."', '".$_POST['hobby']."', '".$_POST['food']."', '".$_POST['comment']."', NOW(),'');";







mysqli_query($link, $query);

header('location:list_fb.php');

//.$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day'].;
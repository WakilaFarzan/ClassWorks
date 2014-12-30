<?php
$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$foods = $_POST['food'];

$query="INSERT INTO `ftfl`.`facebook` (
                                            `first_name` ,
                                            `last_name` ,
                                            `email` ,
                                            `password` ,
                                            `birth_day` ,
                                            `gender` ,
                                            `hobby` ,
                                            `food1`,
                                            `food2`,
                                            `food3`,
                                            `food4`,
                                            `comment` ,
                                            `created` ,
                                            `modified`
)
VALUES (
    '".$_POST['first_name']."','".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['password']."',
     '".$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day']."',
    '".$_POST['gender']."', '".$_POST['hobby']."','".$foods[0]."','".$foods[1]."','".$foods[2]."','".$foods[3]."',
     '".$_POST['comment']."', NOW(),'');";







mysqli_query($link, $query);

header('location:list_fb.php');

//.$_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day'].;
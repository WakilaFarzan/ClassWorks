<?php
$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query="INSERT INTO `ftfl`.`traininginfo` (
                                            `title` ,
                                            `description` ,
                                            `institute` ,
                                            `address` ,
                                            `year` ,
                                            `duration` ,
                                            `start_date` ,
                                            `end_date` ,
                                            `course_title` ,
                                            `trainer_detail`
)
VALUES (
              '".$_POST['training_title']."',  '".$_POST['training_description']."',  '".$_POST['institute']."',  '".$_POST['address']."',
              '".$_POST['training_year']."',  '".$_POST['duration']."',  '".$_POST['start_date']."',  '".$_POST['end_date']."',
                '".$_POST['course_title']."',  '".$_POST['trainer_detail']."'
);";

mysqli_query($link, $query);

header('location:list_t.php');
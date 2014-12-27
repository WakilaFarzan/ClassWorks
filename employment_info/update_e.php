<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query="UPDATE `ftfl`. `employmentinfo` SET `company_name`= '".$_POST['company_name']."',
                                `company_business`= '".$_POST['company_business']."',`address`= '".$_POST['address']."',
                                `designation`= '".$_POST['designation']."',
                                `department`= '".$_POST['department']."',`from`= '".$_POST['from']."',`to`= '".$_POST['to']."',
                                `duration`= '".$_POST['duration']."',`responsibility`= '".$_POST['responsibility']."'
                                WHERE `employmentinfo`.`id` = $id;";
mysqli_query($link, $query);

header('location:list_e.php');
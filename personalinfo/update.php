<?php


$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "UPDATE `ftfl`.`profile` SET `name`='".$_POST['name']."',`father`='".$_POST['father']."',
`mother`='".$_POST['mother']."',`gender`='".$_POST['gender']."',`religion`='".$_POST['religion']."',`date_of_birth`='".$_POST['bday']."',
`national_id`='".$_POST['national_id']."',`birth_reg`='".$_POST['birth_reg']."',`passport_num`='".$_POST['passport_num']."',
`ssc_board`='".$_POST['sscboard']."',`ssc_roll`='".$_POST['ssc_roll']."',`hsc_board`='".$_POST['hscboard']."',`hsc_roll`='".$_POST['hsc_roll']."',
`laptop`='".$_POST['laptop']."',`exam_center`='".$_POST['center']."',`mobile`='".$_POST['mobile']."',`home_phone`='".$_POST['home_phone']."',
`emergency_contact`='".$_POST['emergency']."',`email`='".$_POST['email']."',`alternate_email`='".$_POST['alt_email']."',
`current_location`='".$_POST['current_location']."',`present_address`='".$_POST['present_address']."',`parmanent_address`='".$_POST['parmanent_address']."' WHERE `profile`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');


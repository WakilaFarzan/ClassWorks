

<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

//$values = implode(',', $_POST['hobby']);

//$cvalue= implode(',', $_POST['city']);

$hobby = implode(',', $_POST['hobby']);

$food  = '';
if(array_key_exists('food1',$_POST) && !empty($_POST['food1']))
{
    $food  .= $_POST['food1'];
}

if(array_key_exists('food2',$_POST)  && !empty($_POST['food2']))
{
    $food  .=','. $_POST['food2'];
}

if(array_key_exists('food3',$_POST)  && !empty($_POST['food3']))
{
    $food  .=','. $_POST['food3'];
}

if(array_key_exists('food4',$_POST)  && !empty($_POST['food4']))
{
    $food  .=','. $_POST['food4'];
}

$city = implode(',', $_POST['city']);

$query="INSERT INTO `ftflbook`.`multiple` (
                                            `first_name` ,
                                            `hobby` ,
                                            `food` ,
                                            `city` ,
                                            `created` ,
                                            `modified`
)
VALUES (
             '".$_POST['first_name']."','".$hobby."','".$food."','".$city."', NOW(),''
        );";

mysqli_query($link, $query);
//var_dump($query);
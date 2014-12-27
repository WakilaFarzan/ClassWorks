<?php
$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);

$sql = "INSERT INTO `ftfl`.`image` ( `image`, `image_name`)
    VALUES ( '.$image.', '.$image_name.');";

mysqli_query($link, $sql);

header('location:image2.php');


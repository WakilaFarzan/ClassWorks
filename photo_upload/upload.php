<?php

mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$name= $_FILES ["image"]["name"];
$type= $_FILES ["image"]["type"];
$size= $_FILES ["image"]["size"];
$temp= $_FILES ["image"]["tmp_name"];
$error= $_FILES ["image"]["error"];

if($error>0)

    die ("error! uploading file..code $error.");
else{
    move_uploaded_file($temp,"uploaded/".$name);
    echo "File uploaded";
}

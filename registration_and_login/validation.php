<?php

if (isset($_POST['submit'])) {

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    //else {
        //header('location:registration.php');
    //}
   if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    }

    $link = mysqli_connect("localhost",
        "root",
        "allah@03",
        "ftfl");

    $query = "INSERT INTO `ftfl`.`registration` (
                                            `name` ,
                                            `email` ,
                                            `username` ,
                                            `password` ,
                                            `created` ,
                                            `modified`
)
VALUES (
                 '" . $name . "', '" . $email . "', '" . $username . "',
                 '" . $password . "', NOW(), ''
);";

    mysqli_query($link, $query);
}

else{

    header('location:registration.php');
}




?>
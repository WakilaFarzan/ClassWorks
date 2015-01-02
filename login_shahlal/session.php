<?php


session_start();
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$_SESSION['time']  = time();

?>
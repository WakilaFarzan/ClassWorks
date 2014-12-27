<?php
$link = mysqli_connect("localhost",
                        "root",
                        "allah@03",
                        "ftfl");

$query="INSERT INTO `ftfl`.`employmentinfo` (
                                            `company_name` ,
                                            `company_business` ,
                                            `address` ,
                                            `designation` ,
                                            `department` ,
                                            `from` ,
                                            `radio` ,
                                            `to` ,
                                            `duration` ,
                                            `responsibility`
)
VALUES (
            '".$_POST['company_name']."',  '".$_POST['company_business']."',
            '".$_POST['address']."',  '".$_POST['designation']."',
            '".$_POST['department']."',  '".$_POST['from']."', '".$_POST['radio']."',  '".$_POST['to']."',
            '".$_POST['duration']."',  '".$_POST['responsibility']."'
);";

mysqli_query($link, $query);

header('location:list_e.php');

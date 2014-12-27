<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query="INSERT INTO `ftfl`.`academicinfo` (
                                            `lvl_of_edu` ,
                                            `degree` ,
                                            `group` ,
                                            `institute` ,
                                            `result` ,
                                            `year` ,
                                            `duration` ,
                                            `achievement` ,
                                            `complete_status`
)
VALUES (
      '".$_POST['lvl_of_edu']."', '".$_POST['degree']."','".$_POST['group']."',
     '".$_POST['institute']."', '".$_POST['result']."',
  '".$_POST['year']."', '".$_POST['duration']."', '".$_POST['achievement']."','".$_POST['complete_status']."'
);";


mysqli_query($link, $query);

header('location:list_info.php');

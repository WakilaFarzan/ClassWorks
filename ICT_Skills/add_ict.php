
<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");


$query="INSERT INTO `ftfl`.`ictskills` (
                                    `experience_category` ,
                                    `skill_description` ,
                                    `extra_activity`
)
VALUES (
                '".$_POST['experience_category']."', '".$_POST['skill_description']."', '".$_POST['extra_activity']."'
);";


mysqli_query($link, $query);

header('location:list_ict.php');

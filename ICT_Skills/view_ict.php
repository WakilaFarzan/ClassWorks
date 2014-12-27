<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from ictskills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>
<h4 align="center" style="color:darkturquoise">View Information</h4>
<hr>

<table border="1" width="60%" align="center" >

    <tr style="color:blue">
        <td>Field Name</td>
        <td>Description</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>

        <tr>
            <td>Experience Category</td>
            <td><?php echo $row['experience_category'] ?></td>
        </tr>
        <tr>
            <td>Skill Description </td>
            <td><?php echo $row['skill_description'] ?></td>
        </tr>
        <tr>
            <td> Extracurricular Activities</td>
            <td><?php echo $row['extra_activity'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list_ict.php">Go to List</a>
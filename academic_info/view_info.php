<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from academicinfo WHERE id = $id";

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
            <td>Level of Education</td>
            <td><?php echo $row['lvl_of_edu'] ?></td>
        </tr>
        <tr>
            <td>Degree Name</td>
            <td><?php echo $row['degree'] ?></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><?php echo $row['group'] ?></td>
        </tr>
        <tr>
            <td>Institute</td>
            <td><?php echo $row['institute'] ?></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><?php echo $row['result'] ?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo $row['year'] ?></td>
        </tr>
        <tr>
            <td>Duration</td>
            <td><?php echo $row['duration'] ?></td>
        </tr>
        <tr>
            <td>Achievement</td>
            <td><?php echo $row['achievement'] ?></td>
        </tr>
        <tr>
            <td>Completion Status</td>
            <td><?php echo $row['complete_status'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list_info.php">Go to Home</a>
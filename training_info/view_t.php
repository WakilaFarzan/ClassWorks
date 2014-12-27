<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from traininginfo WHERE id = $id";

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
            <td>Training Title</td>
            <td><?php echo $row['title'] ?></td>
        </tr>
        <tr>
            <td>Training Description</td>
            <td><?php echo $row['description'] ?></td>
        </tr>
        <tr>
            <td>Institute</td>
            <td><?php echo $row['institute'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address'] ?></td>
        </tr>
        <tr>
            <td>Training Year</td>
            <td><?php echo $row['year'] ?></td>
        </tr>
        <tr>
            <td>Duration</td>
            <td><?php echo $row['duration'] ?></td>
        </tr>
        <tr>
            <td>Start Date</td>
            <td><?php echo $row['start_date'] ?></td>
        </tr>
        <tr>
            <td>End Date</td>
            <td><?php echo $row['end_date'] ?></td>
        </tr>
        <tr>
            <td>Course Title</td>
            <td><?php echo $row['course_title'] ?></td>
        </tr>
        <tr>
            <td>Trainer Detail</td>
            <td><?php echo $row['trainer_detail'] ?></td>
        </tr>




    <?php
    }

    ?>

</table>

<a href="list_t.php">Go to Home</a>
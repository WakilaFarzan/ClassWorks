<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from employmentinfo WHERE id = $id";

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
            <td>Company Name</td>
            <td><?php echo $row['company_name'] ?></td>
        </tr>
        <tr>
            <td>Company Business</td>
            <td><?php echo $row['company_business'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address'] ?></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><?php echo $row['designation'] ?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><?php echo $row['department'] ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?php echo $row['from'] ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?php echo $row['to'] ?></td>
        </tr>
        <tr>
            <td>Employment Duration</td>
            <td><?php echo $row['duration'] ?></td>
        </tr>
        <tr>
            <td>Responsibility</td>
            <td><?php echo $row['responsibility'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list_e.php">Go to List</a>
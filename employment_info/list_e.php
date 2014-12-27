<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from employmentinfo;";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>Company Name</td>
        <td>Company Business</td>
        <td>Address</td>
        <td>Designation</td>
        <td>Department</td>
        <td>From</td>
        <td>To</td>
        <td>Employment Duration</td>
        <td>Responsibility</td>
        <td>Action</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['company_name']?></td>
            <td><?php echo $row['company_business']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['designation']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['from']?></td>
            <td><?php echo $row['to']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['responsibility']?></td>

            <td> <a href="view_e.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_e.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_e.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>


</table>
</br>
<a href="create_e.html">Add New</a>
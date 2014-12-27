<?php

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from traininginfo;";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Training Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
        <td>Course Details</td>
        <td>Start Date</td>
        <td>Course Title</td>
        <td>Trainer Detail</td>
        <td>Action</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course_title']?></td>
            <td><?php echo $row['trainer_detail']?></td>

            <td> <a href="view_t.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_t.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_t.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>


</table>
</br>
<a href="create_t.html">Add New</a>
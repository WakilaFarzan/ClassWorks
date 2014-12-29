<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

$query = "select * from facebook;";

$result = mysqli_query($link, $query);


?>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Birthday</td>
        <td>Gender</td>
        <td>Hobby</td>
        <td>Food</td>
        <td>Comment</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['femail']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['birth_day']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['food']?></td>
            <td><?php echo $row['comment']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>

            <td> <a href="view_fb.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_fb.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_fb.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>




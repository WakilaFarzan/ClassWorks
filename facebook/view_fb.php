<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from facebook WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>

<table border="1" width="60%">

    <tr>
        <td>Field Name</td>
        <td>Description</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>

        <tr>
            <td>First Name</td>
            <td><?php echo $row['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $row['last_name'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row['email'] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $row['password'] ?></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><?php echo $row['birth_day'] ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $row['gender'] ?></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td><?php echo $row['hobby'] ?></td>
        </tr>
        <tr>
            <td>Food</td>
            <td><?php echo $row['food'] ?></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><?php echo $row['comment'] ?></td>
        </tr>
        <tr>
            <td>Created</td>
            <td><?php echo $row['created'] ?></td>
        </tr>
        <tr>
            <td>Modified</td>
            <td><?php echo $row['modified'] ?></td>
        </tr>

    <?php
    }

    ?>

</table>

<a href="list_fb.php">Go to Home</a>
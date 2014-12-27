<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from reference WHERE id = $id";

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
            <td>Name</td>
            <td><?php echo $row['name'] ?></td>
        </tr>
        <tr>
            <td>Organization</td>
            <td><?php echo $row['organization'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address'] ?></td>
        </tr>
        <tr>
            <td>Relation</td>
            <td><?php echo $row['relation'] ?></td>
        </tr>
        <tr>
            <td>Phone Office</td>
            <td><?php echo $row['phone_office'] ?></td>
        </tr>
        <tr>
            <td>Phone Home</td>
            <td><?php echo $row['phone_home'] ?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><?php echo $row['mobile'] ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $row['email'] ?></td>
        </tr>




    <?php
    }

    ?>

</table>

<a href="list_referenceinfo.php">Go to List</a>
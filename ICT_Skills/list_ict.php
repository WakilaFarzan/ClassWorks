<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from ictskills;";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>Experience Category</td>
        <td>Skill Description</td>
        <td>Extracurricular Activities</td>
        <td>Action</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['experience_category']?></td>
            <td><?php echo $row['skill_description']?></td>
            <td><?php echo $row['extra_activity']?></td>

            <td> <a href="view_ict.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_ict.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_ict.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>


</table>
</br>
<a href="create_ict.html">Add New</a>
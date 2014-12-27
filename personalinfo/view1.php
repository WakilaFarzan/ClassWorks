<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from profile WHERE id = $id";

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
            <td>Name</td>
            <td><?php echo $row['name'] ?></td>
        </tr>
        <tr>
            <td>Father</td>
            <td><?php echo $row['father'] ?></td>
        </tr>
        <tr>
            <td>Mother</td>
            <td><?php echo $row['mother'] ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $row['gender'] ?></td>
        </tr>
        <tr>
            <td>Religion</td>
            <td><?php echo $row['religion'] ?></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><?php echo $row['date_of_birth'] ?></td>
        </tr>
        <tr>
            <td>National ID</td>
            <td><?php echo $row['national_id'] ?></td>
        </tr>
        <tr>
            <td>Birth Reg</td>
            <td><?php echo $row['birth_reg'] ?></td>
        </tr>
        <tr>
            <td>Passport Number</td>
            <td><?php echo $row['passport_num'] ?></td>
        </tr>
        <tr>
            <td>SSC Board</td>
            <td><?php echo $row['ssc_board'] ?></td>
        </tr>
        <tr>
            <td>SSC Roll</td>
            <td><?php echo $row['ssc_roll'] ?></td>
        </tr>
        <tr>
            <td>HSC Board</td>
            <td><?php echo $row['hsc_board'] ?></td>
        </tr>
        <tr>
            <td>HSC Roll</td>
            <td><?php echo $row['hsc_roll'] ?></td>
        </tr>
        <tr>
            <td>Laptop</td>
            <td><?php echo $row['laptop'] ?></td>
        </tr>
        <tr>
            <td>Exam Center</td>
            <td><?php echo $row['exam_center'] ?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><?php echo $row['mobile'] ?></td>
        </tr>
        <tr>
            <td>Home Phone</td>
            <td><?php echo $row['home_phone'] ?></td>
        </tr>
        <tr>
            <td>Emergency Contact</td>
            <td><?php echo $row['emergency_contact'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row['email'] ?></td>
        </tr>
        <tr>
            <td>Alternate Email</td>
            <td><?php echo $row['alternate_email'] ?></td>
        </tr>
        <tr>
            <td>Current Location</td>
            <td><?php echo $row['current_location'] ?></td>
        </tr>
        <tr>
            <td>Present Address</td>
            <td><?php echo $row['present_address'] ?></td>
        </tr>
        <tr>
            <td>Permanent Address</td>
            <td><?php echo $row['parmanent_address'] ?></td>
        </tr>
    <?php
    }

?>

</table>

<a href="list.php">Go to Home</a>
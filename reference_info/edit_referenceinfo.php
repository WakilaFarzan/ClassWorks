<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from reference WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_referenceinfo.php" method="post">

        <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

        <label>Name:</label>
        <input type="text" name="Name" value="<?php echo $row["name"];?>" /><p>

        <label>Organization:</label>
        <input type="text" name="organization" value="<?php echo $row["organization"];?>" /><p>

        <label>address:</label>
        <textarea rows="3" cols="50" name="address"><?php echo $row["address"];?></textarea><p>

        <label>relation:</label>
        <input type="text" name="relation" value="<?php echo $row["relation"];?>" /><p>

        <label>Phone office:</label>
        <input type="text" name="phone_office" value="<?php echo $row["phone_office"];?>" /><p>

        <label>phone home</label>
        <input type="text" name="phone_home" value="<?php echo $row["phone_home"];?>" /><p>

        <label>Mobile:</label>
        <input type="text" name="mobile" value="<?php echo $row["mobile"];?>" /><p>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row["email"];?>" /><p>

        <button type="submit">update</button>

</form>

<a href="list_referenceinfo.php">Back to Home</a>



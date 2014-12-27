<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from employmentinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<h4 align="center"  style="color:darkturquoise">Edit Employment Information</h4>
<hr>

<form action="update_e.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Company Name</label><span style="color:red">*</span>
    <input type="text" name="company_name" value="<?php echo $row['company_name']?>" /></br>

    <label>Company Business</label>
    <input type="text" name="company_business" value="<?php echo $row['company_business']?>"/></br>

    <label>Address</label>
    <textarea rows="3" cols="50" name="address"><?php echo $row['address']?></textarea></br>

    <label>Designation</label><span style="color:red">*</span>
    <input type="text" name="designation" value="<?php echo $row['designation']?>"/></br>

    <label>Department</label>
    <input type="text" name="department" value="<?php echo $row['department']?>" /></br>

    <label>From</label><span style="color:red">*</span>
    <input type="date" name="from" value="<?php echo $row['from']?>"/></br>

    <label>To</label>
    <input type="radio" name="radio" <?php if(!empty($row['radio'])) echo 'checked' ?> value="Present" checked>Present
    <input type="radio" name="radio" <?php if(!empty($row['radio'])) echo 'checked' ?>><input type="date" name="to" value="<?php echo $row['to']?>"> </br>

    <label>Employment Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration']?>"/></br>

    <label>Responsibility</label><span style="color:red">*</span>
    <textarea rows="3" cols="50" name="responsibility"><?php echo $row['responsibility']?></textarea></br>


    <button type="submit" align="right">Update</button>


</form>

<a href="list_e.php">Go to List</a></br>
<a href="create_e.html">Add New</a>
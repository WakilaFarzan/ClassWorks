<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

$query = "select * from traininginfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<form action="update_t.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Training Title</label><span style="color:red">*</span>
    <input type="text" name="training_title"  value="<?php echo $row['title'];?>"  /></br>

    <label>Training Description</label><span style="color:red">*</span>
    <textarea rows="3" cols="50" name="training_description"><?php echo $row['description']?></textarea></br>

    <label>Institute</label><span style="color:red">*</span>
    <input type="text" name="institute"  value="<?php echo $row['institute'];?>"  /></br>

    <label>Address</label>
    <textarea rows="3" cols="50" name="address"><?php echo $row['address']?></textarea></br>

    <label>Training Year</label><span style="color:red">*</span>
    <input type="text" name="training_year"  value="<?php echo $row['year'];?>" /></br>

    <label>Duration</label><span style="color:red">*</span>
    <input type="text" name="duration"  value="<?php echo $row['duration'];?>" /></br>

    <h4>Course Details</h4>
    <hr style="border-style:dashed">

    <label>Start Date</label>
    <input type="date" name="start_date"  value="<?php echo $row['start_date'];?>" /></br>

    <label>End Date</label>
    <input type="date" name="end_date"  value="<?php echo $row['end_date'];?>" /></br>

    <label>Course Title</label>
    <input type="text" name="course_title"  value="<?php echo $row['course_title'];?>" /></br>

    <label>Trainer Detail</label>
    <textarea rows="3" cols="50" name="trainer_detail"><?php echo $row['trainer_detail']?></textarea></br>

    <button type="submit" align="right">update</button>


</form>

<a href="list_t.php">Go to List</a>
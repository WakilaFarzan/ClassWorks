<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from academicinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>


<form action="update_info.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Level of Education</label>
    <input type="text" name="lvl_of_edu" value="<?php echo $row['lvl_of_edu'];?>" /></br>

    <label>Degree Name</label><span style="color:red">*</span>
    <input type="text" name="degree" value="<?php echo $row['degree'];?>" /></br>

    <label>Group</label><span style="color:red">*</span>
    <input type="text" name="group" value="<?php echo $row['group'];?>"/></br>

    <label>Institute</label><span style="color:red">*</span>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>"/></br>

    <label>Result</label><span style="color:red">*</span>
    <input type="text" name="result" value="<?php echo $row['result'];?>"/></br>

    <label>Year</label><span style="color:red">*</span>
    <input type="text" name="year" value="<?php echo $row['year'];?>"/></br>

    <label>Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>

    <label>Achievement</label>
    <textarea rows="3" cols="50" name="achievement" value="<?php echo $row['achievement'];?>"></textarea></br>

    <label>Completion Status</label>
    <select name="complete_status">
        <option value="Completed">Completed</option>
        <option value="Not Completed">Not Completed</option>
    </select></br>
    </br>

    <button type="submit" align="right">Update</button>

</form>
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
<h4 align="center"  style="color:darkturquoise">Edit Academic Information</h4>
<hr>

<form action="update_info.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Level of Education</label>
    <select name="lvl_of_edu">
                    <option <?php if($row['lvl_of_edu']=='Diploma') echo 'selected'?> value="Diploma">Diploma</option>
                    <option <?php if($row['lvl_of_edu']=='Bachelor/Honors') echo 'selected'?>  value="Bachelor/Honors">Bachelor/Honors</option>
                    <option <?php if($row['lvl_of_edu']=='Masters') echo 'selected'?>  value="Masters">Masters</option>
                    <option <?php if($row['lvl_of_edu']=='Doctoral') echo 'selected'?>  value="Doctoral">Doctoral</option>
    </select></br>

    <label>Degree Name</label><span style="color:red">*</span>
    <input type="text" name="degree" value="<?php echo $row['degree'];?>" /></br>

    <label>Group</label><span style="color:red">*</span>
    <input type="text" name="group" value="<?php echo $row['group'];?>"/></br>

    <label>Institute</label><span style="color:red">*</span>
    <select name="institute">
        <option value="">---Select---</option>
        <option <?php if($row['institute']=='NSTU') echo 'selected'?> value="NSTU">Noakhali Science & Technology University</option>
        <option <?php if($row['institute']=='BUET') echo 'selected'?> value="BUET">Bangaladesh University of Engineering & Technology</option>
        <option  <?php if($row['institute']=='DU') echo 'selected'?> value="DU">Dhaka University</option>
        <option  <?php if($row['institute']=='CU') echo 'selected'?> value="CU">Chittagong University</option>
    </select></br>

    <label>Result</label><span style="color:red">*</span>
    <input type="text" name="result" value="<?php echo $row['result'];?>"/></br>

    <label>Year</label><span style="color:red">*</span>
    <input type="text" name="year" value="<?php echo $row['year'];?>"/></br>

    <label>Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>

    <label>Achievement</label>
    <textarea rows="3" cols="50" name="achievement"><?php echo $row['achievement'];?></textarea></br>

    <label>Completion Status</label>
    <select name="complete_status">
        <option <?php if($row['complete_status']=='Completed') echo 'selected'?> value="Completed">Completed</option>
        <option <?php if($row['complete_status']=='Not Completed') echo 'selected'?> value="Not Completed">Not Completed</option>
    </select></br>
    </br>

    <button type="submit" align="right">Update</button>

</form>
<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from ictskills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<h4 align="center"  style="color:darkturquoise">Edit ICT Skills Information</h4>
<hr>

<form action="update_ict.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Experience Category</label><span style="color:red">*</span>
    <select name="experience_category">
        <option value="">---Select---</option>
        <option <?php if($row['experience_category']=='Computer Engineering') echo 'selected'?> value="Computer Engineering">Computer Engineering</option>
        <option <?php if($row['experience_category']=='IT/Communication') echo 'selected'?> value="IT/Communication">IT/Communication</option>
        <option <?php if($row['experience_category']=='Accounting') echo 'selected'?> value="Accounting">Accounting</option>
        <option <?php if($row['experience_category']=='Design/Creative') echo 'selected'?> value="Design/Creative">Design/Creative</option>
    </select></br>

    <label>Skill Description </label><span style="color:red">*</span>
    <textarea rows="3" cols="50" name="skill_description"><?php echo $row['skill_description'];?></textarea></br>

    <label> Extracurricular Activities</label>
    <textarea rows="3" cols="50" name="extra_activity"><?php echo $row['extra_activity'];?></textarea></br>

    <button type="submit" align="right">Submit</button>

</form>

<a href="list_ict.php">Go to List</a></br>
<a href="create_ict.html">Add New</a>
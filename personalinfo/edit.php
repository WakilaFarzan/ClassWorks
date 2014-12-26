<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from profile WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);




?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>Name</label><span>*</span>
    <input type="text" name="name" value="<?php echo $row['name'];?>" /></br>

    <label>Father</label><span>*</span>
    <input type="text" name="father" value="<?php echo $row['father'];?>"/></br>

    <label>Mother</label><span>*</span>
    <input type="text" name="mother" value="<?php echo $row['mother'];?>"/></br>

    <label>Gender</label><span>*</span>
    <select name="gender">
        <option <?php if($row['gender'] == 'Male')  echo 'selected' ?> value="Male">Male</option>
        <option <?php if($row['gender'] == 'Female') echo 'selected'  ?> value="Female">Female</option>
        <option <?php if($row['gender'] == 'Others') echo 'selected'  ?>  value="Others">Others</option>
    </select></br>

    <label>Religion</label><span>*</span>
    <select name="religion">
        <option <?php if($row['religion'] == 'Islam')  echo 'selected' ?> value="Islam">Islam</option>
        <option <?php if($row['religion'] == 'Christianity')  echo 'selected' ?> value="Christianity">Christianity</option>
        <option <?php if($row['religion'] == 'Buddhism')  echo 'selected' ?> value="Buddhism">Buddhism</option>
        <option <?php if($row['religion'] == 'Hinduism')  echo 'selected' ?> value="Hinduism">Hinduism</option>
        <option <?php if($row['religion'] == 'Others')  echo 'selected' ?> value="Others">Others</option>
    </select></br>

    <label>Date of Birth</label><span>*</span>
    <input type="date" name="bday" value="<?php echo $row['date_of_birth'];?>"/></br>

    <label>National ID</label><span>*</span>
    <input type="text" name="national_id" value="<?php echo $row['national_id'];?>"/></br>

    <h5>OR</h5></br>

    <label>Birth Reg#</label>
    <input type="text" name="birth_reg" value="<?php echo $row['birth_reg'];?>"/></br>

    <label>Passport Number</label>
    <input type="text" name="passport_num" value="<?php echo $row['passport_num'];?>"/></br>

    <h4>Track Information</h4>
    <hr>

    <label>S.S.C Board</label><span>*</span>
    <select name="sscboard">
        <option <?php if($row['ssc_board'] == 'Dhaka')  echo 'selected' ?> value="Dhaka">Dhaka</option>
        <option <?php if($row['ssc_board'] == 'Chittagong')  echo 'selected' ?> value="Chittagong">Chittagong</option>
        <option <?php if($row['ssc_board'] == 'Comilla')  echo 'selected' ?> value="Comilla">Comilla</option>
        <option <?php if($row['ssc_board'] == 'Rajshahi')  echo 'selected' ?> value="Rajshahi">Rajshahi</option>
        <option <?php if($row['ssc_board'] == 'Sylhet')  echo 'selected' ?> value="Sylhet">Sylhet</option>
        <option <?php if($row['ssc_board'] == 'Jessore')  echo 'selected' ?> value="Jessore">Jessore</option>
        <option <?php if($row['ssc_board'] == 'Dinajpur')  echo 'selected' ?> value="Dinajpur">Dinajpur</option>
        <option <?php if($row['ssc_board'] == 'Barisal')  echo 'selected' ?> value="Barisal">Barisal</option>
        <option <?php if($row['ssc_board'] == 'Madrasha')  echo 'selected' ?> value="Madrasha">Madrashah</option>
        <option <?php if($row['ssc_board'] == 'Technical')  echo 'selected' ?> value="Technical">Technical</option>
        <option <?php if($row['ssc_board'] == 'DIBS')  echo 'selected' ?> value="DIBS">DIBS</option>
        <option <?php if($row['ssc_board'] == 'Others')  echo 'selected' ?> value="Others">Others</option>
    </select></br>

    <label>S.S.C Roll</label><span>*</span>
    <input type="text" name="ssc_roll" value="<?php echo $row['ssc_roll'];?>"/></br>

    <label>H.S.C Board</label><span>*</span>
    <select name="hscboard">
        <option <?php if($row['hsc_board'] == 'Dhaka')  echo 'selected' ?>  value="Dhaka">Dhaka</option>
        <option <?php if($row['hsc_board'] == 'Chittagong')  echo 'selected' ?>value="Chittagong">Chittagong</option>
        <option <?php if($row['hsc_board'] == 'Comilla')  echo 'selected' ?> value="Comilla">Comilla</option>
        <option <?php if($row['hsc_board'] == 'Rajshahi')  echo 'selected' ?>  value="Rajshahi">Rajshahi</option>
        <option <?php if($row['hsc_board'] == 'Sylhet')  echo 'selected' ?> value="Sylhet" >Sylhet</option>
        <option <?php if($row['hsc_board'] == 'Jessore')  echo 'selected' ?> value="Jessore">Jessore</option>
        <option <?php if($row['hsc_board'] == 'Dinajpur')  echo 'selected' ?> value="Dinajpur">Dinajpur</option>
        <option <?php if($row['hsc_board'] == 'Barisal')  echo 'selected' ?> value="Barisal">Barisal</option>
        <option <?php if($row['hsc_board'] == 'Madrasha')  echo 'selected' ?> value="Madrasha">Madrashah</option>
        <option <?php if($row['hsc_board'] == 'Technical')  echo 'selected' ?> value="Technical">Technical</option>
        <option <?php if($row['hsc_board'] == 'DIBS')  echo 'selected' ?> value="DIBS">DIBS</option>
        <option <?php if($row['hsc_board'] == 'Others')  echo 'selected' ?> value="Others">Others</option>
    </select></br>

    <label>H.S.C Roll</label><span>*</span>
    <input type="text" name="hsc_roll" value="<?php echo $row['hsc_roll'];?>"/></br>

    <label>Has Laptop</label>
    <input type="radio" name="laptop" <?php if($row['laptop'] == 'Yes')  echo 'checked' ?> value="Yes" checked>Yes
    <input type="radio" name="laptop" <?php if($row['laptop'] == 'No')  echo 'checked' ?>  value="No">No </br>


    <label>Preferred Exam Center</label><span>*</span>
    <select name="center">
        <option <?php if($row['exam_center'] == 'BCC Dhaka')  echo 'selected' ?> value="BCC Dhaka">BCC Dhaka</option>
        <option <?php if($row['exam_center'] == 'BCC Chittagong')  echo 'selected' ?>  value="BCC Chittagong">BCC Chittagong</option>
        <option <?php if($row['exam_center'] == 'BCC Khulna')  echo 'selected' ?>  value="BCC Khulna">BCC Khulna</option>
        <option <?php if($row['exam_center'] == 'BCC Rajshahi')  echo 'selected' ?>  value="BCC Rajshahi" >BCC Rajshahi</option>
        <option <?php if($row['exam_center'] == 'BCC Sylhet')  echo 'selected' ?>  value="BCC Sylhet" >BCC Sylhet</option>
        <option <?php if($row['exam_center'] == 'BCC Faridpur')  echo 'selected' ?>  value="BCC Faridpur">BCC Faridpur</option>
        <option <?php if($row['exam_center'] == 'BCC Barisal')  echo 'selected' ?>  value="BCC Barisal">BCC Barisal</option>
    </select></br>

    <h4>Contact Information</h4>
    <hr>

    <label>Mobile</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/></br>

    <label>Home Phone</label>
    <input type="text" name="home_phone" value="<?php echo $row['home_phone'];?>"/></br>

    <label>Emergency Contact</label>
    <input type="text" name="emergency" value="<?php echo $row['emergency_contact'];?>"/></br>

    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email'];?>"/></br>

    <label>Alternate Email</label>
    <input type="email" name="alt_email" value="<?php echo $row['alternate_email'];?>"/></br>

    <label>Current Location</label><span>*</span>
    <input type="text" name="current_location"value="<?php echo $row['current_location'];?>" /></br>

    <label>Present Address</label><span>*</span>
    <textarea rows="3" cols="50" name="present_address" value="<?php echo $row['present_address'];?>"></textarea></br>

    <label>Permanent Address</label><span>*</span>
    <textarea rows="3" cols="50" name="permanent_address" value="<?php echo $row['permanent_address'];?>"></textarea></br>

    </br>

    <button type="submit" align="right">Update</button>

</form>

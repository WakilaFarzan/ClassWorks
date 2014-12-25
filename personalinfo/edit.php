<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
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
    <select name="gender";?>">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select></br>

    <label>Religion</label><span>*</span>
    <select name="religion">
        <option value="Islam">Islam</option>
        <option value="Christianity">Christianity</option>
        <option value="Buddhism">Buddhism</option>
        <option value="Hinduism">Hinduism</option>
        <option value="Others">Others</option>
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
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Jessore">Jessore</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Barisal">Barisal</option>
        <option value="Madrasha">Madrashah</option>
        <option value="Technical">Technical</option>
        <option value="DIBS">DIBS</option>
        <option value="Others">Others</option>
    </select></br>

    <label>S.S.C Roll</label><span>*</span>
    <input type="text" name="ssc_roll" value="<?php echo $row['ssc_roll'];?>"/></br>

    <label>H.S.C Board</label><span>*</span>
    <select name="hscboard">
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet" >Sylhet</option>
        <option value="Jessore">Jessore</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Barisal">Barisal</option>
        <option value="Madrasha">Madrashah</option>
        <option value="Technical">Technical</option>
        <option value="DIBS">DIBS</option>
        <option value="Others">Others</option>
    </select></br>

    <label>H.S.C Roll</label><span>*</span>
    <input type="text" name="hsc_roll" value="<?php echo $row['hsc_roll'];?>"/></br>

    <label>Has Laptop</label>
    <input type="radio" name="laptop" value="Yes" checked>Yes
    <input type="radio" name="laptop" value="No">No </br>


    <label>Preferred Exam Center</label><span>*</span>
    <select name="center">
        <option value="BCC Dhaka">BCC Dhaka</option>
        <option value="BCC Chittagong">BCC Chittagong</option>
        <option value="BCC Khulna">BCC Khulna</option>
        <option value="BCC Rajshahi" >BCC Rajshahi</option>
        <option value="BCC Sylhet" >BCC Sylhet</option>
        <option value="BCC Faridpur">BCC Faridpur</option>
        <option value="BCC Barisal">BCC Barisal</option>
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

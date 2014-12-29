<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

$query = "select * from facebook WHERE id = $id;";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);



$barray=explode("-", $row['birth_day']);

list($b_year,$b_month,$b_day)= $barray;

//echo $row['birth_day'];
//var_dump($barray);

?>



<form action="update_fb.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>First Name</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" /></br>

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" /></br>

    <label>Email</label>
    <input type="email" name="femail" value="<?php echo $row['femail'];?>" /></br>

    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password'];?>" /></br>




    <label>Birth Day</label>
    <select name="b_year">
        <option value=""></option>
        <option <?php if($b_year==2000) echo 'selected'?> value="2000">2000</option>
        <option <?php if($b_year==2000) echo 'selected'?> value="1999">1999</option>
        <option <?php if($b_year==2000) echo 'selected'?> value="1998">1998</option>
        <option <?php if($b_year==2000) echo 'selected'?> value="1997">1997</option>
        <option <?php if($b_year==2000) echo 'selected'?>value="1996">1996</option>
        <option <?php if($b_year==2000) echo 'selected'?>value="1995">1995</option>
        <option <?php if($row['birth_day']==($b_year=1994)) echo 'selected'?> value="1994">1994</option>
        <option <?php if($row['birth_day']==($b_year=1993)) echo 'selected'?> value="1993">1993</option>
        <option <?php if($row['birth_day']==($b_year=1992)) echo 'selected'?> value="1992">1992</option>
        <option <?php if($row['birth_day']==($b_year=1991)) echo 'selected'?> value="1991">1991</option>
        <option <?php if($row['birth_day']==($b_year=1990)) echo 'selected'?> value="1990">1990</option>
        <option <?php if($row['birth_day']==($b_year=1989)) echo 'selected'?> value="1989">1989</option>
    </select>

    <select name="b_month">
        <option value=""></option>
        <option <?php if($row['birth_day']==($b_month=01)) echo 'selected'?> value="01">January</option>
        <option <?php if($row['birth_day']==($b_month=02)) echo 'selected'?> value="02">February</option>
        <option <?php if($row['birth_day']==($b_month=03)) echo 'selected'?> value="03">March</option>
        <option <?php if($row['birth_day']==($b_month=04)) echo 'selected'?> value="04">April</option>
        <option <?php if($row['birth_day']==($b_month=05)) echo 'selected'?> value="05">May</option>
        <option <?php if($row['birth_day']==($b_month=06)) echo 'selected'?> value="06">June</option>
        <option <?php if($row['birth_day']==($b_month=07)) echo 'selected'?> value="07">July</option>
        <option <?php if($row['birth_day']==($b_month=08)) echo 'selected'?> value="08">August</option>
        <option <?php if($row['birth_day']==($b_month=09)) echo 'selected'?> value="09">September</option>
        <option <?php if($row['birth_day']==($b_month=10)) echo 'selected'?> value="10">October</option>
        <option <?php if($row['birth_day']==($b_month=11)) echo 'selected'?> value="11">November</option>
        <option <?php if($row['birth_day']==($b_month=12)) echo 'selected'?> value="12">December</option>
    </select>

    <select name="b_day">
        <option  value=""></option>
        <option <?php if($row['birth_day']==($b_day=01)) echo 'selected'?> value="01">01</option>
        <option <?php if($row['birth_day']==($b_day=02)) echo 'selected'?> value="02">02</option>
        <option <?php if($row['birth_day']==($b_day=03)) echo 'selected'?> value="03">03</option>
        <option <?php if($row['birth_day']==($b_day=04)) echo 'selected'?> value="04">04</option>
        <option <?php if($row['birth_day']==($b_day=05)) echo 'selected'?> value="05">05</option>
        <option <?php if($row['birth_day']==($b_day=06)) echo 'selected'?> value="06">06</option>
        <option <?php if($row['birth_day']==($b_day=07)) echo 'selected'?> value="07">07</option>
        <option <?php if($row['birth_day']==($b_day=08)) echo 'selected'?> value="08">08</option>
        <option <?php if($row['birth_day']==($b_day=09)) echo 'selected'?> value="09">09</option>
        <option <?php if($row['birth_day']==($b_day=10)) echo 'selected'?> value="10">10</option>
    </select></br>

<label>Gender</label>
<input type="radio" name="gender" <?php if($row['gender'] == 'Male')  echo 'checked' ?> value="Male" checked>Male
<input type="radio" name="gender" <?php if($row['gender'] == 'Female')  echo 'checked' ?> value="Female">Female </br>

<label>Hobby</label>
<textarea rows="3" cols="50" name="hobby"><?php echo $row['hobby'];?></textarea></br>


<label>Food</label>
<textarea rows="3" cols="50" name="food"><?php echo $row['food'];?></textarea></br>

<label>Comment</label>
<textarea rows="3" cols="50" name="comment"><?php echo $row['comment'];?></textarea></br>

    <button type="submit" align="right">Update</button>



</form>
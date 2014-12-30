<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "ftfl");

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
    <input type="email" name="email" value="<?php echo $row['email'];?>" /></br>

    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password'];?>" /></br>




    <label>Birth Day</label>
    <select name="b_year">
        <option value=""></option>
        <option <?php if($b_year==2000) echo 'selected'?> value="2000">2000</option>
        <option <?php if($b_year==1999) echo 'selected'?> value="1999">1999</option>
        <option <?php if($b_year==1998) echo 'selected'?> value="1998">1998</option>
        <option <?php if($b_year==1997) echo 'selected'?> value="1997">1997</option>
        <option <?php if($b_year==1996) echo 'selected'?> value="1996">1996</option>
        <option <?php if($b_year==1995) echo 'selected'?> value="1995">1995</option>
    </select>

    <select name="b_month">
        <option value=""></option>
        <option <?php if($b_month==01) echo 'selected'?> value="01">January</option>
        <option <?php if($b_month==02) echo 'selected'?> value="02">February</option>
        <option <?php if($b_month==03) echo 'selected'?> value="03">March</option>
        <option <?php if($b_month==04) echo 'selected'?> value="04">April</option>
        <option <?php if($b_month==05) echo 'selected'?> value="05">May</option>
        <option <?php if($b_month==06) echo 'selected'?> value="06">June</option>
        <option <?php if($b_month==07) echo 'selected'?> value="07">July</option>
        <option <?php if($b_month==08) echo 'selected'?> value="08">August</option>
        <option <?php if($b_month==09) echo 'selected'?> value="09">September</option>
        <option <?php if($b_month==10) echo 'selected'?> value="10">October</option>
        <option <?php if($b_month==11) echo 'selected'?>value="11">November</option>
        <option <?php if($b_month==12) echo 'selected'?> value="12">December</option>
    </select>

    <select name="b_day">
        <option  value=""></option>
        <option <?php if($b_day==01) echo 'selected'?> value="01">01</option>
        <option <?php if($b_day==02) echo 'selected'?> value="02">02</option>
        <option <?php if($b_day==03) echo 'selected'?> value="03">03</option>
        <option <?php if($b_day==04) echo 'selected'?> value="04">04</option>
        <option <?php if($b_day==05) echo 'selected'?> value="05">05</option>
        <option <?php if($b_day==06) echo 'selected'?> value="06">06</option>
        <option <?php if($b_day==07) echo 'selected'?> value="07">07</option>
        <option <?php if($b_day==08) echo 'selected'?> value="08">08</option>
        <option <?php if($b_day==09) echo 'selected'?> value="09">09</option>
        <option <?php if($b_day==10) echo 'selected'?> value="10">10</option>
    </select></br>

<label>Gender</label>
<input type="radio" name="gender" <?php if($row['gender'] == 'Male')  echo 'checked' ?> value="Male" checked>Male
<input type="radio" name="gender" <?php if($row['gender'] == 'Female')  echo 'checked' ?> value="Female">Female </br>

<label>Hobby</label></br>
    <input type="checkbox" name="hobby" <?php if($row['hobby'] == 'Gardening')  echo 'checked' ?> value="Gardening" checked>Gardening<br>
    <input type="checkbox" name="hobby" <?php if($row['hobby'] == 'Travelling')  echo 'checked' ?> value="Travelling">Travelling<br>
    <input type="checkbox" name="hobby" <?php if($row['hobby'] == 'Painting')  echo 'checked' ?> value="Painting">Painting<br>
    <input type="checkbox" name="hobby" <?php if($row['hobby'] == 'Fishing')  echo 'checked' ?> value="Fishing">Fishing<br></br>


<label>Food</label></br>
    <select name="food[]" multiple="multiple">
        <option value=""></option>
        <option value="Icecream">Icecream</option>
        <option value="Chocolate">Chocolate</option>
        <option value="Chotpoti">Chotpoti</option>
        <option value="Fuchka">Fuchka</option>
    </select></br></br>

<label>Comment</label>
<textarea rows="3" cols="50" name="comment"><?php echo $row['comment'];?></textarea></br>

    <button type="submit" align="right">Update</button>



</form>
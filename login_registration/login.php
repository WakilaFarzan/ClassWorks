

<?php session_start() ?>



<div>
    <form action="checkuser.php" method="post">

        <label>User Name</label>
        <input type="text" name="username" /></br>

        <label>Password</label>
        <input type="password" name="password" /></br>

        <button type="submit" name="submit" value="login">Submit</button>

    </form>
</div>




<?php if(isset($_SESSION['msgname']))  echo $_SESSION['msgname']; ?><br>
<?php if(isset($_SESSION['msgpass']))  echo $_SESSION['msgpass']; ?>
<?php session_unset() ?>



<?php if(isset($_SESSION['msg']))  echo $_SESSION['msg']; ?><br>
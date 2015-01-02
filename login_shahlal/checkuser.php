<html>
    <head>
    <title>Welcome to Login System</title>
    </head>

    <body style="text-align: center;">
        <tr>
            <td>
                <a href="index.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Register</a> |
                <a href="contact.php">Contact</a> |
                <a href="help.php">Help</a>
            </td>
        </tr>
    </body>
</html>

<br><br><br><br>

<?php

//print_r($_SERVER['REQUEST_METHOD']);

session_start();

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    header("location:login.php");
}

if(isset($_POST['username']) && empty($_POST['username'])) {
    $_SESSION['msgname'] = "Username is Required";
    header('location:login.php');
}

if(isset($_POST['password']) && empty($_POST['password'])){
    $_SESSION['msgpass'] = "Password is Required";
    header('location:login.php');
}




$username = $_POST['username'];
//echo $username;
$password = $_POST['password'];
//echo $password;

//exit;

$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");

$query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);


//var_dump($row);
//var_dump($row['username']);
//var_dump($row['password']);
//var_dump($row['email']);
//exit;

if($row)
{
    //(SEND Data to the SESSION and GO to The Dashboard)

    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['username']=$row['username'];
    $_SESSION['created']=$row['created'];

    header('location: dashboard.php');

}

else
{
    //(Redirect to the Login page with a Message)
    $_SESSION['msg'] = "Invalid Username and/or Password. If You are not Registered User Please Complete Registration First or Contact with Administrator.";
    header('location:login.php');
}

?>

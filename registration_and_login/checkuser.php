
<?php


//$id = $_POST['id'];
//$username = $_POST['username'];
//$password = $_POST['password'];


session_start();
if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "empty field";

    } else {
        $link = mysqli_connect("localhost",
            "root",
            "allah@03",
            "ftfl");
        $query = "select * from registraion WHERE username='$username' AND password='$password';";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row==1) {
            //$_SESSION['id'] = $id;
            $_SESSION['login_user'] = $username;
            //$_SESSION['email'] = $email;
            header('location:dashboard.php');
        } else {
            header('location:login.php');
        }
    }
}


//$query = "select id from registraion WHERE username='$username' AND password='$password';";

//$result = mysqli_query($link, $query);

//$row = mysqli_fetch_assoc($result);

//print_r($row);

//if(!empty($row))
//{
   // header('location:dashboard.php');
//}//
//else
//{
    //header('location:login.php');
//}



//print_r($row);
?>

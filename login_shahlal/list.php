<?php
$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
?>

<html>
    <head>
        <title>List of All the Users</title>
    </head>
    <body style="text-align: center;">


    <ul style="none">
        <li>

            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Register</a> |
            <a href="contact.php">Contact</a> |
            <a href="help.php">Help</a>

        </li>
    </ul>



    <ul>
        <li><a href="registration.php">Add New User</a> </li>
    </ul>
    <table border="1" width="100%">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>User Name</td>
            <td>Password</td>
            <td>Created</td>
            <td>Modified</td>
            <td>Action</td>
        </tr>
        <?php
        foreach($result as $row){
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['password']?></td>
                <td><?php echo $row['created']?></td>
                <td><?php echo $row['modified']?></td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                    <a href="view.php?id=<?php echo $row['id']?>">View</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </body>
</html>
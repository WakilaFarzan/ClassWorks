

<html>
<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>

</html>

<?php

mysql_connect("localhost","root","allah@03");
mysql_select_db("ftfl");


$name= $_FILES ["image"]["name"];
$type= $_FILES ["image"]["type"];
$size= $_FILES ["image"]["size"];
$temp= $_FILES ["image"]["tmp_name"];
$error= $_FILES ["image"]["error"];

if(!isset($temp))
    echo "please select an image";
else
{
    $image_name= addslashes($_FILES ["image"]["name"]);
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_size=getimagesize($_FILES['image']['tmp_name']);

    if($image_size=FALSE)
        echo "that is not an image.";
    else{
       if(!$insert= mysql_query("INSERT INTO photo VALUES ('','$image_name','$image')"))
        echo "Problem uploading file.";
        else
        {
            $lastid= mysql_insert_id();
            echo "<img src=get.php?id=$lastid>";
        }
    }
}
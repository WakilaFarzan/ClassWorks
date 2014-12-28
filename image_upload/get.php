<?php

mysql_connect("localhost","root","allah@03");
mysql_select_db("ftfl");

$id=addslashes($_REQUEST['id']);

$image=mysql_query("SELECT * FROM photo WHERE id=$id");
$image=mysql_fetch_assoc($image);
$image=$image['image'];

header("Content-type: image/jpeg");

echo $image;
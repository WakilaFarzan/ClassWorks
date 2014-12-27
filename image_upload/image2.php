
<?php
$link = mysqli_connect("localhost",
"root",
"allah@03",
"ftfl");

$query = "select * from image;";

$result = mysqli_query($link, $query);


?>

<?php
foreach($result as $row){
?>


<img src="'">

<?php }
?>
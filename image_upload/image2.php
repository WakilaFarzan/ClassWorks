
<?php
$link = mysqli_connect("localhost",
"root",
"allah@03",
"ftfl");

$query = "select * from image WHERE id = $id;";

$result = mysqli_query($link, $query);


?>

<?php
foreach($result as $row){
?>

 <img src=upload1.php?id=1>


<?php }
?>
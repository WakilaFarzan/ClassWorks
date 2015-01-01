<?php
 echo '<pre>';
print_r($_POST);
 echo '</pre>';

$hobby = implode(',', $_POST['hobby']);
echo $hobby . "<br>";

//$food_array= array($_POST['food1'], $_POST['food2'], $_POST['food3'],$_POST['food4']);

//if(isset($food_array)&& !empty($food_array)) {


    //$food = implode(',', $food_array);
    //$t_food = trim($food, " ,");

    //echo $t_food;
//}

//$hobby  .=','. $_POST['ht'];

$food  = '';
if(array_key_exists('food1',$_POST) && !empty($_POST['food1']))
{
    $food  .= $_POST['food1'];
}

if(array_key_exists('food2',$_POST)  && !empty($_POST['food2']))
{
    $food  .=','. $_POST['food2'];
}

if(array_key_exists('food3',$_POST)  && !empty($_POST['food3']))
{
    $food  .=','. $_POST['food3'];
}

if(array_key_exists('food4',$_POST)  && !empty($_POST['food4']))
{
    $food  .=','. $_POST['food4'];
}
echo $food . "<br>";

$city = implode(',', $_POST['city']);
echo $city . "<br>";


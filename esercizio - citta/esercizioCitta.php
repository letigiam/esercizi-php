<?php
session_start();

$cityArray = explode(",", $_POST['city_input']);

$_SESSION['cityArray'] = $cityArray;


echo "<br>Lista Città <br>";
echo "<ul>";

// for($i = 0; $i < sizeof($cityArray); $i++){
//     echo "<li>".$_SESSION['cityArray'][$i] . "</li>";
// } 
//if(in_array($cityArray, $_SESSION['cityArray'])){
    $cityUnique = array_unique($_SESSION['cityArray']);
    foreach($cityUnique as $c){
        echo "<li>". $c ."</li>";
    }
//}

echo "</ul>";


?>
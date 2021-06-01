<?php
session_start(); //inizializzo la sessione

$cityInput = explode(',', $_POST["cityinput"]);

$_SESSION['cityInput'] = $cityInput;

echo "<br> Alcune città italiane sono: ";

echo "<ul>";
//  for($i=0; $i<sizeof($cityInput); $i++){
//      echo "<li>". ucfirst($_SESSION['cityInput']) . ' <a href="elimina">elimina</a>'. "</li>";
// }

$_SESSION['cityInput'] = array_unique($_SESSION['cityInput']);

foreach($_SESSION['cityInput'] as $c){
    echo "<li>". $c . ' <a href="elimina.php?city='.$c.'">elimina</a>'. "</li>";
}


echo '<a href="elimina.php ">cancella tutto</a>';

echo "</ul>";

?>
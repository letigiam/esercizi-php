<?php
   
$name = "Letizia";
echo "<h3>My name is $name</h3>";
echo "<br>";
$string1 = "This is the first part";
$string2 = "of a sentence";

echo $string1." ".$string2;

$myNumber = 45;
$calculation = $myNumber * 3/4;
echo $calculation;

$myBool = true;
echo "<br>";
echo "This statement is true?".$myBool;
//ci da 1 perchè viene convertito da true a 1
//fosse stato false era 0;
echo "<br>";
$variableName = "name";
echo $$variableName;
//mi restituisce Letizia, perchè il doppio dollaro
//e come se richiamasse il primo $name istanziato all'inizio
echo "<br>";
$myArray = array("Rob", "Letizia", "Gatta", "Minu");

print_r($myArray);
echo "<br>";
echo "L'indice del mio array 0 è: ".$myArray[0];
?>
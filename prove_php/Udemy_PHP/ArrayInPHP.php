<?php


//scriviamo il nostro primo Array
$myArray = array("Rob", "Letizia", "Gatta", "Minu");
print_r($myArray); //serve per stampare un array

echo "<br><br>";
//scriviamo un indice specifico nel nostro array
echo "L'indice del mio array 0 è: ".$myArray[0];
echo "<br><br>";

//scriviamo per ogni indice il suo valore
$arrayUno[0]="pizza";
$arrayUno[1]="mozzarella";
$arrayUno[2]="pomodoro";
//l'array di php è associativo

//mozzarella [2] => pomodoro [5] => gelato
$arrayUno[5]="gelato";
//all'interno dell'indice di un array posso mettere una stringa
$arrayUno["myFavoriteFood"]="patato";
print_r($arrayUno);
echo "<br><br>";

//l'array di php è associativo chiave => valore

$arrayDue = array (
    "Francia" => "Paris", 
    "Inghilterra" => "London", 
    "Germania" => "Berlin" 
);

//elimina un elemento in un indice dell'array o variabile
    unset($arrayDue["Francia"]);
    print_r($arrayDue);


echo "<br><br>";
//stampa quanti valori ci sono in un array
echo sizeof($arrayDue);

echo "<br><br>";


?>
<?php

//diversi modi per definire una funzione p metodo

function sommaNumeri($num1, $num2) //variabili
{
    $somma = $num1 + $num2; 
    echo $somma;
}
sommaNumeri(34, 10); //istanzio o dichiaro il valore delle variabili

echo '<br>';


function giorniApertura($giorniOpen) //assegno un argomento
{   
    echo $giorniOpen; //richiamo e stampo a video l'argomento
}
giorniApertura('Lunedì'); //assegno il valore dell'argomento
echo '<br>';
giorniApertura('Mercoledì');
echo '<br>';
giorniApertura('Venerdì');

function nomeUtente($nomeUtente, $cognomeUtente){
    echo $nomeUtente, $cognomeUtente;
}    
nomeUtente('Letizia ', ' Giammorcaro');

?>
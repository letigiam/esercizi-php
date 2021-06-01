<?php
    // $array = array(3,7,6,4,5,9,11,13,1,2);
    // //calcolare il numero massimo

    // function get_Max($array){
    //     $max=$array[0];//inizializzo la variabile max di array con indice 0
    //     for($i=0; $i<count($array); $i++){
    //         if($max<$array[$i]){ 
    //             /* Se max è = a 0, sarà minore dei numeri dell'array.
    //             Max parte da 0 confrontando tutti i numeri dell'array*/
    //             $max=$array[$i];
    //             /* Se max è a uno dei numeri dell'array e 
    //             sarà il + grande abbiamo l numero max */
    //         }
    //     } return $max;
    // } echo get_Max($array);

   
    $a = 8;
    $b = 2;
    $c = 5;
    $d = 4;
    
    $equazione = ((($a + $b) / $c) * $d);
    echo "Il risultato della nostra equazione è " . $equazione;

?>
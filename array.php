
<?php


$array = array(-2,3,4,7,-10,6,-6,5,-2,5,4,5,-8,9,11,13,11,3,-2,13);
$array1 = array(-11,-4,-3,-1,6,7,9,11,13,15);
$array2 = array(15,13,12,6,0,-4-5);

function numeri_positivi($pippo){
    $conteggio=0; //conteggio è una variabile che inizializzo a zero, sul quale la variabile $pippo andrà a fare il controllo
    for($i=0; $i<count($pippo); $i++){
        if($pippo[$i] > 0){
             $conteggio++;
        }
    }
    return $conteggio;
}
echo "il conteggio dei numeri positivi è: " .numeri_positivi($array);



$array = array(7,6,4,3,5,8,13,9);

function get_Max($array){
    $max=$array[0];
    for($i=0; $i<count($array); $i++){
        if($max < $array[$i]){
           $max=$array[$i];  
        }
    }
    return $max;
}
echo 'il numero massimo è ' .get_Max($array);

echo '<br>';

function get_Min($array){
    $min=$array[0];
    for($j=0; $j<count($array); $j++){
        if($min > $array[$j]){
           $min=$array[$j]; 
        }
    }
    return $min;
}
echo 'il numero minimo è '. get_Min($array);

function media($array){
    $somma=0;
    for($x=0; $x<count($array);$x++){
        $somma += $array[$x];
    }
    return $somma/count($array);
}
echo '<br>'.media($array);

echo '<br>';

function sommaPari($array){
    $pari=0;
    for($x=0; $x<count($array);$x++){
        if($array[$x] %2 == 0 ){
            $pari += $array[$x];
        }
    } return $pari;
}
echo sommaPari($array);

echo '<br>';

function sommaDisp($array){
    $disp=0;
    for($x=0; $x<count($array);$x++){
        if($array[$x]%2 != 0){
            $disp += $array[$x];
        }
    } return $disp;
} echo sommaDisp($array);

echo '<br>';

$array = array(-2,3,4,7,-10,6,-6,5,-2,5,4,5,-8,9,11,13,11,3,-2,13);
$array1 = array(-11,-4,-3,-1,6,7,9,11,13,15);
$array2 = array(15,13,12,6,0,-4-5);

function numPositivi($array){
    $pos=0;

    for($i=0; $i<count($array);$i++){
        if($array[$i] > 0){
            $pos++;
        }
    } return $pos;
} echo 'i numeri positivi sono: '.numPositivi($array);

echo '<br>';

function numeriNull($array){
    $null=0;
    for($i=0; $i<count($array);$i++){
        if($array[$i]==0){
            $null++;
        }
    }return $null;
} echo 'i numeri null sono: '.numeriNull($array);

echo '<br>';

function numeriDis($array){
    $disp=$array[0];
    for($i=0; $i<count($array);$i++){
        if($array[$i]<0){
            $disp++;
        }
    }return $disp;
} echo 'i numeri Dispari sono: '.numeriDis($array);

?>
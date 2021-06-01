<?php

$latoA=$_GET['latoA'];
$latoB=$_GET['latoB'];
$latoC=$_GET['latoC'];

function triangoli ($latoA, $latoB, $latoC){
    if ($latoA == $latoB)
        if($latoB == $latoC){
            $p = ($latoA + $latoB + $latoC) / 2;
            $area = sqrt($p * ($p - $latoA) * ($p - $latoB) * ($p - $latoC));
            echo "è un triangolo equilatero perchè ha i lati tutti uguali"."<br>"."Il suo perimetro è di: ".$p."<br>"."La sua area è di: ".$area;
        }else {
            $p = ($latoA + $latoB + $latoC) / 2;
            $area = sqrt($p * ($p - $latoA) * ($p - $latoB) * ($p - $latoC));
            echo "è un triangolo isoscele perchè ha 2 lati uguali e uno diverso "."<br>"."Il suo perimetro è di: ".$p."<br>"."La sua area è di: ".$area;
        }
            
    else
        if($latoB != $latoC || $latoA != $latoC){
            $p = ($latoA + $latoB + $latoC) / 2;
            $area = sqrt($p * ($p - $latoA) * ($p - $latoB) * ($p - $latoC));
            echo "è un triangolo scaleno perchè ha tutti i lati diversi"."<br>"."Il suo perimetro è di: ".$p."<br>"."La sua area è di: ".$area;;
        }else
        echo "non è un triangolo";
}

echo "Lato A: ".$latoA."<br>";
echo "Lato B: ".$latoB."<br>";
echo "Lato C: ".$latoC."<br>";
echo triangoli ($latoA, $latoB, $latoC)."<br>";
?>
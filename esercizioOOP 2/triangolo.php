<?php

require_once "esercizioOOP.php";

class Triangoli extends Figure{

    public function getArea(){}
    public function getPerimetro(){}


    //-------- FUNZIONE TRIANGOLO SCALENO ------------//  

        public static function scaleno($lato1, $lato2, $lato3){
            $scaleno = new static();
                $p = ($lato1 + $lato2 + $lato3);
                $semiP = ($lato1 + $lato2 + $lato3)/2;
                $area = sqrt($semiP * ($semiP - $lato1) * ($semiP - $lato2) * ($semiP - $lato3));
                echo "\n";
                echo "Triangolo scaleno: \nIl suo perimetro è di: ".$p."\n"."La sua area è di: ".$area;
            return $scaleno;
        }
        
    //-------- FUNZIONE TRIANGOLO ISOSCELE ------------//

        public static function isoscele($lato1, $lato2){
            $isoscele = new static();
            $p = ($lato1 + $lato2 + $lato1 );
            $semiP = ($lato1 + $lato2 + $lato1 )/2;
                $area = sqrt($semiP * ($semiP - $lato1) * ($semiP - $lato2) * ($semiP - $lato1));
                echo "\n";
                echo "\n"."Triangolo isoscele: \nIl suo perimetro è di: ".$p."\n"."La sua area è di: ".$area;
            return $isoscele;
        }
    
    //-------- FUNZIONE TRIANGOLO EQUILATERO ------------//

        public static function equilatero($lato1){
            $equilatero = new static();
            $p = ($lato1 + $lato1 + $lato1);
            $semiP = ($lato1 + $lato1 + $lato1 )/2;
                $area = sqrt($semiP * ($semiP - $lato1) * ($semiP - $lato1) * ($semiP - $lato1));
                echo "\n";
                echo "\n"."Triangolo equilatero: \nIl suo perimetro è di: ".$p."\n"."La sua area è di: ".$area;
            return $equilatero;
        }
        
}

//------ Costrutti multipli --------//

$scaleno = Triangoli::scaleno(5,5,1);
$isoscele = Triangoli::isoscele(10,6);
$equilatero = Triangoli::equilatero(10);

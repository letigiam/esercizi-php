<?php
require_once "quadrilatero.php";

class Quadrato extends Quadrilatero{

    public $lato1;

    public function __construct($lato1){
        $this->lato1 = $lato1;
    }

    public function getArea(){
        return ($this->lato1 * $this->lato1);   
    }

    public function getPerimetro(){
        return ($this->lato1 * 4);
    }

}

$quadrato = new quadrato(20, 15);
echo "\n"."Quadrato: \nIl suo perimetro è di:".$quadrato->getPerimetro()."\n"."La sua area è di: ".$quadrato->getArea();

?>
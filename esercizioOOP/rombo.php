<?php
require_once "quadrilatero.php";

class Rombo extends Quadrilatero{

    public $dMax,$dMin, $lato1;

    public function __construct($dMax,$dMin, $lato1){
        $this->dMax = $dMax;
        $this->dMin = $dMin;
        $this->lato1 = $lato1;
    }

    public function getArea(){
        return (($this->dMax * $this->dMin)/2);   
    }
    public function getPerimetro(){
        return ($this->lato1 * 4);
    }

}

$rombo = new Rombo(45, 20, 15);
echo "\n"."Rettangolo: \nIl suo perimetro è di:".$rombo->getPerimetro()."\n"."La sua area è di: ".$rombo->getArea();

?>
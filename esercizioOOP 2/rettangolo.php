<?php
require_once "quadrilatero.php";

class Rettangolo extends Quadrilatero{

    public $altezza;
    public $base;

    public function __construct($altezza, $base){
        $this->altezza = $altezza;
        $this->base = $base;
    }

    public function getArea(){
        return $this->base * $this->altezza;   
    }
    public function getPerimetro(){
        return ($this->base + $this->base) * ($this->altezza + $this->altezza);
    }
}

$rettangolo = new Rettangolo(20, 15);
echo "\n"."Rettangolo: \nIl suo perimetro è di:".$rettangolo->getPerimetro()."\n"."La sua area è di: ".$rettangolo->getArea();

?>
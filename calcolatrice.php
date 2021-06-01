<?php

class Calcolatrice{

    public $numInput1, $numInput2;
    public $operazione;
    public $counter;
    //private $name = "";
    
    //somma, divisione, moltiplicazione, sottazione
    //istanzio il costruttore
    public function __construct($numInput1, $numInput2){
        $this->numInput1 = $numInput1;
        $this->numInput2 = $numInput2;
    }

    public function addOperation($op){
        array_push($operazioni, $op);
    }
   
    public function operation(){
        switch($this->operazioni){
            case "somma":
                $result = $this->numInput1 + $this->numInput2;
            case "differenza,":
                 $result = $this->numInput1 - $this->numInput2;
            case "divisione":
                $result = $this->numInput1 / $this->numInput2;
            case "moltiplicazione":
                $result = $this->numInput1 * $this->numInput2;
            case "potenza":
                $result = ((($this->numInput1 * $this->numInput2)/$this->numInput3)*$this->numInput4);
            case "radice_quad":
                $result = sqrt($this->numInput1);
          
            default:
            $result = "Error";
            break;
        }
        return $result;
    }
    

    public function getSomma(){
        $somma = $this->numInput1 + $this->numInput2;
        return $somma;
    }
    public function getDiv(){
        $diff = $this->numInput1 / $this->numInput2;
        if (($this->numInput1 == 0) || ($this->numInput2 == 0)){
            echo "Non puoi dividere per zero!";
        } else {
            return $diff;
        }
    }
    public function getDiff(){
        return $this->numInput1 - $this->numInput2;
    }
    public function getMolt(){
        return $this->numInput1 * $this->numInput2;
    }
    public function getRad(){
        return sqrt($this->numInput1);
    }

    public function getMostUserOperation(){
        $counter = 0;
        if($this->numInput1 + $this->numInput2>0){
            ++$counter;
            echo "l'operazione somma è stata selezionata ".$counter." volte";
        }else if($this->numInput1 - $this->numInput2>0){
            $counter++;
            echo "l'operazione differenza è stata selezionata ".$counter." volte";
        }else if($this->numInput1 / $this->numInput2>0){
            $counter++;
            echo "l'operazione divisione è stata selezionata ".$counter." volte";
        }else if($this->numInput1 * $this->numInput2>0){
            $counter++;
            echo "l'operazione moltiplicazione è stata selezionata ".$counter." volte";
        }    
        //ritorna l'operazione più volte
    }
    

    public function getLessUserOperation(){
        //ritorna l'operazione meno volte
    }
    public function getOperationList($text){
        foreach($this-> operazione as $text){
        if($text -> getSomma() == $text){
            echo $text;
            }
        }
    } 
}

// class Operazione{
//     private $nomeOperazione;
//     private $numero1;
//     private $numero2;
//     private $risultato;

//     public function __construct($op,$nu1,$nu2,$ris){
//         $this->nomeOperazione=$op;
//         $this->numero1=$nu1;
//         $this->numero2=$nu2;
//         $this->risultato=$ris;
//     }
// }

//  $num1 = $_POST['numInput1'];
//  $num2 = $_POST['numInput2'];
//  $operazione = $_POST['operazione'];

//---------- Creo un nuovo Oggetto per richiamare le mie operazioni


$op = new Calcolatrice(12,4);
echo "<p>Somma: ".$op->getSomma(). "</p>";

//$op = new Calcolatrice(3,4);
echo "<p>Divisione: ".$op->getDiv(3,4). "</p>";

//$diff= new Calcolatrice(8,4);
echo "<p>Differenza: ".$op->getDiff(). "</p>";

//$molt= new Calcolatrice(3,4);
echo "<p>Moltiplicazione: ".$op->getMolt(). "</p>";

//$rad = new Calcolatrice(3,0);
echo "<p>Radice Quadrata:  ".$op->getRad(). "</p>";


// echo "<br>";
// $calc = new Calcolatrice($_POST['numInput1'],$_POST['numInput2']);
// echo "somma è : ".$calc->getSomma(). "</p>";

// $calc = new Calcolatrice ($_POST['numInput1'],$_POST['numInput2']);
// echo "differenza è : ".$calc->getDiff(). "</p>";

// $calc = new Calcolatrice ($_POST['numInput1'],$_POST['numInput2']);
// echo "divisione è : ".$calc ->getDiv($numInput1, $numInput2). "</p>";

// $calc = new Calcolatrice ($_POST['numInput1'],$_POST['numInput2']);
// echo "moltiplicazione è : ".$calc->getMolt(). "</p>";

// $calc = new Calcolatrice ($_POST['numInput1'],$_POST['numInput2']);
// echo "radice è : ".$calc ->getRad(). "</p>";

// $conto = new Calcolatrice($_POST['numInput1'],$_POST['numInput2']);
// echo $calc ->getMostUserOperation($omma, $diff, $div, $molt, $rad, $counter);
?> 
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="calcolatrice.php">
    <input type="text" name="numInput1" placeholder="Inserisci il numero">
    <input type="text" name="numInput2" placeholder="Inserisci il numero">
    <select name="op">
        <option value="somma">somma</option>
        <option value="differenza,">differenza</option>
        <option value="divisione">divisione</option>
        <option value="moltiplicazione">moltiplicazione</option>
        <option value="radice_quad">radice quadrata</option>
    </select>
    <button type="submit" valut="invia">Calcola</button>
</form>
</body>
</html>-->

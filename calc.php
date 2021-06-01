<?php

session_start();

if (!isset($_SESSION["calcolatrice"])) {
    $_SESSION["calcolatrice"] = new Calc();
}else{
    $calc = $_SESSION["calcolatrice"];
}

class Calc{


public $numInput1, $numInput2;
public $arrayOp = array();

//----- creo le funzioni Operazioni

public function getSomma($numInput1, $numInput2){
    array_push($this->arrayOp, new Operazione('somma',$numInput1, $numInput2, $numInput1 + $numInput2));
}
public function getDiff($numInput1, $numInput2){
    array_push($this->arrayOp, new Operazione('differenza',$numInput1, $numInput2, $numInput1 - $numInput2));
}
public function getDiv($numInput1, $numInput2){
    
    if (($numInput1 == 0) || ($numInput2 == 0)){
        echo "Non puoi dividere per zero!";
    } else {
        array_push($this->arrayOp, new Operazione('divisione',$numInput1, $numInput2, $numInput1 / $numInput2));
    }
}

public function getMolt($numInput1, $numInput2){
    array_push($this->arrayOp, new Operazione('moltiplicazione',$numInput1, $numInput2, $numInput1 * $numInput2));
}
public function getRad($numInput1, $numInput2){
    array_push($this->arrayOp,new Operazione('rediceQuad',$numInput1, $numInput2, sqrt($this->numInput1)));

}

public function getMostUserOperation(){
    //ritorna l'operazione più volte
}

    public function getLessUserOperation(){
        //ritorna l'operazione meno volte
    }
    // public function getOperationList($op){
    //     foreach($this-> operazione as $op){
    //     if($op -> getSomma() == $op){
    //         echo $op;
    //         }
    //     }
    // } 

//---------- elimino la sessione resettando tutto

    function elimino(){
            session_start(); //inizializzo la sessione
        if($_GET['delete']){
            session_destroy();
        }else{
            unset($_SESSION['operazioni'][$_POST['operazione']]);
            echo "<a href='calc.php?delete=all_operation'>Elimina tutto</a>";
        }
    }

}
class Operazione{
    private $nomeOperazione;
    private $numero1;
    private $numero2;
    private $risultato;

    public function __toString()
    {
        switch($this->nomeOperazione){
            case "somma":
                return 'somma '.$this->numero1.' e '.$this->numero2.' = '.$this->risultato;
            case "differenza":
                 return 'differenza '.$this->numero1.' e '.$this->numero2.' = '.$this->risultato;
            case "divisione":
                return 'divisione '.$this->numero1.' e '.$this->numero2.' = '.$this->risultato;
            case "moltiplicazione":
                return 'moltiplicazione '.$this->numero1.' e  '.$this->numero2.' = '.$this->risultato;
            case "radice_quad":
                return 'radiceQuad '.$this->numero1.' e '.$this->numero2.' = '.$this->risultato;
        }
    }

    public function __construct($op,$nu1,$nu2,$ris){
        $this->nomeOperazione=$op;
        $this->numero1=$nu1;
        $this->numero2=$nu2;
        $this->risultato=$ris;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form method="post" action="calc.php">
<input type="text" name="numInput1" placeholder="Inserisci il numero">
<input type="text" name="numInput2" placeholder="Inserisci il numero">
<select name="operazione">
    <option value="select">select</option>
    <option value="somma">somma</option>
    <option value="differenza">differenza</option>
    <option value="divisione">divisione</option>
    <option value="moltiplicazione">moltiplicazione</option>
    <option value="radiceQuad">radice quadrata</option>
</select>
<button type="submit" valut="invia">Calcola</button>
</form>


<?php



echo "<br>";
//$calc = new Calc($numInput1, $numInput2, $operazione);



//---- controllo se l'operazione è stata seleziona ---------//
if(isset($_POST['operazione'])){

    $numInput1 = $_POST['numInput1'];
    $numInput2 = $_POST['numInput2'];

    if($_POST['operazione']=='somma'){

        $calc->getSomma($numInput1, $numInput2);

    } else if($_POST['operazione']=='differenza'){

        $calc->getDiff($numInput1, $numInput2);

    }else if($_POST['operazione']=='divisione'){

        $calc ->getDiv($numInput1, $numInput2);

    }else if($_POST['operazione']=='moltiplicazione'){

        $calc->getMolt($numInput1, $numInput2);

    }else if($_POST['operazione']=='radice_quad'){

        $calc ->getRad($numInput1, $numInput2);

    }else{
        echo "Devi selezionare un'operazione";
    }
}
foreach($calc->arrayOp as $operazione){
    echo "<h3>".$operazione."</h3>";
}
$calc ->elimino();
// echo $calc->addOperation();
// $calc->addOperation();
?>

</body>
</html>


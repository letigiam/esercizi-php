<?php

session_start();

if ($_GET['delete']) {
    if ($_GET['delete']=='All_op'){
        session_destroy();
        session_start();
    }
}

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
        array_push($this->arrayOp,new Operazione('rediceQuad',$numInput1, $numInput2, sqrt($numInput1)));

    }
    public function getDecbin($numInput1, $numInput2){
        array_push($this->arrayOp,new Operazione('decbin',$numInput1, $numInput2, decbin($numInput1)));
    }
    public function getBindec($numInput1, $numInput2){
        array_push($this->arrayOp,new Operazione('bindec',$numInput1, $numInput2, bindec($numInput1)));
    }

    public function getMostUserOperation(){
        //$most_used = [];
        $array_counter = ["somma" => 0, "differenza" => 0, "divisione" => 0, "moltiplicazione" => 0, "rediceQuad" => 0, "decbin" => 0, "bindec" => 0];
        foreach ($this->arrayOp as $operation) {
            //echo"sono nel primo for";
            $array_counter[$operation->nomeOperazione]++;
        }
        // foreach (array_keys($array_counter, max($array_counter)) as $key) {
        //     $most_used += [$key => $array_counter[$key]];
        // }
        return array_keys($array_counter, max($array_counter));
    }


    public function getLessUserOperation(){
        // $most_used = [];
        $array_counter = ["somma" => 0, "differenza" => 0, "divisione" => 0, "moltiplicazione" => 0, "rediceQuad" => 0, "decbin" => 0, "bindec" => 0];
        foreach ($this->arrayOp as $operation) {
            $array_counter[$operation->nomeOperazione]++;
        }
        // foreach (array_keys($array_counter, min($array_counter)) as $key) {
        //     $most_used += [$key => $array_counter[$key]];
        // }
        return array_keys($array_counter, min($array_counter));
    }

    //---------- elimino la sessione resettando tutto -----------//

    public function elimino(){
        if($_GET['delete']){
            session_destroy();
        }else{
            unset($_SESSION['oper'][$_POST['operazione']]);
            echo "<a href='?delete=All_op'>Elimina tutto</a>";
        }
    }

}
class Operazione{
    public $nomeOperazione;
    private $numero1;
    private $numero2;
    private $risultato;

    public function __construct($op,$nu1,$nu2,$ris){
        $this->nomeOperazione=$op;
        $this->numero1=$nu1;
        $this->numero2=$nu2;
        $this->risultato=$ris;
    }

    //------ stampa i risultati------//
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
            case "rediceQuad":
            return 'rediceQuad '.$this->numero1.' = '.$this->risultato;
            case "decbin":
                return 'decbin '.$this->numero1.' = '.$this->risultato;
            case "bindec":
                return 'bindec '.$this->numero1.' = '.$this->risultato;
        }
    }
}
?>

<form method="post" action="calcolo.php">
<input type="text" name="numInput1" placeholder="Inserisci il numero">
<input type="text" name="numInput2" placeholder="Inserisci il numero">
<select name="operazione">
    <option value="select">select</option>
    <option value="somma">somma</option>
    <option value="differenza">differenza</option>
    <option value="divisione">divisione</option>
    <option value="moltiplicazione">moltiplicazione</option>
    <option value="rediceQuad">radice quadrata</option>
    <option value="decbin">decimale a binario</option>
    <option value="bindec">binario a decimale</option>
</select>
<button type="submit" valut="invia">Calcola</button>
</form>

<?php

echo "<br>";

//---- controllo se l'operazione è stata seleziona ---------//

if(isset($_POST['operazione'])){
    // if(!filter_var($numInput1, $numInput2, FILTER_VALIDATE_INT)){
    // }
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

    }else if($_POST['operazione']=='rediceQuad'){

        $calc ->getRad($numInput1, $numInput2);

    }else if($_POST['operazione']=='decbin'){

        $calc ->getDecbin($numInput1, $numInput2);

    }else if($_POST['operazione']=='bindec'){

        $calc ->getBindec($numInput1, $numInput2);

    }else{
        echo "Devi selezionare un'operazione";
    }
}

echo "<br>";
echo "STORICO OPERAZIONI: ";
foreach($calc->arrayOp as $operazione){
    echo "<p>".$operazione."</p>";
}

echo "<br>";
echo "PIù USATE: ".implode(" ",$calc->getMostUserOperation())."\n";
echo "<br>";
echo "MENO USATE: ".implode(" ",$calc->getLessUserOperation())."\n";
echo "<br>";
$calc ->elimino();
?>



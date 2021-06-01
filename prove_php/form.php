<?php

$a = $_GET['numeroUno'];
$b = $_GET['numeroDue'];
$operazione = $_GET['operazione'];

function oper($operazione, $a, $b){
    switch($operazione){
        case "somma":
            $somma = ($a + $b);
            return $somma;
        case "differenza":
            $differenza = ($a - $b);
            return $differenza;
        case "divisione":
            $divisione = ($a / $b);
            return $divisione;
        case "moltiplicazione":
            $moltiplicazione = ($a * $b);
            return $moltiplicazione; 
    }
}
    ?>

<form method="get" action="form.php">
    <input type="text" name="numeroUno" placeholder="Inserisci il numero">
    <input type="text" name="numeroDue" placeholder="Inserisci il numero">
    <select name="operazione" id="operazione">
        <option value="somma">somma</option>
        <option value="differenza">differenza</option>
        <option value="divisione">divisione</option>
        <option value="moltiplicazione">moltiplicazione</option>
    </select>
    <input type="submit" valut="invia">
</form>

<?php
    echo "i numeri sono: $a e: $b, <br>hai scelto: $operazione <br> il risultato è: " .oper($operazione, $a, $b);
?>
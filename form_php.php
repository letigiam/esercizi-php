<?php

$a = $_GET['numeroUno'];
$b = $_GET['numeroDue'];
$operazione = $_GET['operazione'];

function oper($operazione, $a, $b)
{
    switch ($operazione) {

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

        case "fattoriale":
            if ($b = 1) {
                for ($i = 1; $i <= $a; $i++) {
                    $b = $i * $b;
                }
                return $b;
            }
            return fattoriale($a);
    }
}
?>

<form method="get" action="form_php.php">
    <input type="text" name="numeroUno" placeholder="Inserisci il numero" required>
    <input type="text" name="numeroDue" placeholder="Inserisci il numero" required>
    <select name="operazione" id="operazione">
        <option value="somma">somma</option>
        <option value="differenza">differenza</option>
        <option value="divisione">divisione</option>
        <option value="moltiplicazione">moltiplicazione</option>
        <option value="fattoriale">fattoriale</option>
    </select>
    <input type="submit" valut="invia">
</form>

<?php
echo "i numeri sono: $a e: $b, <br>hai scelto: $operazione <br> il risultato è: " . oper($operazione, $a, $b);
?>
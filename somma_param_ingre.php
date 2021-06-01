<?php

$a = 5;
$b = 2;
$operazione = "fattoriale";

function somma($a, $b)
{
    return $a + $b;
}

function differenza($a, $b)
{
    return $a - $b;
}

function divisione($a, $b)
{
    return $a / $b;
}

function fattoriale($a)
{
    $b = 1;
    for ($i = 1; $i <= $a; $i++) {
        $b = $i * $b;
    }
    return $b;
}

function operazioni($a, $b, $operazione)
{
    switch ($operazione) {
        case "somma":
            echo somma($a, $b);
            break;

        case "differenza":
            echo differenza($a, $b);
            break;

        case "divisione":
            echo divisione($a, $b);
            break;

        case "fattoriale":
            echo fattoriale($a);
            break;

    }
}
$risultato = operazioni($a, $b, $operazione);
echo $risultato;

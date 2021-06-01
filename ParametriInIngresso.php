<?php

/*
$primoId=$_GET['primoId'];
$secondoId=$_GET['secondoId'];
function Somma($primoId, $secondoId){

$somma=$primoId + $secondoId;
echo "primo numero: ".$primoId."<br>";
echo "secondo numero:".$secondoId."<br>";
return $somma;
}
echo Somma($primoId, $secondoId);
 */

$primoId = $_GET['primoId']; //varibile super GLOBAL
$secondoId = $_GET['secondoId']; //varibile super GLOBAL
$operazione = $_GET['operazione'];

function somma($primoId, $secondoId)
{
    return $primoId + $secondoId;
}
function sottrazione($primoId, $secondoId)
{
    return $primoId - $secondoId;
}
function divisione($primoId, $secondoId)
{
    return $primoId / $secondoId;
}
function moltiplicazione($primoId, $secondoId)
{
    return $primoId * $secondoId;
}
function fattoriale($primoId)
{
    $secondoId = 1;
    for ($i = 1; $i <= $primoId; $i++) {
        $secondoId = $i * $secondoId;
    }
    return $secondoId;
}

function operation($operazione, $primoId, $secondoId)
{
    switch ($operazione) {
        case "somma":
            return somma($primoId, $secondoId);

        case "sottrazione":
            return sottrazione($primoId, $secondoId);

        case "divisione": //implementare un if per le divisioni su 0
            if ($secondoId == 0) {
                echo "impossibile dividere per zero";
            } else {
                return divisione($primoId, $secondoId);
            }

        case "moltiplicazione":
            return moltiplicazione($primoId, $secondoId);

        case "fattoriale":
            return fattoriale($primoId);
    }
}

echo "primo numero: " . $primoId . "<br>";
echo "secondo numero:" . $secondoId . "<br>";
echo operation($operazione, $primoId, $secondoId);

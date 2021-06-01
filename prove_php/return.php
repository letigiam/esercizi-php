<?php
    function sommaNumeri($num1, $num2){
        $somma = $num1 + $num2;
        return $somma;
    }
        $risultato = sommaNumeri(9,4);
        echo $risultato .'<br>';
        $risultato = sommaNumeri(4, $risultato);
        echo $risultato;

        echo '<br>';

        function nomeUtente($nomeUtente, $cognomeUtente){
            echo $nomeUtente, $cognomeUtente;
        }    
        nomeUtente('Letizia ', ' Giammorcaro');
?>
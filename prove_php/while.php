<?php
    $contatore = 0;
    while($contatore<=10){
        echo $contatore;
        $contatore++;
    }

    echo '<br>';

    $spesa = 2;
    $budjet = 30;

    while($spesa<=$budjet){
        echo 'ho speso €: '. $spesa ."\n" .  'Mi rimangono € '."\n" . ($budjet-$spesa) .'<br>';
        $spesa +=2;
    }
?>
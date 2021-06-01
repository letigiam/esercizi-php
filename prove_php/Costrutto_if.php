<?php
    $age=15;
    if($age >= 18){
        echo 'sei maggiorenne';
    }else{
        echo 'ritenta quando sarai più grande';
    }

    $anni = 20;
    if($anni >=18){
        echo 'sei maggiorenne';
    }else if ($anni >= 15 && $anni <18){
        echo 'ormai ti manca poco';
    }else{
        echo 'mi spiace, devi aspettare ancora un pò';
    }
?>
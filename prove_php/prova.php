<html>
<head>
<title>Pagina di Esempio</title></head>
<body>
<?php

//Come sostituire il primo nome con utilizzo di str_replace 
//sostituisce il primo nome con il secondo indicato

$nome = "Letizia\n";
$a = 9;
$b = 0.56;
$c = "Ciao Letizia, ";
$d = 'come stai?';

echo $nome;
echo "<h3>Ciao Mondo3!</h3>";
echo "$c $d\n";

$stringa = "Il mio nome è Letizia<br>";
echo $striga. "\n";

echo str_replace('Letizia', 'Minu', $stringa);

$strighe = array(
'Il mio nome è Letizia<br>',
'Letizia è nata nel 1980<br>'
);

print_r (str_replace('Letizia', 'Minu', $strighe));
var_dump(str_replace('Letizia', 'Minu', $strighe));

//esempio di come concatenare più elementi tra di loro, con utilizzo del punto '.'
$a = 'essere';
$b = 'o';
$c = 'non';
$d = 'essere';

echo "<br>".$a . "<br>" . $b . "<br>" . $c . "<br>" . $d . ".<br>";

/*come la variabile Goblale come argomento della funzione come variabile locale*/
/*
$a = 10;
function summ($a) //richiamo la variabile globale a
{
    return $a +10;
}
echo summ($a),


//dichiaro la variabile a come 10 
$a = 10;
function somma($b) //dichiaro una nuova variabile b
{
    return $a + $b; //a sarà una nuova variabile locale infatti la segna come errore per non è dichiarata
}
echo somma(10),
//è possibile accedere all'Array Globale

*/
$a = 10;
function sum($b){
    return $GLOBALS['a'] + $b; //richiamo, forzando l'utilizzo del Global, l'Array eseterno alla funzione
}
echo sum(10),

//Strutture di Controllo if ed else e Switch-casa

$tempo = "<br>piove<br>";
//creo la condizione
if($tempo == "piove"){
    echo "resto a casa<br>";
}else{
    echo "vado al parco <br>";
}
// il ciclo for in php
//possiamo definire il contatore all'interno delle parentesi
//vedremo 11 perchè farà un controllo 11 volte ma non moltiplica l'undicesima perchè
//la condizione dice non superiore a 10 e quindi il risultato sarà 30 
?>
<br>
<?php
for ($moltiplicatore = 1; $moltiplicatore <= 10; $moltiplicatore++) {
    $risultato = 3 * $moltiplicatore;
    }
   echo "3 * " . $moltiplicatore . " = " . $risultato . "<br/>";
?>
<br>
<?php
// Do-While
//si ripete sempre per condizioni vere, se la condizione cambia a falsa
//non cicla più vera e si ferma   
$moltiplicatore = 1;
 while ($moltiplicatore <= 10) {
 $risultato = 5 * $moltiplicatore;
 echo "5 * " . $moltiplicatore . " = " . $risultato . "<br/>";
 $moltiplicatore++;
 }
?>
<br>
 <?php
// dichiarazione esplicita con elementi solo numerici

  $vettore_a = array (2, 5, 7, 9, 11);
  $vettore_b = array (2, "pippo", true, 1.24, array (1,2,3));
 // dichiarazione esplicita con elementi misti
 $vettore_c = array (0 => 2, 1 => "pippo", 2 => true);
 // notazione per indicare le chiavi del vettore (potevano essere omesse senza problemi)
 $vettore_c[0] = 21; //nome array -> $vettore_c[0], chiave -> 21
 // accesso all’elemento 0 del vettore_c
 $vettore_c[1] = "pippo";
 // accesso all’elemento 1 del vettore_c
 
 var_dump($vettore_b)

 ?>
<br>
 <?php

$hash_a = array(
    "italia" => "roma<br>",
    "francia" => "parigi<br>",
    "spagna" => "madrid<br>",
    12 => "pippo<br>");

$hash_b["italia"] = "<br>ROMA";
$hash_b["francia"] = "<br>PARIGI";
$hash_b[12] = "parigi<br>";
var_dump($hash_a);
print_r($hash_b[12]);


$partecipanti = ['Simone', 'Gabriele', 'Renato', 'Giuseppe'];
      print_r($partecipanti);
      shuffle($partecipanti);
      print_r($partecipanti);
      $partecipanti = ['a'=> 'Simone',
                       'b'=> 'Gabriele',
                       'c'=> 'Renato',
                       'd'=> 'Giuseppe'];
      print_r($partecipanti);
      shuffle($partecipanti);
      print_r($partecipanti);
      
 
?>
</body>
</html>
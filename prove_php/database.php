<?php

//--------------- MI COLLEGO A MYSQL -----------------//
//localhost -> indirizzo ip','root -> login ', 'root -> password'

$mysqli = new mysqli('localhost','root', 'root');
if ($mysqli->connect_error) { //se mi da errore =true entra in die e interrompe la connessione con die
    die('Errore di connessione ('.'codice errore: ' . $mysqli->connect_errno . ')'.' messaggio di errore: '. $mysqli->connect_error);
    //die mi interrompe la connessione in modo drastica
} else { //altrimenti se mi da =false connettimi al server
    echo 'Connesso. <br> ' . $mysqli->host_info . "\n";
}

//--------------- CREO UN NUOVO DATABASE -----------------//
 // $res=$mysqli->query("CREATE DATABASE corso13");

//--------------- SELEZIONO IL DATABASE CON 'USE' -----------------//    
//-- UTILE PER DIRGI DOVE DEVE ANDARE A INSERIRE LA NUOVA TABELLA --//

    $mysqli->query("USE corso13"); 
    $mysqli->query($query_string);

//--------------- CREO UNA NUOVA TABELLA -----------------//

//  $query_string = "CREATE TABLE persona ('id' INT(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY('id'),
//  'nome' VARCHER (50) NOT NULL, 
//  'cognome' VARCHER (50) NOT NULL, 
//  'eta' TINYINT(3) NOT NULL, 
//  'email' VARCHER (50) NOT NULL, 
//  'password' VARCHER (256) NOT NULL) ENGINE = InnoDB;"; 


//--------------- INSERISCO I DATI PER CREARE UNA NUOVA RIGA -----------------//
    
$password = $_POST['password'];
$name ="maria";
$surname="gatta";
$eta="23";
$email="maria.gatta@gmail.com";
$password = "sticaxxi!";

//--------------- INSERISCO UNA NUOVA RIGA NELLA TABELLA -----------------//

$password_hash = hash('sha256', $password);

$query_string = "INSERT INTO `persone` (`id`, `name`, `surname`,`eta`,`email`, `password`) VALUES 
                                    (NULL, '$name','$surname', '$eta', '$email', '$password_hash')";


//--------------- stampo a video cosa ho scritto nella nuova riga, non è necessario averlo attivo -----------------//

//echo "<br>" .$query_string;

//--------------- CREO UNA NUOVA TABELLA PER VEDERE GLI ACCESSI -----------------//
// $id_new_user = $mysqli ->insert_id; 
// $query_string = "CREATE TABLE `corso13`.`accessi` ( `id` INT NOT NULL AUTO_INCREMENT , 
//                 `date` DATE NOT NULL , `user_id` INT NOT NULL , PRIMARY KEY (`id`))";

//mi serve per creare una nuova tabella accessi e avere il controllo di quanti user si sono collegati

$query_string = "INSERT INTO `accessi` (`id`, `date`, `user_id`) VALUES (NULL, '2020-11-13', 'user_id');";

echo "<br>" .$query_string;
$res = $mysqli->query($query_string);

 if($res){
     echo"<br> creato";
 }else{
     echo "<br> non creato <br>";
 }

 echo "Righe generate " . $mysqli ->affected_rows. "<br />";
 echo "Ultimo ID inserito ". $mysqli ->insert_id. "<br />";
?>
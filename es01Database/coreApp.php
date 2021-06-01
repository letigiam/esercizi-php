
<?php
    require_once "manageDB.php";

    //--------------- MI COLLEGO AL DATABASE DI MYSQL -----------------//

    $mysqli = connectDB('localhost','root', 'root');
    echo 'Connesso al DB esercizio'. $mysqli->host_info. "\n";

    //--------------- CREO UN NUOVO DATABASE -----------------//

    // createDB($mysqli, 'nuovoDatabase');
    // echo "<br>";
    // echo 'DB esercizio creato '. $mysqli->host_info. "\n";

    $mysqli->query("USE esercizio"); 
    $mysqli->query($query_string);

    //--------------- CREO UNA NUOVA TABELLA USERS -----------------//
    createTB($mysqli, 'users');
    echo 'Aggiunta tabella users'. $mysqli->host_info. "\n";
    
    //--------------- INSERISCO I DATI TABELLA ACCESSI -----------------//      
    createTBAccessi($mysqli, 'accessi');
    
    //--------------- INSERISCO I DATI PER CREARE UNA NUOVA RIGA -----------------//
    createPerson($mysqli, $name, $surname, $age, $email, $password);
    //echo "<br>";

    //--------------- INSERISCO IL LOGIN -----------------//       
    login($mysqli, $email, $password_hash);

    //--------------- MOSTRO GLI ACCESSI -----------------//   
    mostraAccessi($mysqli, $id, $data,$user_id);



    
?>

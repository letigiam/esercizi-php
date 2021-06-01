<?php 

//--------------- MI COLLEGO A MYSQL -----------------//
function connectDB($host, $user, $pass){
    $mysqli = new mysqli($host, $user, $pass);
    if ($mysqli->connect_error) { //se mi da errore =true entra in die e interrompe la connessione con die
        die('Errore di connessione ('.'codice errore: ' . $mysqli->connect_errno . ')'.' messaggio di errore: '. $mysqli->connect_error);
            } else { //altrimenti se mi da =false connettimi al server
        return $mysqli;
    }
}

//--------------- CREO UN NUOVO DATABASE -----------------//

function createDB ($mysqli, $db_name){
    $query_string = "CREATE DATABASE " .$db_name; 
    $res= $mysqli->query($query_string);
    return $res;
}

//--------------- CREO UNA NUOVA TABELLA -----------------//
function createTB($mysqli, $users){
    $mysqli->query("USE esercizio"); 

    $query_string = "CREATE TABLE `esercizio`.`$users` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `name` VARCHAR(50) NOT NULL , 
        `surname` VARCHAR(50) NOT NULL , 
        `email` VARCHAR(50) NOT NULL , 
        `password` VARCHAR(256) NOT NULL , 
        `xid` INT REFERENCES accessi(idaccessi)
        PRIMARY KEY (`id`)
        ) ENGINE = InnoDB;";  
    
    echo "<br>";
    $res= $mysqli->query($query_string);
    return $res;

}

//--------------- CREO UNA NUOVA TABELLA ACCESSI -----------------//
//ALTER TABLE `Accessi` ADD CONSTRAINT `UsersAccess` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

function createTBAccessi($mysqli, $accessi){
    $mysqli->query("USE esercizio"); 

    $query_string = "CREATE TABLE `esercizio`.`$accessi` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `data` DATA NOT NULL , 
        `user_id` VARCHAR(50) NOT NULL ,  
        PRIMARY KEY (`id`)
        ) ENGINE = InnoDB;";  
    
    echo "<br>";
    $res= $mysqli->query($query_string);
    return $res;

}


//--------------- INSERISCO I DATI PER CREARE UNA NUOVA RIGA -----------------//

    function createPerson($mysqli, $name, $surname, $email, $password){


        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_REQUEST['email'];
        $password = $_POST['password'];
        $password_hash = hash('sha256', $password);

        if(isset($_POST['submit'])){
            if (!empty($name) && !empty($surname) && !empty($email) && !empty($password)) {
                $query_string = "INSERT INTO `users` (`id`, `name`, `surname`,`email`, `password`) VALUES
                    (NULL, '$name','$surname', '$email', '$password_hash')";
                
                $creaUtenti = mysqli_query($mysqli, $query_string);

                if(!$creaUtenti){
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo 'Indirizzo email non corretto';
                            }
                    die('Query fallita'.mysqli_error($mysqli));
                } $msg = "Dati registrati con successo";
                echo"$msg";
            }else{
                $msg= "I dati non sono stati registrati";
                echo"$msg";
            }  
        }
        echo "<br>";
        echo "Ultimo ID inserito: " . $mysqli->insert_id  . "<br />";
        echo "Righe generate: " .  $mysqli->affected_rows . "<br />";
    }
//--------------- INSERISCO I DATI TABELLA ACCESSI -----------------//

    function accessi($mysqli){
        $id_new_user = $mysqli->insert_id;
        $query_string = "INSERT INTO `accessi` (`id`, `data`, `user_id`) VALUES
            (NULL, CURRENT_TIMESTAMP,'$id_new_user')";
            $mysqli->query($query_string);
    }

//SELECT `id`, `name`, `surname`, `email`, `password` FROM `users` WHERE 1


//--------------- MOSTRO TUTTI GLI UTENTI -----------------//      
    function mostraAccessi($mysqli, $id, $data,$user_id){

        
        $query_string = "SELECT * FROM accessi";
        $mostraUtenti = mysqli_query($mysqli, $query_string);
           while($row = mysqli_fetch_array($mostraUtenti)){
            $id = $row['id'];
            $data = $row['data'];
            $user_id = $row['user_id'];

            echo "<tr>";
            echo"<td>{$id}</td>";
            echo"<td>{$data}</td>";
            echo"<td>{$user_id}</td>";
            echo "</tr>";

        }
        $res= $mysqli->query($query_string);
        return $res;

    }

//--------------- INSERISCO IL LOGIN -----------------//      

function login($mysqli, $email, $password_hash){
            $email = $_REQUEST['email'];
            $password = $_POST['password'];
            $password_hash = hash('sha256', $password);

            $query_string = "SELECT * FROM users WHERE email = '$email' AND password = '$password_hash'";
            $result = mysqli_query($mysqli, $query_string);
            return $result;
            // $row = mysqli_fetch_array($result);

            // if($row['email'] == $email && $row['password_hash'] == $password_hash ){
            //     echo" Login con successo ".$row['email'];
            //     header("location:home.php");
            // } else{
            //     echo"Login fallito";
            // }
            
}

//--------------- VERIFICO SE UNA ROW ESISTE GIà -----------------//
    // function checkUsers($mysqli, $email, $password_hash){

    //     $email = $_POST['email']; 

    //     $password_hash = hash('sha256', "password");
    //     $res = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password_hash'");
    //     if($res->num_rows) {
    //         echo "<pre>"; // Il tag pre rende facilmente leggibile l'array
    //         print_r($res->fetch_all(MYSQLI_BOTH));
    //         echo "</pre>";
    //         } else {
    //         echo "Accesso rifiutato";
    //         }
    // }
        
?>
<?php
session_start(); //inizializzo la sessione
if ($_GET['delete']) {
    if ($_GET['delete']=='all_city'){
        session_destroy();
        session_start();
    }else{
        unset($_SESSION['city'][$_GET['delete']]);
    }
}


//arrivano i dati dall'imput
if($_POST['cities']){
    $cities = explode(",", $_POST['cities']);
    foreach($cities as $city){
        $_SESSION['city'][$city] = $city;
    }
}

// $cityUnique = array_unique($_SESSION['city']);
// if($_POST['city']){
//     $cities = explode(",", $_POST['cities']);
//         foreach($cityUnique as $c){
//             echo $c;
//         }
//     }

//se la sessione esiste devo stampare le città

if(isset($_SESSION['city'])){
    foreach($_SESSION['city'] as $city){
        echo "<li> Citta: ".$city."<a href='?delete=" . $city . "'> Elimina</a></li>";
    }
    echo "<a href='?delete=all_city'>Elimina tutto</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="inputCity.php">
    <p>Qui di seguito puoi aggiungere le città italiane preferite, separate da virgola</p>
    <input type="text" name="cities">
    <input type="submit" valut="invia">
</form>
</body>
</html>
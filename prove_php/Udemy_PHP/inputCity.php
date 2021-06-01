<?php
session_start(); //inizializzo la sessione
if($_GET['delete']){
    session_destroy();
    session_start();
}else{
    unset($_SESSION['city'][$_GET['delete']]);
}

//arrivano i dati dall'imput
if($_POST['cities']){
    $cities = explode(",", $_POST['cities']);
    foreach($cities as $city){
        $_SESSION['city'][$city] = $city;
    }
}

//se la sessione esiste devo stampare le città

if(isset($_SESSION['city'])){
    foreach($_SESSION['city'] as $city){
        echo "<li> Citta: ".$city."<a href='?delete" . $city . "'>Elimina città</a></li>";
    }
    echo "<a href='?delete=all_city'>Elimina tutto</a>";
}
?>
<form method="post" action="inputCity.php">
    <p>Qui di seguito puoi aggiungere le città italiane preferite, separate da virgola</p>
    <input type="text" name="cityinput">
    <input type="submit" valut="invia">
</form>
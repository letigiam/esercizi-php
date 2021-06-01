<?php
session_start();

if($_GET['delete']){
    if($_GET['delete'] == 'all_city'){//eliminare tutte le città
        session_destroy();
        session_start();
    }
    else{
        unset($_SESSION['city'][$_GET['delete']]);//eliminare una singola città
    }
}


echo '<a href="index.html">ricarica la pagina iniziale</a>';
?>
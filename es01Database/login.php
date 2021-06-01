<?php
    require_once "coreApp.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!doctype html>
<html lang="en">
  <head>
  <title>Esercizio Database - Corso13</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <div id="section"> 
        <form method="post" action="home.php">  
            <div class="form-group">
              <h3>Inserisci i tuoi dati di accesso</h3>
            </div>
            <div class="form-group">
              <input type="mail" name="email" class="form-control"  placeholder="email*">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password*">
            </div>
            <p class="form-group">Tutti i campi del modulo sono obbligatori!*</p>
            <button type="submit" class="btn btn-primary" name="invia" valut="invia">Submit</button>
        </form>

      </div>
    </div> 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</html>


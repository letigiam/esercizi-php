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
            <div class="form-group">
              <h3>Benvenuto</h3>
              <div class="col-sm-8">
                <table class="table table-border table-hover">
                  <thead class="bg-success">
                    <tr>
                      <td>Id</td>
                      <td>Data</td>
                      <td>User_id</td>
                    </tr>
                  </thead>  
                  <tbody>
                    <tr>
                    <td>
                    <?php 
                    mostraAccessi($mysqli, $id, $data, $user_id);
                    ?>
                    </td>
                    </tr>  
                  </tbody>
                </table>
              </div> 

            </div>
        
      </div>
    </div> 


<?php
include_once("helpers/url.php");
//include_once("helpers/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Estilos do projeto -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>MovieWare</title>
</head>

<body>
  <nav class="nav-extended grey darken-1">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="left">
        <a class="waves-effect waves-light btn-large active" href="<?php $BASE_URL ?>auth.php"><i class="material-icons right">account_circle</i>Login / Registro</a>
      </ul>
    </div>
    <div class="nav-header center">
      <a href="<?php $BASE_URL ?>./" id="logo">
        <img class="nav-img" src="https://img.icons8.com/color/96/000000/film-reel.png" />
        <h1>MovieWare</h1>
      </a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent teal darken-3">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
        <li class="tab right"><a href="<?php $BASE_URL ?>./">Galeria</a></li>
        <li class="tab right"><a href="register.php">Cadastrar novo filme</a></li>
      </ul>
      </ul>
    </div>
  </nav>
</body>
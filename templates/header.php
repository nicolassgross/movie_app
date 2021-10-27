<?php
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Estilos do projeto -->
        <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>MovieWare</title>
</head>
<body>
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="logo-header center">
            <a href="<?php $BASE_URL ?>./" id="logo">
                <img src="https://img.icons8.com/color/96/000000/film-reel.png"/>
            </a>
        </div>
        <div class="nav-header center">
            <h1>MovieWare</h1>    
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-3">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
</body>
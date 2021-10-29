<?php
include_once("helpers/connection.php");
include_once("helpers/process.php"); 
?>
<?php


    $titulo = $_POST['titulo'];
    $poster = $_POST['poster'];
    $nota = $_POST['nota'];
    $ano = $_POST['ano'];
    $sinopse = $_POST['sinopse'];

     //Salvar as informações de cadastro do filme e salvar no banco de dados
    $cadfilme = "INSERT INTO filmes (titulo, poster, nota, ano, sinopse) VALUES 
    (:titulo, :poster, :nota, :ano, :sinopse)";
    $res_cadfilme= $conn->prepare($cadfilme);
    $res_cadfilme->execute(['titulo' => $titulo, 'poster'=>$poster, 'nota'=>$nota, 'ano'=>$ano, 'sinopse'=>$sinopse]); 

    header("Location: index.php?msg=Filme+cadastrado");
?>
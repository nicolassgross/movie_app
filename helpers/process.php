<?php

    session_start();
    
    //Buscar dados dos filme e adicionar nos cards da index
    $select1 = "SELECT `titulo`, `poster`, `nota`, `ano` FROM filmes";
    
    $res_select1= $conn->prepare($select1);
    $res_select1->execute(); 

?>


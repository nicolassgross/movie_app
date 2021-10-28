<?php

    session_start();
    
    $select1 = "SELECT * FROM filmes";
    
    $res_select1= $conn->prepare($select1);
    $res_select1->execute(); 

?>


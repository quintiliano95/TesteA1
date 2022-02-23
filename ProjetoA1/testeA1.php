<?php

    ini_set('max_execution_time', 0);

    require 'conexao.php';
    $bancoA1 = 'C:\Users\asas\Documents\GitHub\EngenhariaA1\TesteA1\ProjetoA1/itens.csv';

    if(file_exists($bancoA1)) {
        mysqli_query($conecta, "LOAD DATA INFILE '$bancoA1' INTO TABLE itens 
        FIELDS TERMINATED BY ';'
        LINES TERMINATED BY '\n'
        IGNORE 1 ROWS");
    } 
    else {
        echo "Arquivo não encontrado!";
    }

?>
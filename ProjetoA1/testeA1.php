<?php

    ini_set('max_execution_time', 0);  // Não interromper o script PHP que está sendo executado.

    require 'conexao.php';
    $bancoA1 = 'C:/Users/asas/Documents/GitHub/EngenhariaA1/TesteA1/ProjetoA1/itens.xlsx'; //Diretório do Banco de Dados

    if(file_exists($bancoA1)) {
        mysqli_query($conecta, "LOAD DATA INFILE '$bancoA1' INTO TABLE itens 
        FIELDS TERMINATED BY ';'
        LINES TERMINATED BY '\n'
        IGNORE 1 ROWS"); // Carregando os dados no banco de dados.
    } 
    else {
        echo "Arquivo não encontrado!";
    }

?>
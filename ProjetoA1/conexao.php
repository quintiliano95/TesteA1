<?php

    $localhost = "localhost"; // Colocar endereço de onde está o servidor. Se for na própria máquina, deixar como está.
    $user = "root"; // Trocar "root" pelo usuário que irá acessar o banco de dados. Caso seja "root", deixar como está.
    $senha = ""; // Colocar a senha. Caso não tenha senha, deixar como está.
    $banco = "a1";

    $conecta = mysqli_connect($localhost, $user, $senha, $banco);


?>
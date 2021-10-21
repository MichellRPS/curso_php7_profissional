<?php
    // Criar arquivo de conexão (aula 133)
    // Criar uma pasta e um arquivo separados para os dados de conexão ao banco de dados é uma medida de segurança para evitar que as pessoas tenham acesso aos dados do servidor
    $servidor   = "localhost:3325";
    $usuario    = "root";
    $senha      = "";
    $banco      = "andes";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(mysqli_connect_errno()) {
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>
<?php 
    // FUNÇÕES DE STRINGS
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna tamanho da string
            // echo strlen($_nome);
            
            // stripos  - Retorna primeira ocorrência 
            // case-insensitive
            // echo stripos($_nome, "c");

            // strripos - Retorna última ocorrência
            // case-insensitive
            // echo strripos($_nome, "p");
            
            // strtolower - converte para letras min.
            // não funciona para caracteres especiais
            // echo strtolower($_nome);

            // strtoupper - converte para letras mai.
            // não funciona para caracteres especiais
            // echo strtoupper($_nome);

            // SUBSTR_COUNT - Conta ocorrências de substring
            // case-sensitive
            // echo SUBSTR_COUNT($_nome, "a");
        ?>
        
        
    </body>
</html>
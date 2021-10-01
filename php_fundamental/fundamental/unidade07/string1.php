<?php 
    // CONCATENAÇÃO DE STRINGS
    $_marca = "Fiat";
    $_nome = "Uno";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>        
        <p><?php
            echo $_marca . " " . $_nome;
            // o ponto indica concatenação
        ?></p>
    </body>
</html>
<?php
    // VALOR NULL (AULA 30)
    $_nome = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Valor da variável nome: $_nome <br />";
            // Esse valor não aparece na tela do navegador
            echo "Essa variável é nula? " . is_null($_nome);
        ?>
    </body>
</html>
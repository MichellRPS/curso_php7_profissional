<?php
    // FUNÇÃO isset (AULA 31)
    $_nome = "Michell";
    $_telefone = "(34) 9 9969-9014";
    $_linkedIn = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // A função isset retorna true se a variável existe e não é nula, e false se a variável não existe ou é nula
            echo "A variável nome está configurada? " . isset($_nome) . "<br />";
            echo "A variável telefone está configurada? " . isset($_telefone) . "<br />";
            echo "A variável linkedIn está configurada? " . isset($_linkedIn);
        ?>
    </body>
</html>
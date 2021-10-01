<?php
    // OPERADORES LÓGICOS IGUAL E DIFERENTE (AULA 44)
    $_smoker = true;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            if (! $_smoker) {
                // poderia ser $_smoker == false ou ainda $_smoker != true
                echo "não é fumante.";
            } else {
                echo "é fumante";
            }
        ?>
    </body>
</html>
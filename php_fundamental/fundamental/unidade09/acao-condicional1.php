<?php
    // IF E ELSE (AULA 38)
    $_a = 9;
    $_b = 9;
    $_fumante = true;
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
            if ($_a > $_b) {
                echo "a é maior que b.<br />";
            } else if ($_a < $_b) {
                echo "a é menor que b.<br />";
            } else {
                echo "a é igual a b.<br />";
            }

            if (! $_fumante) {
                echo "não é fumante.";
            } else {
                echo "é fumante.";
            }
            // em variáveis booleanas não é preciso estipular uma condição de igual, maior, nem menor no if, porque só entrará caso seja verdadeiro, a não ser que coloque uma exclamação antes, indicando que só deve entrar caso seja falso
        ?>
    </body>
</html>
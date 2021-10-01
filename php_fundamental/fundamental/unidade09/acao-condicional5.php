<?php
    // OPERADORES LÓGICOS IGUAL E IDÊNTICO (AULA 45)
    $_num01 = 5;
    $_num02 = "5";
    $_num03 = '5';
    $_num04 = 5.0;
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
            if ($_num01 == $_num04) {
                echo "os números são iguais";
            } else {
                echo "os números não são iguais";
            }

            if ($_num01 === $_num04) {
                echo " e os tipos das variáveis também são.";
            } else {
                echo ", mas os tipos das variáveis não são.";
            }
            // operador idêntico ===
            // operador não idêntico !==
        ?>
    </body>
</html>
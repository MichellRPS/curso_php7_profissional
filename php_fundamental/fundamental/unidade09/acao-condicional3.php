<?php
    // OPERADOR TERNÁRIO (AULA 42)
    $_age = 17;
    $_adulthood = ($_age >= 18)? true : false;
    // o operador ternário é a interrogação (como se fosse um if) e os dois pontos (os possíveis resultados: se for verdadeira a condição, atribui o primeiro valor, senão atribui o segunda, depois dos dois pontos)
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
            echo "Idade: $_age <br />";
            if ($_adulthood) {
                echo "É maior de idade.";
            } else {
                echo "É menor de idade.";
            }
        ?>
    </body>
</html>
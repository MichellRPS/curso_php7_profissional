<?php
    // OPERADORES LÓGICOS && E || (AULA 46)
    $_day = "friday";
    $_age = 19;
    $_sex = "male";
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
            if ($_day == "saturday" || $_day == "sunday") {
                echo "É final de semana.<br />";
            } else {
                echo "É meio de semana.<br />";
            }

            if ($_age >= 18 && $_sex == "male") {
                echo "Homem maior de idade.";
            } else if ($_age < 18 && $_sex == "male") {
                echo "Homem menor de idade.";
            } else if ($_age >= 18 && $_sex == "female") {
                echo "Mulher maior de idade.";
            } else if ($_age < 18 && $_sex == "female") {
                echo "Mulher menor de idade.";
            }
        ?>
    </body>
</html>
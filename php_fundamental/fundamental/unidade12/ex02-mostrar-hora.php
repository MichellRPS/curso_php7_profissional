<?php
    // MOSTRAR HORA (AULA 61)
    date_default_timezone_set ("America/Sao_Paulo");
    $_time = getdate ();
    // link para documentação da função getdate: https://www.php.net/manual/en/function.getdate
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $_time ["hours"] . ":" . $_time ["minutes"] . ":" . $_time ["seconds"] . "<br />";
            echo $_time ["mday"] . "/" . $_time ["mon"] . "/" . $_time ["year"];
            // É assim que se acessa um array associativo!
        ?>

        <pre>
            <?php
                print_r($_time);
            ?>
        </pre>
    </body>
</html>
<?php
    // FUNÇÃO getdate (AULA 60)
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
            echo $_time["hours"] . ":" . $_time["minutes"];
        ?>

        <pre>
            <?php
                print_r ($_time);
            ?>
        </pre>
    </body>
</html>
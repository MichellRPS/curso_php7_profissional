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

        <pre>
            <?php
                // carimbo digital para ações, como acesso a uma página ou realização de uma compra, com precisão numérica de milisegundos para maior confiabilidade
                print_r(gettimeofday());
                // o dado referente aos milisegundos ocupa a posição [usec]
                // os valores podem aparecer ligeiramente diferentes, pois o computador também leva um certo tempo para executar as instruções
                echo gettimeofday()["usec"];
            ?>
        </pre>
    </body>
</html>
<?php
    // CALCULANDO A DIFERENÇA ENTRE DATAS (AULA 64)
    $_date01 = new DateTime ("23-05-2020");
    $_date02 = new DateTime ("10-05-2021");
    $_gap = $_date01 -> diff ($_date02);
    // A VARIÁVEL GAP CONTÉM A DIFERENÇA, EM DIAS, DA PRIMEIRA DATA ATÉ A SEGUNDA. CONTÉM TAMBÉM A QUANTIDADE DE MESES E DIAS PASSADOS DESDE A PRIMEIRA DATA
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                print_r ($_gap);
            ?>
        </pre>

        <?php
            echo $_gap -> format ("%a") . "<br />"; // ESSA LINHA ESCREVE NA TELA A QUANTIDADE TOTAL DE DIAS DESDE A PRIMEIRA DATA
            echo "<br />Anos: " . $_gap -> format ("%Y") . "<br />Meses: " . $_gap -> format ("%M") . "<br />Dias: " . $_gap -> format ("%D");
            
            // LINK PARA A DOCUMENTAÇÃO DA FUNÇÃO format, DA CLASSE DateInterval: https://www.php.net/manual/en/dateinterval.format.php
        ?>
    </body>
</html>
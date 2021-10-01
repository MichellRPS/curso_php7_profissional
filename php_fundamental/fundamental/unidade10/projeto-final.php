<?php
    // PROJETO FINAL: SORTEIO MEGASENA (AULA 54)
    $_megasena = array ();
    $_count = 0;

    while ($_count < 6) {
        $_number = rand (1, 60);
        if(! in_array ($_number, $_megasena)) {
            $_megasena [] = $_number;
            $_count ++;
        }
    }
    sort ($_megasena);
    // POR QUE NÃO USAR O FOR?
    // R: DENTRO DO LAÇO FOR NÃO É POSSÍVEL CONTROLAR QUANDO A VARIÁVEL QUE PERCORRE O VETOR É INCREMENTADO. A CADA ITERAÇÃO, INDEPENDENTEMENTE DO QUE ACONTECER, A VARIÁVEL SERÁ INCREMENTADA. NO LAÇO WHILE, A VARIÁVEL $_count SÓ É INCREMENTADA CASO O NÚMERO ALEATÓRIO GERADO NÃO ESTIVER CONTIDO NO VETOR $_megasena
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <pre>
            <?php                    
                print_r ($_megasena);
            ?>
        </pre>
    </body>
</html>
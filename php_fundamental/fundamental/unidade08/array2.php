<?php
    // FUNÇÕES DE ARRAYS (AULA 34)
    // o método para criar array não aceita zeros à esquerda
    $_megasena = array(60, 9, 19, 4, 17, 37);
    // no site: php.net/manual/pt_BR/book.array.php está uma lista com todos as funções que podem usadas em arrays
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
                echo "Array desordenado:<br />";
                print_r($_megasena);
                
                echo "Array em ordem crescente:<br />";
                sort($_megasena);
                print_r($_megasena);
                
                echo "Array em ordem decrescente:<br />";
                rsort($_megasena);
                print_r($_megasena);

                echo "Menor número do array: " . min($_megasena) . "<br />";
                echo "Maior número do array: " . max($_megasena) . "<br />";
            ?>
        </pre>
    </body>
</html>
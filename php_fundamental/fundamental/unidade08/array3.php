<?php
    // PESQUISA EM UM ARRAY (AULA 35)
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // função in_array retorna true se um elemento existe no array, senão retorna false
            echo "$_salada[0] existe no array salada? " . in_array("Laranja", $_salada) . "<br />";
            // função array_search retorna a posição de um elemento caso exista no vetor
            echo "Abacate existe no vetor salada? Se existe, qual sua posição? " . array_search("Abacate", $_salada);
        ?>
    </body>
</html>
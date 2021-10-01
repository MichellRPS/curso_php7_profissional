<?php
    // ARREDONDANDO VARIÁVEIS (AULA 28)
    $_gasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para média
            echo "Arredondando $_gasolina para média: " . round($_gasolina) . "</br>";
            // Se a primeira casa decimal do valor passado for maior ou igual a 5, então esse método arredonda o número para o próximo inteiro. Caso contrário, arredonda todas as casas decimais para 0

            // arredondar para cima
            echo "Arredondando $_gasolina para cima: " . ceil($_gasolina) . "</br>";
            // Se qualquer casa decimal do valor passado for maior que 0, então esse método arredonda o número para o próximo inteiro.

            // arredondar para baixo
            echo "Arredondando $_gasolina para baixo: " . floor($_gasolina) . "</br>";
            // Se qualquer casa decimal do valor passado for maior que 0, então esse método arredonda todas as casas decimais para 0.
        ?>
        
        
    </body>
</html>
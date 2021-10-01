<?php 
    // FUNÇÕES NUMÉRICAS
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Salário trimestral: " . $salario * $meses . "</br>";
            echo "Salário quinzenal: " . $salario / 2 . "</br>";
            // a tag br indica quebra de linha

            // Exponencial
            echo "Exponencial: " . pow(8,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(400) . "</br>";

            // Número Randômico
            echo "Número randômico: " . rand() . "</br>";

            // Randômico em um intervalo
            echo "Número randômico em um intervalo: " . rand(0, 9) . "</br>";
            
            // Valor absoluto
            // sempre exibe o valor positivo
            echo "Valor absoluto: " . abs(-150) . "</br>";
        ?>
    </body>
</html>
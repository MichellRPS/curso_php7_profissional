<?php
    // VARIÁVEIS NUMÉRICAS (AULAS 26 E 27)
    // se no valor de uma variável não há cálculos matemáticos, então esse valor deveria estar em uma variável do tipo string
    // Ex: $_telefone = 34210047 é um número, porém não cálculos matemáticos no telefone, logo, seria mais apropriado assim: $_telefone = "3421-0047"
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "3429-0047";
    // números decimais ocupam mais espaço na memória que números inteiros
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "Teste de números</br>";
            echo "$_salario é um número? " . is_numeric($_salario) . "</br>";
            echo "$_gasolina é um número? " . is_numeric($_gasolina) . "</br>";
            echo "$_telefone é um número? " . is_numeric($_telefone) . "</br>";
            // Mesmo entre aspas é possível mostrar o valor de variáveis
            // Nesses métodos, o retorno igual a 1 é o mesmo que true e um espaço em branco é o mesmo que false

            // testar se é inteiro
            echo "</br>Teste de inteiros</br>";
            echo "$_salario é um número inteiro? " . is_int($_salario) . "</br>";
            echo "$_gasolina é um número inteiro? " . is_int($_gasolina) . "</br>";
            echo "$_telefone é um número inteiro? " . is_int($_telefone) . "</br>";

            // testar se é float
            echo "</br>Teste de racionais</br>";
            echo "$_salario é um número racional? " . is_float($_salario) . "</br>";
            echo "$_gasolina é um número racional? " . is_float($_gasolina) . "</br>";
            echo "$_telefone é um número racional? " . is_float($_telefone) . "</br>";

            // testar se é string
            echo "</br>Teste de strings</br>";
            echo "$_salario é uma string? " . is_string($_salario) . "</br>";
            echo "$_gasolina é uma string? " . is_string($_gasolina) . "</br>";
            echo "$_telefone é uma string? " . is_string($_telefone);
        ?>
        
        
    </body>
</html>
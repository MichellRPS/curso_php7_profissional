<?php
    // RESGATAR PARÂMETROS E MOSTRAR INFORMAÇÕES DO FORMULÁRIO (AULAS 66 E 67)
    $_codigo = $_GET ["codigo"];
    // A VARIÁVEL $_GET É A MELHOR MANEIRA DE RESGATAR PARÂMETROS NUMÉRICOS
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // GUARDANDO O CAMINHO PARA AS IMAGENS EM UM ARRAY (A POSIÇÃO DE CADA CAMINHO NO ARRAY É INTENCIONAL, POIS DEPENDERÁ DA VARIÁVEL CÓDIGO PARA MOSTRAR A IMAGEM)
            $_salada = array ("imagens/laranja.jpg", "imagens/maca.jpg", "imagens/abacate.jpg");
        ?>

        <!-- IMAGEM ESTÁTICA: <img src = "imagens/laranja.jpg"> -->
        <!-- IMAGEM DINÂMICA: -->
        <img src = "<?php echo $_salada [$_codigo] ?>">
        <!-- FOI INSERIDO UM CÓDIGO PHP DENTRO DA TAG img, NO QUAL FOI DADA A INSTRUÇÃO DE ESCREVER O CONTEÚDO DO ARRAY NA POSIÇÃO codigo, OU SEJA, NA POSIÇÃO CUJO NÚMERO É IGUAL ÀQUELE RECEBIDO POR PARÂMETRO AO CLICAR EM UM DOS LINKS -->
    </body>
</html>
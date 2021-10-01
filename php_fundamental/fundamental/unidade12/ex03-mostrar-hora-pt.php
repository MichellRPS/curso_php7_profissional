<?php
    // MOSTRAR HORA EM PORTUGUÊS (AULA 62)
    date_default_timezone_set ("America/Sao_Paulo"); // ESSA FUNÇÃO DEFINE O FUSO HORÁRIO
    setlocale (LC_TIME, "portuguese"); // ESSA FUNÇÃO DEFINE O LOCAL
    $_time = getdate (); // ESSA FUNÇÃO RETORNA UM ARRAY ASSOCIATIVO QUE CONTÉM DADOS SOBRE DATA E HORÁRIO ATUAIS

    // LINK PARA A DOCUMENTAÇÃO DA FUNÇÃO strftime: https://www.php.net/manual/en/function.strftime
    // ESSA FUNÇÃO FORMATA DATA E HORA DE ACORDO COM AS CONFIGURAÇÕES DO LOCAL
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // ESCREVENDO NA TELA
            echo $_time ["hours"] . ":" . $_time ["minutes"] . ":" . $_time ["seconds"] . " - " . $_time ["mday"] . " de " . strftime ("%B") . " de " . $_time ["year"];
        ?>
    </body>
</html>
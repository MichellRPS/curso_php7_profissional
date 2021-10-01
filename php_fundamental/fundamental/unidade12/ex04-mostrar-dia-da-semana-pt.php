<?php
    // MOSTRAR DIA DA SEMANA EM PORTUGUÊS (AULA 63)
    date_default_timezone_set ("America/Sao_Paulo");
    setlocale (LC_TIME, "portuguese");
    $_time = getdate ();

    // LINK PARA A DOCUMENTAÇÃO DA FUNÇÃO strftime: https://www.php.net/manual/en/function.strftime
    // ESSA FUNÇÃO FORMATA DATA E HORA DE ACORDO COM AS CONFIGURAÇÕES DO LOCAL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // DECLARANDO VARIÁVEIS
        $_hours     = $_time ["hours"];
        $_minutes   = $_time ["minutes"];
        $_seconds   = $_time ["seconds"];
        $_wday      = strftime ("%A");
        $_mday      = $_time ["mday"];
        $_month     = strftime ("%B");
        $_year      = $_time ["year"];
        // ESCREVENDO NA TELA
        echo $_hours . ":" . $_minutes . ":" . $_seconds . " - " . $_wday . ", " . $_mday . " de " . $_month . " de " . $_year;
    ?>
</body>
</html>
<?php
    // define fuso horário
    date_default_timezone_set("America/Sao_Paulo");

    // 184. Gerar nome único
    
    // define conjunto de caracteres
    $conjunto   = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    // define tamanho do subconjunto gerado aleatoriamente
    $tamanho    = 12;
    // define variável que armazena um caractere do conjunto
    $caractere  = "";
    // define variável que armazena o subconjunto gerado aleatóriamente
    $resultado  = "";

    for($i = 0; $i < $tamanho; $i ++) {
        // o número máximo gerado pelo função rand(0, strlen($conjunto) - 1)) é 35
        // porque embora o conjunto de caracteres contenha 36 caracteres,
        // o primeiro caractere é representado pelo número 0
        $letra = substr($conjunto, rand(0, strlen($conjunto) - 1), 1);
        $resultado .= $letra;
    }
    
    // pega dados de data e hora
    $agora = getdate();
    // define ano e dia do ano
    $dados_ano = $agora["year"] . "_" . $agora["yday"];
    // define horas, minutos e segundos
    $dados_hora = $agora["hours"] . $agora["minutes"] . $agora["seconds"];

    // escreve nome do arquivo (falta a extensão)
    echo $resultado . "_" . $dados_ano . "_" . $dados_hora;
?>
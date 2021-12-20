<?php
    // 219. Preparar o arquivo para uso do CallBack
    $callback = isset($_GET["callback"]) ? $_GET["callback"] : false;
    // conexão banco de dados
    $c = mysqli_connect("localhost:3325","root","","andes");
    // consulta tabela produtos
    $cp = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    // resultado
    $rp = mysqli_query($c,$cp);
    $retorno = array();
    while($linha = mysqli_fetch_object($rp)) {
        $retorno[] = $linha;
    }
    // se callback está definido, então escreve nome da função + dados json
    // senão escreve dados json apenas
    echo ($callback ? $callback . "(" : "") . json_encode($retorno) . ($callback ? ")" : "");
    // relembrando: json_encode($retorno) converte os dados da consulta (array associativo) para o formato JSON
    mysqli_free_result($rp);
    mysqli_close($c);
?>
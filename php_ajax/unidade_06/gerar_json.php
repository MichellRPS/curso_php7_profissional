<?php
    // 216. Criar um arquivo JSON dinâmico com PHP
    // dinâmico porque muda conforme alterações feitas nos registros do banco de dados
    // cria a conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    // consulta a tabela de produtos
    $cp = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    // resultado da consulta à tabela de produtos
    $rp = mysqli_query($c, $cp);
    // verifica erro
    if(!$rp) {
        die("Erro ao consultar o banco de dados.");
    }
    $retorno = array();
    // laço de repetição
    // while($l = mysqli_fetch_object($rp)) {
    while($l = mysqli_fetch_assoc($rp)) {
        // adiciona cada linha do resultado da consulta ao array
        $retorno[] = $l;
    }
    // codifica o array para o formato JSON
    echo json_encode($retorno);
    // libera a memória do resultado da consulta
    mysqli_free_result($rp);
    // fecha a conexão
    mysqli_close($c);
?>
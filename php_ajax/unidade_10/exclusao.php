<?php
    // 10. excluir dados via ajax
    // conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    if(mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    if(isset($_POST["transportadoraID"])) {
        $tid = $_POST["transportadoraID"];
        // consulta tabela transportadoras
        $ct = "DELETE FROM transportadoras WHERE transportadoraID = {$tid}";
        // resultado da consulta
        $rt = mysqli_query($c,$ct);
        if($rt) {
            $retorno["sucesso"]     = true;
            $retorno["mensagem"]    = "Transportadora excluída com sucesso!";
        } else {
            $retorno["sucesso"]     = false;
            $retorno["mensagem"]    = "Erro ao excluir transportadora";
        }
    }
    // codificar retorno para json
    echo json_encode($retorno);
    // fecha conexão
    mysqli_close($c);
?>
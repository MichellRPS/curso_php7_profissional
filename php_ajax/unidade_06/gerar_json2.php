<?php
    // 217. Preparar o arquivo para consulta em outros domínios
    // permite que qualquer outro domínio acesse esta consulta ao banco de dados
    header("Acess-Control-Allow-Origin:*");
    $c = mysqli_connect("localhost:3325","root","","andes");
    $cp = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $rp = mysqli_query($c, $cp);
    if(!$rp) {
        die("Erro ao consultar o banco de dados.");
    }
    $retorno = array();
    while($l = mysqli_fetch_assoc($rp)) {
        $retorno[] = $l;
    }
    echo json_encode($retorno);
    mysqli_free_result($rp);
    mysqli_close($c);
?>
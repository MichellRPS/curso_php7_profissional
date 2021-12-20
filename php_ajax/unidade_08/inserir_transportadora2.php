  <?php
    // 223. Tratar os dados de retorno
    $c = mysqli_connect("localhost:3325","root","","andes");
    if (mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        // consulta inserção
        $ci    = "INSERT INTO transportadoras";
        $ci    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $ci    .= "VALUES ";
        $ci    .= "('$nome','$endereco','$cidade', $estado)";
        // resultado
        $ri = mysqli_query($c, $ci);
        $retorno = array();
        if($ri) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Transportadora inserida com sucesso!";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Erro ao inserir transportadora.";
        }
        // por que precisa ter echo?
        echo json_encode($retorno);
    }
    // libera resultado da consulta
    // obs.: não precisa liberar quando é inserção?
    // fecha conexão
    mysqli_close($c);
?>
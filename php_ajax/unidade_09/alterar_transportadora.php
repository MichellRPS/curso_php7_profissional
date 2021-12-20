  <?php
  	// conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    if(mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        $tid        = $_POST["transportadoraID"];
        // consulta tabela transportadoras
        $ct = "UPDATE transportadoras SET ";
        $ct .= "nometransportadora = '{$nome}', ";
        $ct .= "endereco = '{$endereco}', ";
        $ct .= "cidade = '{$cidade}', ";
        $ct .= "estadoID = {$estado} ";
        $ct .= "WHERE transportadoraID = {$tid}";
        // resultado da consulta
        $rt = mysqli_query($c, $ct);
        $retorno = array();
        if($rt) {
            $retorno["sucesso"]     = true;
            $retorno["mensagem"]    = "Transportadora alterada com sucesso!";
        } else {
            $retorno["sucesso"]     = false;
            $retorno["mensagem"]    = "Erro ao alterar transportadora";
        }
        echo json_encode($retorno);
    }
	// fecha conexão
    mysqli_close($c);
?>
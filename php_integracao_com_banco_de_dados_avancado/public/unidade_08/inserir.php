<?php
    // 162. Criar um formulário
    require_once("../../conexao/conexao.php");
    // 164. Conferir a informação enviada via formulário
    if(isset($_POST["nometransportadora"])) {
        // print_r($_POST);
        // 165. Inserir no banco de dados
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $telefone   = $_POST["telefone"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estado"];
        $cep        = $_POST["cep"];
        $cnpj       = $_POST["cnpj"];

        $inserir = "INSERT INTO transportadoras";
        $inserir .= " (nometransportadora, endereco, telefone, cidade, estadoID, cep, cnpj)";
        // se não colocar os apóstrofos entre as variáveis, ocorrerá um erro
        $inserir .= " VALUES ('$nome', '$endereco', '$telefone', '$cidade', $estado, '$cep', '$cnpj')";
        $operacao_inserir = mysqli_query($conecta, $inserir);
        if(! $operacao_inserir) {
            die("Erro ao inserir registro");
        } else {
            header("location: listagem.php");
        }

    }
    // 163. Preencher o campo estados dinamicamente
    $consulta_estados = "SELECT nome, estadoID FROM estados";
    $resultado_estados = mysqli_query($conecta, $consulta_estados);
    if(! $resultado_estados) {
        die("Erro ao consultar o banco de dados");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css"    rel="stylesheet">
        <link href="_css/crud.css"      rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php");     ?>
        <?php include_once("../_incluir/funcoes.php");  ?> 
        
        <main>
            <div id = "janela_formulario">
                <form action = "inserir.php" method = "post">
                    <input type = "text" name = "nometransportadora" placeholder = "Nome">
                    <input type = "text" name = "endereco" placeholder = "Endereço">
                    <input type = "text" name = "telefone" placeholder = "Telefone">
                    <input type = "text" name = "cidade" placeholder = "Cidade">
                    <!-- a tag <select> indica uma caixa de combinação que mostra uma lista de itens selecionáveis pelo usuário -->   
                    <select name = "estado">
                        <?php while($dados_estados = mysqli_fetch_assoc($resultado_estados)) { ?>
                            <!-- a tag <option> indica um item da caixa de combinação -->
                            <option value = "<?php echo $dados_estados["estadoID"]; ?>">
                                <?php echo $dados_estados["nome"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type = "text" name = "cep" placeholder = "CEP">
                    <input type = "text" name = "cnpj" placeholder = "CNPJ">
                    <input type = "submit" value = "Enviar">
                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexão
    mysqli_free_result($resultado_estados);
    mysqli_close($conecta);
?>
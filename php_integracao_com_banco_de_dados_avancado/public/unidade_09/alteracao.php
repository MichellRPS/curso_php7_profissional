<?php
    require_once("../../conexao/conexao.php");
    // 171. Pegar as informações enviadas pelo formulário
    // importante: o código abaixo deve sempre ser o primeiro
    // verifica se a variável $_POST foi declarada e é diferente de nulo
    if(isset($_POST["nometransportadora"])) {
        $nome = $_POST["nometransportadora"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estados"];
        $cep = $_POST["cep"];
        $telefone = $_POST["telefone"];
        $cnpj = $_POST["cnpj"];
        $tid = $_POST["transportadoraID"];

        // 172. Realizar a alteração de dados
        // consulta para alterar
        $ca  = "UPDATE transportadoras SET";
        $ca .= " nometransportadora = '{$nome}',";
        $ca .= " endereco = '{$endereco}',";
        $ca .= " cidade = '{$cidade}',";
        $ca .= " estadoID = {$estado},";
        $ca .= " cep = '{$cep}',";
        $ca .= " telefone = '{$telefone}',";
        $ca .= " cnpj = '{$cnpj}'";
        $ca .= " WHERE transportadoraID = {$tid}";

        // resultado da consulta
        $ra = mysqli_query($conecta, $ca);
        if(! $ra) {
            die("Erro ao consultar o banco de dados");
        } else {
            header("location: listagem.php");
        }
    }

    // 169. Preencher os campos do formulário dinamicamente
    if(isset($_GET["codigo"])) {
        // consulta na tabela transportadoras
        $ct = "SELECT * FROM transportadoras";
        $ct .= " WHERE transportadoraID = {$_GET["codigo"]}";
        // resultado da consulta
        $rt = mysqli_query($conecta, $ct);
        if(! $rt) {
            die("Erro ao consultar o banco de dados.");
        } else {
            // dados da consulta
            $dt = mysqli_fetch_assoc($rt);
        }
        
        // 170. Preencher o campo select com seleção do estado atual
        // consulta à tabela estados
        $ce = "SELECT estadoID, nome FROM estados";
        // resultado da consulta
        $re = mysqli_query($conecta, $ce);
        if(! $re) {
            die("Erro ao consultar o banco de dados.");
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css"    rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
            <!-- 167. Apresentação dos arquivos -->
            <div id = "janela_formulario">
                <form action = "alteracao.php" method = "post">
                    <h2>Alteração de Transportadora</h2>

                    <label for = "nometransportadora">Nome da Transportadora</label>
                    <input type = "text" value = "<?php echo $dt["nometransportadora"]; ?>" name = "nometransportadora">

                    <label for = "endereco">Endereço</label>
                    <input type = "text" value = "<?php echo $dt["endereco"]; ?>" name = "endereco">
                    
                    <label for = "cidade">Cidade</label>
                    <input type = "text" value = "<?php echo $dt["cidade"]; ?>" name = "cidade">
                    
                    <label for = "estados">Estados</label>
                    <select id = "estados" name = "estados">
                        <?php
                            // 170. Preencher o campo select com seleção do estado atual
                            // define o estado da transportadora a ser alterada
                            $et = $dt["estadoID"];
                            while($laco = mysqli_fetch_assoc($re)) {
                                // define o estado atual do laço de repetição
                                $el = $laco["estadoID"];
                                // verifica se o estado do laço é o da transportadora
                                if($el == $et) {
                        ?>
                        <option value = "<?php echo  $laco["estadoID"];?>" selected>
                            <?php echo $laco["nome"]; ?>
                        </option>
                        <?php
                                } else {
                        ?>
                        <option value = "<?php echo  $laco["estadoID"];?>">
                            <?php echo $laco["nome"]; ?>
                        </option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    
                    <label for = "cep">CEP</label>
                    <input type = "text" value = "<?php echo $dt["cep"]; ?>" name = "cep">
                    
                    <label for = "telefone">Telefone</label>
                    <input type = "text" value = "<?php echo $dt["telefone"]; ?>" name = "telefone">
                    
                    <label for = "cnpj">CNPJ</label>
                    <input type = "text" value = "<?php echo $dt["cnpj"]; ?>" name = "cnpj">

                    <input type = "hidden" name = "transportadoraID" value = "<?php echo $dt["transportadoraID"]; ?>">

                    <input type = "submit" value = "Confirmar Alteração">

                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // liberar a memória do resultado da consulta
    if(isset($rt)) {
        mysqli_free_result($rt);
    }
    if(isset($re)) {
        mysqli_free_result($re);
    }
    // Fechar conexao
    mysqli_close($conecta);
?>
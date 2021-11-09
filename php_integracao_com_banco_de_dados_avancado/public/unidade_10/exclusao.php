<?php
    require_once("../../conexao/conexao.php");
    // 176. Excluir o registro no banco de dados
    if(isset($_POST["nometransportadora"])) {
        $tid = $_POST["transportadoraID"];
        // consulta de exclusão
        $ce = "DELETE FROM transportadoras WHERE transportadoraID = {$tid}";
        // resultado da consulta
        $re = mysqli_query($conecta, $ce);
        if(!$re) {
            die("Erro ao consultar o banco de dados");
        } else {
            header("location: listagem.php");
        }
    }

    // 174. Criar consulta ao banco de dados
    if(isset($_GET["codigo"])) {
        $id = $_GET["codigo"];
        // consulta à tabela de transportadoras
        $ct = "SELECT * FROM transportadoras WHERE transportadoraID = {$id}";
        // resultado da consulta
        $rt = mysqli_query($conecta, $ct);
        // verificação de erro
        if(!$rt) {
            die("Erro ao consultar o banco de dados.");
        }
    } else {
        // redirecionamento para quando há acesso direto pela barra de busca do navegador
        header("location: listagem.php");
    }
    // esse código não precisa ficar dentro do if, porque se der algo errado na consulta o restante do código não será executado
    // dados da consulta
    $dt = mysqli_fetch_assoc($rt);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
            <div id = "janela_formulario">
                <!-- 175. Montar o formulário de confirmação -->
                <form action="exclusao.php" method="post">
                    <h2>Exclusão de Transportadora</h2>
                    
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="<?php echo $dt["nometransportadora"] ?>" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" value="<?php echo $dt["endereco"] ?>" name="endereco" id="endereco">
                    
                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo $dt["cidade"] ?>" name="cidade" id="cidade">
                    
                    <input type="hidden" name="transportadoraID" value="<?php echo $dt["transportadoraID"] ?>">
                    
                    <input type="submit" value="Confirmar exclusão">
                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // liberar memória do resultado da consulta ao banco de dados
    if(isset($rt)) {
        mysqli_free_result($rt);
    }
    // Fechar conexao
    mysqli_close($conecta);
?>
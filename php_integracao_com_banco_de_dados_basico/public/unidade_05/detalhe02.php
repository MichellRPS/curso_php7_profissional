<?php
    // Fazer um filtro na página de detalhe (aula 143)
    require_once("../../conexao/conexao.php");

    if(isset($_GET["codigo"])) {
        $produtoID = $_GET["codigo"];
    } else {
        Header("Location: listagem.php");
    }

    $consulta   = "SELECT *";
    $consulta   .= " FROM produtos";
    $consulta   .= " WHERE produtoID = {$produtoID}";
    $detalhe  = mysqli_query($conecta, $consulta);
    if(! $detalhe) {
        die("Falha na consulta ao banco de dados.");
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>  
            <?php print_r($dados_detalhe); ?>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
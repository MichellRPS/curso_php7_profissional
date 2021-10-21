<?php
    // Testar parâmetro (aula 142)
    require_once("../../conexao/conexao.php");
    if(isset($_GET["codigo"])) {
        $produtoID = $_GET["codigo"];
    } else {
        Header("Location: listagem.php");
    }
    // $produtoID = isset($GET["codigo"])? $GET["codigo"] : Header("Location: listagem.php");
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
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
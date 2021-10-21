<?php
    // Mostrar a imagem do produto (aula 136)
    require_once("../../conexao/conexao.php");
    $consulta = "SELECT `produtoID`, `nomeproduto`, `tempoentrega`, `precounitario`, `imagempequena`";
    $consulta .= " FROM andes.produtos";
    $resultado = mysqli_query($conecta, $consulta);
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
            <?php
                if(! $resultado) {
                    die("Falha na consulta ao banco de dados.");
                }
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                    <ul>
                        <li><img src = "<?php echo $linha["imagempequena"]; ?>"></li>
                        <li><?php echo $linha["nomeproduto"]; ?></li>
                        <li><?php echo $linha["tempoentrega"]; ?></li>
                        <li><?php echo $linha["precounitario"]; ?></li>
                    </ul>
            <?php
                }
                mysqli_free_result($resultado);
            ?>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexão
    mysqli_close($conecta);
?>
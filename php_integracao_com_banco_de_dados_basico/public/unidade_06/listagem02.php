<?php
    // Resultado da Pesquisa (aula 148)
    require_once("../../conexao/conexao.php");

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // Consulta ao banco de dados
    $produtos   = "SELECT `produtoID`, `nomeproduto`, `tempoentrega`, `precounitario`, `imagempequena` ";
    $produtos   .= "FROM `andes`.`produtos` ";
    if(isset($_GET["produto"])) {
        $nome_produto = $_GET["produto"];
        $produtos .= " WHERE nomeproduto LIKE '%{$nome_produto}%'";
        // obs: precisa colocar os apóstrofos antes e depois dos sinais de procentagem
        // obs: não precisa colocar crase nos nomes de colunas, tabelas e bancos do banco de dados
        // obs: nesse caso não precisa colocar o nome do banco antes do nomes da tabela, porque no arquivo conexao.php o banco já foi definido
    }
    $resultado  = mysqli_query($conecta, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css"            rel="stylesheet">
        <link href="_css/produtos.css"          rel="stylesheet">
        <link href="_css/produto_pesquisa.css"  rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php");     ?>
        <?php include_once("../_incluir/funcoes.php");  ?>
        
        <main>        
            <div id = "janela_pesquisa">
                <!-- formulário de pesquisa -->
                <form action = "listagem02.php" method = "get">
                    <!-- campo de texto para digitar produto a ser pesquisado -->
                    <input type = "text"    name = "produto"    placeholder = "Pesquisar">
                    <!-- imagem que representa um botão para efetuar a pesquisa -->
                    <input type = "image"   name = "pesquisa"   src = "../_assets/botao_search.png">
                </form>
            </div>
           <div id="listagem_produtos"> 
            <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <ul>
                    <li class="imagem">
                        <a href="detalhe.php?codigo=<?php echo $linha['produtoID'] ?>">
                            <img src="<?php echo $linha["imagempequena"] ?>">
                        </a>
                    </li>
                    <li><h3><?php echo $linha["nomeproduto"] ?></h3></li>
                    <li>Tempo de Entrega :  <?php echo $linha["tempoentrega"] ?> </li>
                    <li>Preço unitário :    <?php echo real_format($linha["precounitario"]) ?> </li>
                </ul>
            <?php
                }
            ?>           
            </div>
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
<?php // 188. Incluir dados no banco e publicar imagem  ?>
<?php require_once("../../conexao/conexao.php");        ?>
<?php include_once("../_incluir/funcoes.php");          ?>
<?php
    // confere se a navegação veio pelo preenchimento do formulário
    if(isset($_POST['nomeproduto'])) {
        // pasta destino das imagens
        $pasta = "images/product_images";
        // resultado da publicação da imagem grande
        $rig = carregar_arquivo($_FILES["foto_grande"], $pasta);
        // resultado da publicação da imagem pequena
        $rip = carregar_arquivo($_FILES["foto_pequena"], $pasta);
        // mensagem da publicação da imagem grande
        $mig = $rig["mensagem"];
        // mensagem da publicação da imagem pequena
        $mip = $rip["mensagem"];
        // preenche as variáveis internas
        $nomeproduto    = $_POST["nomeproduto"];
        $codigobarra    = $_POST["codigobarra"];
        $tempoentrega   = $_POST["tempoentrega"];
        $categoriaID    = $_POST["categoriaID"];
        $fornecedorID   = $_POST["fornecedorID"];
        $precounitario  = $_POST["precounitario"];
        $precorevenda   = $_POST["precorevenda"];
        $estoque        = $_POST["estoque"];
        $imagem_grande  = $pasta . "/" . $rig["nome"];
        $imagem_pequena = $pasta . "/" . $rip["nome"];
        // consulta de inserção na tabela produtos
        $ci = "INSERT INTO produtos";
        $ci .=" (nomeproduto,codigobarra,tempoentrega,categoriaID,fornecedorID,precounitario,precorevenda,estoque,imagemgrande,imagempequena)";
        $ci .=" VALUES";
        $ci .=" ('$nomeproduto','$codigobarra',$tempoentrega,$categoriaID,$fornecedorID,$precounitario,$precorevenda,$estoque,'$imagem_grande','$imagem_pequena')";
        // resultado da consulta de inserção
        $ri = mysqli_query($conecta,$ci);
        if(!$ri) {
            die("Erro ao inserir registro no banco de dados.");   
        } else {
            $mensagem = "Registro inserido com sucesso.";
        }
    }
    // consulta a tabela de categorias
    $cc = "SELECT categoriaID, nomecategoria FROM categorias ";
    $rc = mysqli_query($conecta, $cc);
    if(!$rc) {
        die("Erro ao consultar o banco de dados.");   
    }
    // consulta a tabela de fornecedores
    $cf = "SELECT fornecedorID, nomefornecedor FROM fornecedores ";
    $rf = mysqli_query($conecta, $cf);
    if(!$rf) {
        die("Erro ao consultar o banco de dados.");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        <!-- estilo -->
        <link href="_css/estilo.css"    rel="stylesheet">
        <link href="_css/inclusao.css"  rel="stylesheet">
    </head>
    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <main>
            <div id="janela_formulario">
                <form action="incluir.php" method="post" enctype="multipart/form-data">
                    <h2>Incluir Novo Produto</h2>
                    <!-- campo de nome do produto e código de barra -->
                    <input type="text" name="nomeproduto" placeholder="Nome do Produto">
                    <input type="text" name="codigobarra" placeholder="Código de Barra">
                    <!-- campo de tempo de entrega -->
                    <label>Tempo de Entrega</label>
                    <input type="radio" name="tempoentrega" value="5">5 dias
                    <input type="radio" name="tempoentrega" value="8">8 dias
                    <input type="radio" name="tempoentrega" value="15">15 dias
                    <input type="radio" name="tempoentrega" value="30">30 dias
                    <!-- campo de categorias -->
                    <label>Selecione a categoria do produto</label>
                    <select name="categoriaID">
                        <?php
                            while($linha = mysqli_fetch_assoc($rc)) {
                        ?>
                            <option value="<?php echo $linha["categoriaID"]; ?>">
                                <?php echo $linha["nomecategoria"]; ?>
                            </option>
                        <?php
                            }
                        ?>                        
                    </select>
                    <!-- campo de fornecedor -->
                    <label>Selecione o fornecedor do produto</label>
                    <select name="fornecedorID">
                        <?php
                            while($linha = mysqli_fetch_assoc($rf)) {
                        ?>
                            <option value="<?php echo $linha["fornecedorID"]; ?>">
                                <?php echo utf8_encode($linha["nomefornecedor"]); ?>
                            </option>
                        <?php
                            }
                        ?>                        
                    </select>
                    <!-- campo de preços -->
                    <input type="text" name="precorevenda"  placeholder="Preço Revenda">
                    <input type="text" name="precounitario" placeholder="Preço Unitário">
                    <!-- campo de estoque -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="614400">
                    <!-- campo de foto grande -->
                    <label>Foto Grande</label>
                    <input type="file"   name="foto_grande">
                    <span class="resposta">
                        <?php
                            if(isset($mig)) {
                                echo $mig;
                            }    
                        ?>
                    </span>
                    <!-- campo de foto pequena -->
                    <label>Foto Pequena</label>
                    <input type="file"   name="foto_pequena">
                    <span class="resposta">
                        <?php
                            if(isset($mip)) {
                                echo $mip;
                            }
                        ?>
                    </span>
                    <!-- campo escondido para iniciar estoque -->
                    <input type="hidden" name="estoque" value="0">
                    <!-- botão submit -->
                    <input type="submit" value="Inserir novo produto">
                    <?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>                                  
                </form>
            </div>
        </main>
        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>
<?php
    // fechar as consultas
    mysqli_free_result($rc);
    mysqli_free_result($rf);
?>
<?php
    // fechar conexão
    mysqli_close($conecta);
?>
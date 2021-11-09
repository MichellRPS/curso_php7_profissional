<?php // 189. Página de contato - Passo 1           ?>
<?php require_once("../../conexao/conexao.php");    ?>
<?php include_once("../_incluir/funcoes.php");      ?>
<?php
    if(isset($_POST["enviar"])) {
        // 190. Página de contato - Passo 2
        // envia a mensagem
        if(enviar_mensagem($_POST))  {
            $mensagem = "Mensagem enviada com sucesso.";
        } else {
            $mensagem = "Erro ao enviar mensagem.";
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
        <link href="_css/contato.css"   rel="stylesheet">
    </head>
    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <main> 
            <div id="janela_formulario">
                <form action="contato.php" method="post">
                    <input type="text"  name="nome"  placeholder="Digite seu nome">
                    <input type="email" name="email" placeholder="Digite seu email">
                    <label>Mensagem</label>
                    <textarea name="texto"></textarea>
                    <input type="submit" name="enviar" value="Enviar Mensagem">
                    <?php
                        if(isset($mensagem)) {
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
    // fechar conexão
    mysqli_close($conecta);
?>
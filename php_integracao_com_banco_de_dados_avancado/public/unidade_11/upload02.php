<?php require_once("../../conexao/conexao.php");    ?>
<?php // 182. Otimizar código do upload             ?>
<?php include_once("../_incluir/funcoes.php");      ?>

<?php
    if(isset($_POST["enviar"])) {
        $mensagem = carregar_arquivo($_FILES["upload_file"], "uploads")["mensagem"];
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
        <style>
            input {
                display: block;
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>  
        
        <main>
            <div id = "janela_formulario">
                <form action = "upload02.php" method = "post" enctype = "multipart/form-data">
                    <input type = "hidden" name = "MAX_FILE_SIZE" value = "45000000">
                    <input type = "file" name = "upload_file" accept = "image/jpeg, image/png, image/gif">
                    <input type = "submit" name = "enviar">
                </form>
                <?php
                    if(isset($mensagem)) {
                        echo $mensagem;
                    }
                ?>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // fechar conexão
    mysqli_close($conecta);
?>
<?php require_once("../../conexao/conexao.php"); ?>

<?php
    // 180. Restringir publicação por peso do arquivo
    $array_erro = array(
        UPLOAD_ERR_OK => "Sem erro.",
        UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
        UPLOAD_ERR_FORM_SIZE => "O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML",
        UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
        UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
        UPLOAD_ERR_NO_TMP_DIR => "Pasta temporária ausente.",
        UPLOAD_ERR_CANT_WRITE => "Falha em escrever o arquivo em disco.",
        UPLOAD_ERR_EXTENSION => "Uma extensão do PHP interrompeu o upload do arquivo."
    );

    // 178. Criar formulário e testes de upload
    if(isset($_POST["enviar"])) {
        // echo "<pre>";
        // print_r($_FILES["upload_file"]);
        // echo "</pre>";
        // echo $_FILES["upload_file"]["type"];
        // echo $array_erro[$_FILES["upload_file"]["error"]];

        // 180. Restringir publicação por peso do arquivo
        if($_FILES["upload_file"]["error"] == 0) {
            // 179. Realizar o upload do arquivo
            $pasta_tmp = $_FILES["upload_file"]["tmp_name"];
            $arquivo = $_FILES["upload_file"]["name"];
            $pasta = "uploads";
            // echo $pasta_tmp . "<br />" . $arquivo;
            // move o arquivo da pasta temporária para outra
            // obs: na verdade é como se fosse uma cópia, pois o arquivo original permanece na mesma pasta
            // verifica se o arquivo foi enviado e define mensagem

            // 181. Restringir publicação por tipo de arquivo
            // proteção de upload do lado do servidor (PHP)
            $tipo = $_FILES["upload_file"]["type"];
            // a função strrchr encontra a última ocorrência do caractere em uma string e retorna uma substring que vai desde essa última ocorrência até o fim da string
            $extensao = strrchr($arquivo, ".");
            // echo $extensao . "<br />" . $tipo;
            if($tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
                if(move_uploaded_file($pasta_tmp, $pasta . "/" . $arquivo)) {
                    $mensagem = "Arquivo enviado com sucesso!";
                } /* else {
                    $mensagem = "Erro ao enviar o arquivo.";
                } */
            } else {
                $mensagem = "Extensão de arquivo inválida: $extensao";
            }
        } else {
            $mensagem = $array_erro[$_FILES["upload_file"]["error"]];
        }
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
        <?php include_once("../_incluir/funcoes.php"); ?>  
        
        <main>
            <!-- 178. Criar formulário e testes de upload -->
            <div id = "janela_formulario">
                <form action = "upload.php" method = "post" enctype = "multipart/form-data">
                    <!-- 180. Restringir publicação por peso do arquivo -->
                    <!-- define o tamanho máximo do arquivo no formulário -->
                    <input type = "hidden" name = "MAX_FILE_SIZE" value = "45000000">
                    <!-- 178. Criar formulário e testes de upload -->
                    <input type = "file" name = "upload_file" accept = "image/jpeg, image/png, image/gif"> <!-- proteção de upload do lado do servidor (PHP) -->
                    <input type = "submit" name = "enviar">
                </form>
                <?php
                    // 179. Realizar o upload do arquivo
                    // escreve mensagem
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
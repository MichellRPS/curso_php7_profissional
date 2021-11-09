<?php 
    // Curso IV - PHP Integração com Banco de Dados - Avançado

    // Compreender variável de sessão (aula 152)
    require_once("../../conexao/conexao.php");
    // inicialização da sessão - vínculo entre servidor e navegador
    // é preciso fazer isso em todas as páginas para que o usuário seja rastreado durante a navegação pelas páginas
    session_start();
    // Compreender operação de logout (aula 153)
    if(! isset($_SESSION["usuario"])) {
        header("Location: pagina1.php");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>
            <?php
                echo $_SESSION["usuario"];
            ?>
            <p>
                <a href = "logout.php"> Logout </a>
            </p>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
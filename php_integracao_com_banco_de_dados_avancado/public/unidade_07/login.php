<?php
    // Curso IV - PHP Integração com Banco de Dados - Avançado

    // Criar uma tela de Login (aula 154)
    require_once("../../conexao/conexao.php");
    // Criar variável de sessão (aula 157)
    session_start();
    // Resgatar informações enviadas (aula 155)
    if(isset($_POST["usuario"]) && isset($_POST["senha"])) {
        $usuario    = $_POST["usuario"];
        $senha      = $_POST["senha"];
        // echo $usuario . "<br />" . $senha;
        // Realizar filtro no banco de dados (aula 156)
        $consulta = "SELECT * FROM clientes WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
        $resultado = mysqli_query($conecta, $consulta);
        if(! $resultado) {
            die("Erro ao consultar o banco de dados");
        }
        $dados = mysqli_fetch_assoc($resultado);
        if(empty($dados)) {
            $mensagem = "Usuário e/ou senha incorretos";
        } else {
            // o nome da variável de sessão entre colchetes e aspas é definido pelo programador
            $_SESSION["user_portal"] = $dados["clienteID"];
            header("location:listagem.php");
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href = "_css/estilo.css"  rel = "stylesheet">
        <link href = "_css/login.css"   rel = "stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>  
            <div id = "janela_login">
                <form action = "login.php" method = "post">
                    <!-- Não se deve utilizar o método get em formulários de login, pois os dados de acesso, como usuário e senha ficam expostos no campo de URL de navegador -->
                    <h2> Tela de Login </h2>
                    <input type = "text" name = "usuario" placeholder = "Usuário">
                    <!-- placeholder representa a palavra ou frase que ficará no campo de texto para indicar ao usuário qual dado deve ser inserido nesse campo -->
                    <input type = "password" name = "senha" placeholder = "Senha">
                    <input type = "submit" value = "Login">

                    <?php
                        // Realizar filtro no banco de dados (aula 156)
                        if(isset($mensagem)) {
                    ?>
                            <p> <?php echo $mensagem; ?> </p>
                    <?php
                        }
                    ?>
                </form>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
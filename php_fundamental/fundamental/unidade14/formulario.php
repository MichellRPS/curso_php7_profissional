<!doctype html>
<!-- RESGATAR INFORMAÇÕES DO FORMULÁRIO (AULA 68) -->
<!-- IDENTIFICAÇÃO DO RECEBIMENTO (AULA 69) -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <!-- A LINHA ABAIXO APLICA UMA FOLHA DE ESTILOS CSS -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <!-- A TAG <form> INDICA UM FORMULÁRIO -->
        <form action="destino.php" method="post">
            <!-- O MÉTODO "get" ENVIA DADOS PARA A PÁGINA destino.php POR MEIO DA URL. OS DADOS FICAM ARMAZENADOS NA VARIÁVEL $_GET DO PHP -->
            <!-- O MÉTODO "post" ENVIA DADOS QUE FICAM ARMAZENADAS NA VARIÁVEL $_POST DO PHP E NÃO FICA NA URL -->
            <!-- A TAG <label> INDICA UM RÓTULO. NESSE CASO, INFORMA QUAL DADO DEVE SER DIGITADO NO CAMPO DE TEXTO -->
            <label for="nome">Nome Completo</label>
            <!-- TAG <input> INDICA UMA ENTRADA DE DADOS. NESSE CASO É DO TIPO TEXTO, OU SEJA, UM CAMPO DE TEXTO. name INDICA O NOME DA VARIÁVEL QUE RECEBERÁ OS DADOS DO USUÁRIO -->
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <!-- NESSE CASO, A ENTRADA DE DADOS É UM BOTÃO -->
            <input type="submit" value="Enviar Cadastro">
        </form>
    </body>
</html>
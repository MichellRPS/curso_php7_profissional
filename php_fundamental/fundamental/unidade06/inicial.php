<?php 
    // CRIAÇÃO DE VARIÁVEIS EM PHP
    // A NOMENCLATURA PODE SER DE DUAS FORMAS:
    // EX.:
    // $nome CRIA A VARIÁVEL nome
    // $_nome CRIA A VARIÁVEL _nome (NOMENCLATURA USADA PARA FACILITAR A VISUALIZAÇÃO. BOAS PRÁTICAS)
    // NÃO SÃO PERMITIDOS CARACTERES ESPECIAIS COMO ACENTOS E CEDILHA
    // VARIÁVEIS SÃO case sensitive: UMA VARIÁVEL $NOME É DIFERENTE DE $nome
    // PODEM SER CRIADAS AQUI OU NA TAG <body>
    // BOAS PRÁTICAS: O QUE VAI SER VISUALIZADO PELO USUÁRIO DEVE SER COLOCADO NA TAG <body>
    $nome = "Michell Rezende de Paula e Silva";
 ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p><?php 
            echo $nome;
         ?></p>
        <?php 
            $_telefone = "(34) 9 9969-9014";
            echo $_telefone;
         ?>
    </body>
</html>
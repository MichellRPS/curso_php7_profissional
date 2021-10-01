<?php
    // FORM - SINGLE PAGE (AULA 71)
    $_name = isset ($_POST ["nome"])? $_POST ["nome"] : "Desconhecido";
    $_email = isset ($_POST ["email"])? $_POST ["email"] : "Desconhecido";
    // MOSTRAR O FORMULÁRIO E O RESULTADO DO MESMO EM UMA ÚNICA PÁGINA
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO PHP FUNDAMENTAL</title>
    <link href="_css/estilo.css" rel="stylesheet">
</head>
<body>
    <?php if (! isset ($_POST ["formulario"])) { ?>
    <form action="formulario02.php" method="post">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" name="formulario" value="Enviar Cadastro">
        <!-- POR QUE É RELEVANTE ADICIONAR name="formulario" NA LINHA ACIMA? R.: NA AULA FOI RELEVANTE APENAS PARA USAR COMO CONDIÇÃO if -->
        <!-- POR QUE É USADO $_POST ["formulario"] COMO CONDIÇÃO if AO INVÉS DE $_POST ["nome"] OU $_POST ["email"]? R.: PARA DIFERENCIAR, UMA VEZ QUE "nome" e "email" JÁ TÊM PROPÓSITO -->
        <!-- TESTEI UTILIZANDO $_POST ["nome"] COMO CONDIÇÃO E FUNCIONOU DO MESMO JEITO... OBS.: TAMBÉM FUNCIONA COM "email" -->
    </form>
    <?php
        } else {
            echo "Nome: " . $_name . "<br />" . "Email: " . $_email;
        }
    ?>
</body>
</html>
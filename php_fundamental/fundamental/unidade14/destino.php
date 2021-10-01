<?php
    // RESGATAR INFORMAÇÕES DO FORMULÁRIO (AULA 68)
    // UTILIZANDO O MÉTODO "get" PARA RESGATAR AS INFORMAÇÕES:
    // $_name = $_GET ["nome"];
    // $_email = $_GET ["email"];
    // UTILIZANDO O MÉTODO "post" PARA RESGATAR AS INFORMAÇÕES:
    // $_name = $_POST ["nome"];
    // $_email = $_POST ["email"];

    // IDENTIFICAÇÃO DO RECEBIMENTO (AULA 69)
    /*
    if (isset ($_POST ["nome"])) {
        $_name = $_POST ["nome"];
    } else {
        $_name = "Desconhecido";
    }
    if (isset ($_POST ["email"])) {
        $_email = $_POST ["email"];
    } else {
        $_email = "Desconhecido";
    }
    */

    // IDENTIFICAR O OPERADOR TERNÁRIO (AULA 70)
    $_name = (isset ($_POST ["nome"]))? $_POST ["nome"] : "Desconhecido";
    $_email = (isset ($_POST ["email"]))? $_POST ["email"] : "Desconhecido";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                // print_r ($_GET);
                // print_r ($_POST);
                // A FUNÇÃO print_r DEVE SER USADO EXCLUSIVAMENTE PARA TESTES
            ?>
        </pre>

        <?php
            // echo $_name;
            // echo $_email;
            echo "Nome: " . $_name . "<br />" . "Email: " . $_email;
        ?>
    </body>
</html>
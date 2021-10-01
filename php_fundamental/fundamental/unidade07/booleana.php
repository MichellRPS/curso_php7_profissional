<?php
    // VARIÁVEIS BOOOLEANAS (AULA 29)
    $_fumante = true;
    // o valor de variáveis booleanas em php pode ser escrito com qualquer uma das ou todas as letras maiúsculas, porém, por boas práticas, é mais recomendado deixar tudo minúsculo
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "É fumante? $_fumante <br />";
            echo "A variável fumante é booleana? " . is_bool($_fumante) . "<br />";
        ?>
    </body>
</html>
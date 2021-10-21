<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP Integração com MySQL</title>
</head>

<body>
    <?php
        // require e require_once (aula 132)
        // as funções require e require_once são utilizadas para fazer a inclusão de arquivos PHP dentro de outro arquivo PHP
        // a diferença entre include e require consiste na forma como cada função lida com erros na inclusão
        // ao tentar incluir um arquivo que não existe, por exemplo, a função require interrompe a exibição de qualquer outra informação, de forma que só se pode ver o erro
        // a função include relata o erro ao usuário, porém o resto do código PHP é executa normalmente
        // require("curso4.php");
        require("curso1.php");
        // se os arquivos incluídos não estivessem na mesma pasta que o arquivo que recebe a inclusão, seria necessário colocar o caminho até eles
        echo "<br />";
        require_once("curso1.php");
        // a diferença entre require e require_once é o número de vezes que a inclusão pode acontecer. Na função require_once só pode haver uma inclusão, mesmo que a função se repita, ao contrário de require, que pode faz uma inclusão a cada vez que a função é chamada
        require("curso2.php");
        echo "<br />";
        require("curso3.php");
        // nesse caso, o arquivo arquivo.php recebeu a inclusão dos arquivos curso1.php, curso2.php e curso3.php
    ?>
</body>
</html>
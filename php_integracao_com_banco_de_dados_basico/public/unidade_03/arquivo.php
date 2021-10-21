<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP Integração com MySQL</title>
</head>

<body>
    <?php
        // include e include_once (aula 131)
        // as funções include e include_once são utilizadas para fazer a inclusão de arquivos PHP dentro de outro arquivo
        // include("curso4.php");
        include("curso1.php");
        // se os arquivos incluídos não estivessem na mesma pasta que o arquivo que recebe a inclusão, seria necessário colocar o caminho até eles
        echo "<br />";
        include_once("curso1.php");
        // a diferença entre include e include_once é o número de vezes que a inclusão pode acontecer. Na função include_once só pode haver uma inclusão, mesmo que a função se repita, ao contrário de include, que pode faz uma inclusão a cada vez que a função é chamada
        include("curso2.php");
        echo "<br />";
        include("curso3.php");
        // nesse caso, o arquivo arquivo.php recebeu a inclusão dos arquivos curso1.php, curso2.php e curso3.php
    ?>
</body>
</html>
<?php
    // LINKS COM PARÂMETROS (AULA 65)
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <!--
            DESTINO: OUTRA PÁGINA HTML
            A TAG <ul> CRIA UMA LISTA CUJOS ELEMENTOS SÃO MARCADOS COM UM PONTO
        <ul>
            <li> <a href = "laranja.html"> Laranja </a> </li>
            A TAG <li> INDICA UM ELEMENTO DA LISTA
            A TAG <a> INDICA UM LINK E href INDICA O DESTINO
            <li> <a href = "maca.html"> Maçã</li>
            <li> <a href = "abacate.html"> Abacate</li>
        </ul>
        -->

        <!-- DESTINO: PÁGINA PHP -->
        <ul>
            <li> <a href = "destino.php?codigo=0"> Laranja    </a> </li>
            <li> <a href = "destino.php?codigo=1"> Maçã       </a> </li>
            <li> <a href = "destino.php?codigo=2"> Abacate    </a> </li>
        </ul>
        <!-- A INTERROGAÇÃO SEPARA O NOME DO ARQUIVO DO PARÂMETRO, QUE NESSE CASO É codigo (PODERIA SER QUALQUER NOME, COMO OS PARÂMETROS DE UM MÉTODO EM JAVA), O QUAL PODE SER IGUAL A 0, 1, OU 2 -->
    </body>
</html>
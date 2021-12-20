<!doctype html>
<html>
    <!-- 205. Realizar uma requisição simples com JQuery -->
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <style>
            .curso{
                color: #f00;
            }
        </style>
    </head>

    <body>
        <!-- <div id="curso"></div> -->
        <div class="curso"></div>
        <div class="curso"></div>
        <div class="curso"></div>
        <script src="jquery.js"></script>
        <script>
            // altera elemento pelo ID
            // $('#curso').load('dados.txt');
            // obs.: $('') determina o elemento. Pode usar aspas, também.
            // altera elemento pela classe
            // $('.curso').load('dados.txt');
            // altera primeiro elemento pela classe
            $('.curso:first').load('dados.txt');
        </script>
    </body>
</html>
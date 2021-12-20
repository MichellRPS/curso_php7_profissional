<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>
    <body>
        <div id="nome"></div>
        <script src="jquery.js"></script>
        <script>
            // 206. Carregar uma variável de um arquivo externo com jQuery/AJAX
            $.ajax({
                url:'nome.php'
            }).then(sucesso, falha);
            // se funcionar, invoca a função sucesso (1º parâmetro)
            // senão invoca a função falha (2º parâmetro)
            function sucesso(valor) {
                $('div#nome').html(valor);
            }
            function falha() {
                $('div#nome').html("Falha no carregamento");
            }
            // outra forma, porém não aparece mensagem de erro:
            // $('div#nome').load('nome.php');
        </script>
    </body>
</html>
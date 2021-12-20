<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
        <script src="jquery.js"></script>
    </head>
    <body>
        <!--215. Aplicar estilo e aplicar um evento para carregar os dados-->
        <button id="botao">Carregar JSON</button>
        <div id="listagem"></div>
        <script>
            $('button#botao').click(function() {
                // como fazer com que ao pressionar o botão de novo a listagem desapareça?
                $('div#listagem').css('display','block');
                carregarDados();
            })
            function carregarDados() {
                $.getJSON('_json/produtos.json', function(data) {
                    var elemento;
                    elemento = "<ul>";
                    $.each(data, function(i, valor) {
                        elemento += "<li class='nome'>" + valor.nomeproduto + "</li>";
                        elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                    });
                    elemento += "</ul>";
                    $('div#listagem').html(elemento);
                });
            }
        </script>
    </body>
</html>
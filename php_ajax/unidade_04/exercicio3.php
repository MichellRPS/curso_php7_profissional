<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
        <script src="jquery.js"></script>
    </head>
    <body>
        <!-- 211. Chamar carregamento através de um evento -->
        <button id="botao">Carregar</button>
        <div id="listagem"></div>
        <script>
            $('button#botao').click(function() {
                $('div#listagem').css('display', 'block');
                carregarDados();
            })
            function carregarDados() {
                $.ajax({
                    url:'_xml/produtos.xml'
                }).then(sucesso, falha);
                function sucesso(arquivo) {
                    var elemento = "<ul>";
                    $(arquivo).find('produto').each(function() {
                        var nome    = $(this).find('nomeproduto').text();
                        var preco   = $(this).find('precounitario').text();
                        elemento += "<li class='nome'>" + nome + "</li>";
                        elemento += "<li class='preco'>" + preco + "</li>";
                    });
                    elemento += "</ul>"
                    $('div#listagem').html(elemento);
                }
                function falha() {
                    $('div#listagem').html("Falha no carregamento");
                }
            }
        </script>
    </body>
</html>
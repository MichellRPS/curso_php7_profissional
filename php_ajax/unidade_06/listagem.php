<!doctype html>
<html>
    <!--218. Realizar uma consulta ao arquivo JSON-->
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
        <script src="script/jquery.js"></script>
    </head>
    <body>
        <button id="botao">Carregar JSON</button>
        <div id="listagem"></div>
        <script>
            $('button#botao').click(function() {
                $('div#listagem').css('display','block');
                carregarDados();
            }); 
            function carregarDados() {
                // $.getJSON('_json/produtos.json', function(data) {
                $.getJSON('gerar_json2.php', function(data) {
                    var elemento;
                    elemento = "<ul>";
                    $.each(data, function(i, valor) {
                        elemento += "<li class='imagem'><img src='" + valor.imagempequena + "'></li>"; 
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
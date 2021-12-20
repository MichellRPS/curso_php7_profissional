<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script src="jquery.js"></script>
    </head>
    <body>
        <!-- 213. Carregar um arquivo JSON -->
        <div id="listagem"></div>
        <script>
            $.getJSON('_json/produtos.json', function(data) {
                // mostra no console os dados dos produtos
                // console.log(data);
                // mostra no console o nome de cada produto
                $.each(data, function(i, valor) { // para que serve o i?
                    console.log(valor.nomeproduto);
                });
            });
        </script>
    </body>
</html>
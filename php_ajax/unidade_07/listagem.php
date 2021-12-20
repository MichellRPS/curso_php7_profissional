<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script>
            // 220. Realizar a consulta usando a função de CallBack sem jQuery
            function retornarProdutos(data) {
                console.log(data[0].nomeproduto);
            }
        </script>
    </head>
    <body>
        <!-- leitura de arquivo JavaScript externo -->
        <!-- relembrando: JSON = JavaScript Object Notation -->
        <script src="http://localhost/php_ajax/unidade_07/gerar_json.php?callback=retornarProdutos"></script>
    </body>
</html>